<?php get_header(); ?>

<div class="container">

	<?php
	if ( function_exists('yoast_breadcrumb') ) {
		yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
	}
	?>
	
	<?php get_template_part( "custom-template-parts/model-usluga-top-background"); ?>

</div><!-- .container -->

<?php get_template_part( "custom-template-parts/uslugi-car-type"); ?>

<?php get_template_part( "custom-template-parts/model-usluga-why-choose-us"); ?>

<?php get_template_part( "custom-template-parts/warranty"); ?>

<div class="container">

	<?php get_template_part( "custom-template-parts/service"); ?>

</div><!-- .container -->

<?php get_template_part( "custom-template-parts/uslugi-prices"); ?>

<div class="container">

	<?php get_template_part( "custom-template-parts/car-type-calculation"); ?>

	<?php get_template_part( "custom-template-parts/block-with-form"); ?>

	<?php get_template_part( "custom-template-parts/services"); ?>

</div><!-- .container -->	

<?php get_template_part( "custom-template-parts/news"); ?>

<?php get_footer(); ?>