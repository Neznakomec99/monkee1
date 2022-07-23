<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package monkee
 */
global $monkee;
?>

	<footer id="colophon" class="site-footer">
		<div class="footer-line container">
		
			<div class="row">
				<div class="footer-menu-links col-6">
				
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img class="logo" src="<?php echo $monkee['logo-site-footer']['url']; ?>" />
					</a>
					<?php 
					$new_tel = str_replace(' ', '', $monkee['tel']); 
					$new_tel = str_replace('(', '', $new_tel); 
					$new_tel = str_replace(')', '', $new_tel);
					$new_tel = str_replace('-', '', $new_tel); 
					?>
					<ul class="menu-container menu">
						<li>
							<a href="tel:<?php echo $new_tel;?>">
								<?php echo $monkee['tel'];?>
							</a>
						</li>
						<li class="mail_field">			
							<a href="mailto:<?php echo $monkee['email'];?>">
								<?php echo $monkee['email'];?>
							</a>
						</li>

					</ul>

				
				</div>
				<div class="col-6">
						<h6 class="footer-head"><?php esc_html_e('Menu', 'monkee-translation');?></h6>
						<div class="menu-container_box">
						<?php wp_nav_menu(
							array(
								'theme_location' => 'footer-1',
								'menu_id'        => 'footer-1',
								'container'       => 'div',
								'container_class' => 'menu-container',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
							)
						);
						?>
						<?php wp_nav_menu(
							array(
								'theme_location' => 'footer-2',
								'menu_id'        => 'footer-2',
								'container'       => 'div',
								'container_class' => 'menu-container',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
							)
						);
						?>
						</div>
					</div>
				</div>
			
		</div>
		<a id="button_top"></a>
		<div class="footer-copy row">
			<div class="container">
				<div class="social-links">
					<a href="<?php echo $monkee['instagram'];?>" target="_blank"><img src="<?php echo $monkee['instagram-icon']['url']; ?>" alt="instagram"></a>
					<a href="<?php echo $monkee['facebook'];?>" target="_blank"><img src="<?php echo $monkee['facebook-icon']['url']; ?>" alt="Facebook"></a>
				</div>
				<div class="copy">© 2021 Infografic. Todos direitos reservados. Crafted with ♥ by <a target="_blank" href="https://www.linkedin.com/in/goncear-s/" target="_blank">Goncear Stanislav.</a></div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<div class="overlay_menu"></div>
</body>
</html>
