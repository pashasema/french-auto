<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package french-avto
 */

get_header();
?>


<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="container"><?php
		if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
		}
		?>
	</div>
	<?php if ( have_posts() ) : ?>
		<?php if(is_post_type_archive('kommercheskie')){

		}
		else if(is_post_type_archive('legkovye')){

		}
		else if(is_post_type_archive('akcii')){?>
			<div class="container">

				<h1 class="page-title">Акции</h1>
				<?php
			}
			else if(is_post_type_archive('poleznye-materialy')){?>
				<div class="container">

					<h1 class="page-title">Полезные материалы</h1>
					<?php
				}
				else{
					?>
					<div class="container">
						<header class="page-header">
							<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="archive-description">', '</div>' );
							?>
						</header><!-- .page-header -->
						<?php
					} ?>


					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				?>
				<?php 
				if(is_post_type_archive()){
					if(is_post_type_archive('akcii')){?>
						<div class="row">
							<?php
						}
						else if(is_post_type_archive('poleznye-materialy')){?>
							<div class="row">
								<?php
							}
						}
						else{
							?>
							<div class="row">
								<?php
							} ?>
							<?php
							get_template_part( 'template-parts/content', get_post_type() );
							?>
							<?php 
							if(is_post_type_archive()){
								if(is_post_type_archive('akcii')){?>
								</div><!-- .row -->
								<?php
							}
							else if(is_post_type_archive('poleznye-materialy')){?>
								</div><!-- .row -->
									<?php
								}
							}
							else{
								?>
							</div><!-- .row -->
							<?php
						} ?>
						<?php

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php if(is_post_type_archive()){
			if(is_post_type_archive('akcii')){?>
			</div><!-- .container -->
			<?php
		}
	}
	else{
		?>
	</div><!-- .container -->
	<?php
} ?>


<?php get_footer();