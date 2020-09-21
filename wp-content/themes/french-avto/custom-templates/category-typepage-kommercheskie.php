<?php get_header();?>


<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="container"><?php
		if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
		}
		?>
	</div>

	<div class="container">

		<?php get_template_part( "custom-template-parts/kommercheskie-top-background"); ?>

	</div><!-- .container -->

	<?php get_template_part( "custom-template-parts/kommercheskie-car-type"); ?>

	<div class="container">

		<?php get_template_part( "custom-template-parts/services"); ?>

	</div><!-- .container -->

	<div class="container">

		<?php get_template_part( "custom-template-parts/block-with-form"); ?>

	</div><!-- .container -->

	<?php get_template_part( "custom-template-parts/warranty"); ?>

	<?php get_template_part( "custom-template-parts/why-choose-us"); ?>

	<div class="container">

		<?php get_template_part( "custom-template-parts/service"); ?>

	</div><!-- .container -->

	<div class="container">

		<?php get_template_part( "custom-template-parts/car-type-calculation"); ?>

	</div><!-- .container -->

</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();?>