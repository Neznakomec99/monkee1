/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
var $ = jQuery.noConflict();
// document.addEventListener('contextmenu', function(event) {
	// event.preventDefault();
// }, true); 
( function() {
window.mobileCheck = function() {
  let check = false;
  (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
  return check;
};
	// $("img").mousedown(function(){
		// return false;
	// });	

	// document.addEventListener('contextmenu', function(event) {
		// event.preventDefault();
	// }, true); 

	var btn = $("#button_top");
	var heightTop = 150;
	if (window.mobileCheck){
		heightTop = 20;
	}
	
	$(window).scroll(function() {
	  if ($(window).scrollTop() > 300) {
		btn.addClass('show');
	  } else {
		btn.removeClass('show');
	  }
	});
	
	btn.on('click', function(e) {
	  e.preventDefault();
	  $('html, body').animate({scrollTop:0}, '300');
	});
	
	//Start menu
	const mobile_menu = document.querySelector(".mobile-menu"),
		mobile_overlay = document.querySelector(".overlay_menu"),
		mobile_acc = document.querySelector(".reg_log_form img"),
		mobile_trigger = document.querySelector(".mobile-menu__trigger span");
	
	document.addEventListener("click", function (event) {
		if (event.target == mobile_trigger || event.target == mobile_acc) {
			mobile_menu.classList.toggle("mobile-menu_open");
			//mobile_overlay.classList.toggle("mobile-menu_open");
		}
		if (event.target !== mobile_trigger && event.target !== mobile_menu && event.target !== mobile_acc) {
			if (mobile_menu.classList.contains("mobile-menu_open")) {
				mobile_menu.classList.remove("mobile-menu_open");
				//mobile_overlay.classList.remove("mobile-menu_open");
			}
		}
	});

	function scrollTo(element) {
		//const header_height = document.querySelector(".header").offsetHeight;
		window.scroll({
			behavior: "smooth",
			left: 0,
			top: element.offsetTop // - header_height
		});
	}

	mobile_menu.querySelectorAll("a").forEach(function (element) {
		element.addEventListener("click", function (event) {
			if (element.getAttribute("href").charAt(0) == "#") {
				let hash = element.hash;
				event.preventDefault();
				scrollTo(document.querySelector(hash));
			} else {
				//just let link work
			}
		});
	});

	let initialPoint, finalPoint;

	document.addEventListener("touchstart1", function (event) {
		initialPoint = event.changedTouches[0];
	});

	document.addEventListener("touchend1", function (event) {
		finalPoint = event.changedTouches[0];

		let xAbs = Math.abs(initialPoint.pageX - finalPoint.pageX),
			yAbs = Math.abs(initialPoint.pageY - finalPoint.pageY);

		if (xAbs > 120 || yAbs > 120) {
			// 120 - SWIPE WIDTH
			if (xAbs > yAbs) {
				if (finalPoint.pageX < initialPoint.pageX) {
					mobile_menu.classList.remove("mobile-menu_open"); // SWIPE LEFT
				} else {
					mobile_menu.classList.add("mobile-menu_open"); // SWIPE RIGTH
				}
			} else {
				if (finalPoint.pageY < initialPoint.pageY) {
					// SWIPE UP
				} else {
					// SWIPE DOWN
				}
			}
		}
	});
	//End menu
	
	$(window).scroll(function() {    
		var scroll = $(window).scrollTop();

		 //>=, not <=
		if (scroll >= heightTop) {
			//clearHeader, not clearheader - caps H
			$("#masthead").addClass("active");
		}else{
			$("#masthead").removeClass("active");
		}
		
	});
	
	
	const slider = $(".our_clients_gallery");
	slider
	.slick({
		dots: false,
		infinite: true,
		arrows: true,
		autoplay: false,
		speed: 800,
		autoplaySpeed: 4000,
		slidesToShow: 5,
		slidesToScroll: 5,
		responsive: [
		{
		  breakpoint: 1024,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
			speed: 500,
		  }
		}]
	});

	if ( $(window).width() > 1024  ) {
	slider.on('wheel', (function(e) {
		e.preventDefault();

		if (e.originalEvent.deltaY < 0) {
			$(this).slick('slickNext');
		} else {
			$(this).slick('slickPrev');
		}

	}));
	}
	
	var acc = document.getElementsByClassName("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
	  acc[i].addEventListener("click", function() {
		this.classList.toggle("active");
		var panel = this.nextElementSibling;
		if (panel.style.maxHeight) {
		  panel.style.maxHeight = null;
		} else {
		  panel.style.maxHeight = panel.scrollHeight + "px";
		} 
	  });
	}
	acc[0].click();
	const siteNavigation = document.getElementById( 'site-navigation' );

	// Return early if the navigation doesn't exist.
	if ( ! siteNavigation ) {
		return;
	}

	const button = siteNavigation.getElementsByTagName( 'button' )[ 0 ];

	// Return early if the button doesn't exist.
	if ( 'undefined' === typeof button ) {
		return;
	}

	const menu = siteNavigation.getElementsByTagName( 'ul' )[ 0 ];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	if ( ! menu.classList.contains( 'nav-menu' ) ) {
		menu.classList.add( 'nav-menu' );
	}

	// Toggle the .toggled class and the aria-expanded value each time the button is clicked.
	button.addEventListener( 'click', function() {
		siteNavigation.classList.toggle( 'toggled' );

		if ( button.getAttribute( 'aria-expanded' ) === 'true' ) {
			button.setAttribute( 'aria-expanded', 'false' );
		} else {
			button.setAttribute( 'aria-expanded', 'true' );
		}
	} );

	// Remove the .toggled class and set aria-expanded to false when the user clicks outside the navigation.
	document.addEventListener( 'click', function( event ) {
		const isClickInside = siteNavigation.contains( event.target );

		if ( ! isClickInside ) {
			siteNavigation.classList.remove( 'toggled' );
			button.setAttribute( 'aria-expanded', 'false' );
		}
	} );

	// Get all the link elements within the menu.
	const links = menu.getElementsByTagName( 'a' );

	// Get all the link elements with children within the menu.
	const linksWithChildren = menu.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

	// Toggle focus each time a menu link is focused or blurred.
	for ( const link of links ) {
		link.addEventListener( 'focus', toggleFocus, true );
		link.addEventListener( 'blur', toggleFocus, true );
	}

	// Toggle focus each time a menu link with children receive a touch event.
	for ( const link of linksWithChildren ) {
		link.addEventListener( 'touchstart', toggleFocus, false );
	}

	/**
	 * Sets or removes .focus class on an element.
	 */
	function toggleFocus() {
		if ( event.type === 'focus' || event.type === 'blur' ) {
			let self = this;
			// Move up through the ancestors of the current link until we hit .nav-menu.
			while ( ! self.classList.contains( 'nav-menu' ) ) {
				// On li elements toggle the class .focus.
				if ( 'li' === self.tagName.toLowerCase() ) {
					self.classList.toggle( 'focus' );
				}
				self = self.parentNode;
			}
		}

		if ( event.type === 'touchstart' ) {
			const menuItem = this.parentNode;
			event.preventDefault();
			for ( const link of menuItem.parentNode.children ) {
				if ( menuItem !== link ) {
					link.classList.remove( 'focus' );
				}
			}
			menuItem.classList.toggle( 'focus' );
		}
	}
}() );
