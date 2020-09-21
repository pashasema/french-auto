<?php get_header();?>


<?php get_template_part( "custom-template-parts/marka-top-background"); ?>

<div class="container">

	<?php get_template_part( "custom-template-parts/marka-all-models"); ?>

	<?php get_template_part( "custom-template-parts/marka-services"); ?>

</div><!-- .container -->

<?php get_template_part( "custom-template-parts/warranty"); ?>

<div class="container">
	
	<?php get_template_part( "custom-template-parts/marka-block-with-form"); ?>

</div><!-- .container -->

<?php get_template_part( "custom-template-parts/marka-why-choose-us"); ?>

<div class="container">

	<?php get_template_part( "custom-template-parts/service"); ?>

	<?php get_template_part( "custom-template-parts/car-type-calculation"); ?>

</div><!-- .container -->

<?php get_footer();?>