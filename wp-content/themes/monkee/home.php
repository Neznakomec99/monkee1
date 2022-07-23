<?php
/**
* Template Name: Home page
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package monkee
*/

get_header();

global $monkee;

?>

<main id="primary" class="site-main">


<?php 
	$background_image = get_field( 'background_image' ); 
	if ( $background_image ) $back_str = esc_url( $background_image['url'] );
?>
<section class="preview_section" style="background-image: url('<?php echo $back_str; ?>');">
<div class="container">
	<div class="row">
	<div class="col-6">


	<div class="subhead"><?php the_field( 'subhead_slide_section' ); ?></div>

	<h1 class="head"><?php the_field( 'head_slide_section' ); ?></h1>

	<div class="desc"><?php the_field( 'desc_slide_section' ); ?></div>
	<?php $slide_button_1 = get_field( 'slide_button_1' ); ?>
	<?php if ( $slide_button_1 ) : ?>
		<a class="button_black" href="<?php echo esc_url( $slide_button_1['url'] ); ?>" target="<?php echo esc_attr( $slide_button_1['target'] ); ?>"><?php echo esc_html( $slide_button_1['title'] ); ?></a>
	<?php endif; ?>
	</div>

	<div class="col-6">
	<?php $_images = get_field( 'gallery_slide_section' ); ?>
	<?php if ( $_images ) :  ?>
		<div class="slide_images">
		<?php foreach ( $_images as $_image ): ?>
			
			<img src="<?php echo esc_url( $_image['sizes']['large'] ); ?>" alt="<?php echo esc_attr( $_image['alt'] ); ?>" />
			
		<?php endforeach; ?>
		</div>
	<?php endif; ?>
	</div>
	</div>
</div>
</section>


<section class="best_opportunities_1">
<div class="container">
	<div class="row">
	<div class="col-6">
		<div class="sticky_elem">
			<h2 class="head line_draw"><?php the_field( 'best_opportunities_head' ); ?></h2>
			<div class="desc"><?php the_field( 'best_opportunities_description' ); ?></div>
		</div>
	</div>
	
	<div class="col-6">

		<?php if ( have_rows( 'best_opportunities' ) ) : ?>
			<div class="best_opportunities">
			<?php while ( have_rows( 'best_opportunities' ) ) : the_row(); ?>
				<div class="item">
					<?php $image = get_sub_field( 'image' ); ?>
					<?php if ( $image ) : ?>
						<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
					<?php endif; ?>
					<h3 class="head line_bottom"><?php the_sub_field( 'head' ); ?></h3>
					<div class="desc"><?php the_sub_field( 'desc' ); ?></div>
				</div>
			<?php endwhile; ?>
			</div>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>

	</div>
	</div>
</div>
</section>

<section class="best_opportunities_2">
<div class="container">
	<div class="row">
	<div class="col-6">

		<?php $best_opportunities2_image = get_field( 'best_opportunities2_image' ); ?>
		<?php if ( $best_opportunities2_image ) : ?>
			<img src="<?php echo esc_url( $best_opportunities2_image['url'] ); ?>" alt="<?php echo esc_attr( $best_opportunities2_image['alt'] ); ?>" />
		<?php endif; ?>

	</div>
	
	<div class="col-6">

		<h3 class="head line_draw"><?php the_field( 'best_opportunities2_head' ); ?></h3>
		<div class="desc"><?php the_field( 'best_opportunities2_description' ); ?></div>

	</div>
	</div>
</div>
</section>

<section class="best_opportunities_3">
<div class="container">
	<div class="row">
	<div class="col-6">

		<h3 class="head line_draw"><?php the_field( 'best_opportunities3_head' ); ?></h3>
		<div class="desc"><?php the_field( 'best_opportunities3_description' ); ?></div>

	</div>
	
	<div class="col-6">

		<?php $best_opportunities3_image = get_field( 'best_opportunities3_image' ); ?>
		<?php if ( $best_opportunities3_image ) : ?>
			<img src="<?php echo esc_url( $best_opportunities3_image['url'] ); ?>" alt="<?php echo esc_attr( $best_opportunities3_image['alt'] ); ?>" />
		<?php endif; ?>

	</div>
	</div>
</div>
</section>

<section class="monkee_labs_image">
<div class="container">
	<div class="row">
	<div class="col-10">
	
		<?php $monkee_labs_image = get_field( 'monkee_labs_image' ); ?>
		<?php if ( $monkee_labs_image ) : ?>
			<img src="<?php echo esc_url( $monkee_labs_image['url'] ); ?>" alt="<?php echo esc_attr( $monkee_labs_image['alt'] ); ?>" />
		<?php endif; ?>
	
	</div>
	</div>
</div>
</section>

<section class="our_clients">
<div class="container">
	<div class="row">
	<div class="col-10">
	
		<h4 class="head"><?php the_field( 'our_clients_head' ); ?></h4>
		
		<?php $our_clients_gallery_images = get_field( 'our_clients_gallery' ); ?>
		<?php if ( $our_clients_gallery_images ) :  ?>
			<div class="our_clients_gallery">
			<?php foreach ( $our_clients_gallery_images as $our_clients_gallery_image ): ?>
				<img src="<?php echo esc_url( $our_clients_gallery_image['sizes']['thumbnail'] ); ?>" alt="<?php echo esc_attr( $our_clients_gallery_image['alt'] ); ?>" />
			<?php endforeach; ?>
			</div>
		<?php endif; ?>
		
	</div>
	</div>
</div>
</section>

<?php
	$back_str = '';
	$talk_with_us_back_image = get_field( 'talk_with_us_back_image' );
	if ( $talk_with_us_back_image ) $back_str = esc_url( $talk_with_us_back_image['url'] );
?>
<section class="talk_with_us" style="background-image: url('<?php echo $back_str; ?>');">

<?php $talk_with_us_image_after_form = get_field( 'talk_with_us_image_after_form' ); ?>
<?php if ( $talk_with_us_image_after_form ) : ?>
	<img src="<?php echo esc_url( $talk_with_us_image_after_form['url'] ); ?>" alt="<?php echo esc_attr( $talk_with_us_image_after_form['alt'] ); ?>" />
<?php endif; ?>

<div class="container">
	<div class="row">
	<div class="col-6">
	
		<h5 class="head"><?php the_field( 'talk_with_us_head' ); ?></h5>
		
		
		<?php echo do_shortcode(get_field( 'form_shortcode' )); ?>
		
		
		<div class="desc"><?php the_field( 'talk_with_us_text_after_form' ); ?></div>
		
	</div>
	</div>
</div>

</section>

<section class="faq">
<div class="container">
	<div class="row">
	<div class="col-12">
	
		<h6 class="head"><?php the_field( 'faq_head' ); ?></h6>
		
		<?php if ( have_rows( 'faq' ) ) : ?>
			<div class="faqs">
			<?php while ( have_rows( 'faq' ) ) : the_row(); ?>
				<h6 class="head accordion"><?php the_sub_field( 'quastion' ); ?></h6>
				<div class="answer desc panel"><?php the_sub_field( 'answer' ); ?></div>
			<?php endwhile; ?>
			</div>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>

	</div>
	</div>
</div>
</section>


</main><!-- #main -->

<?php
get_footer();