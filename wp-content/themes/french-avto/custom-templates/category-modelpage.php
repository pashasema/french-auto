<?php get_header();?>

<div class="container"><?php
if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
?>

<?php get_template_part( "custom-template-parts/model-top-background"); ?>

<?php get_template_part( "custom-template-parts/marka-services"); ?>

</div><!-- .container -->

<?php get_template_part( "custom-template-parts/warranty"); ?>

<div class="container">
	
	<?php get_template_part( "custom-template-parts/model-block-with-form"); ?>

</div><!-- .container -->

<?php get_template_part( "custom-template-parts/model-why-choose-us"); ?>

<div class="container">

	<?php get_template_part( "custom-template-parts/service"); ?>

	<?php get_template_part( "custom-template-parts/car-type-calculation"); ?>

</div><!-- .container -->

<?php get_footer();?>