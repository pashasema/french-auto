<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package french-avto
 */

?>

<div class="container">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<!-- 		<?php
		global $post;
		if($post->ID==7){ 
		}
		else if($post->ID==10){
		}
		else{
			?> -->
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->
<!-- 			<?php
		}
		?> -->

		<?php french_avto_post_thumbnail(); ?>

		<div class="entry-content">
			<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'french-avto' ),
				'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->

		<?php if ( get_edit_post_link() ) : ?>
			<footer class="entry-footer">
				<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'french-avto' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
				?>
			</footer><!-- .entry-footer -->
		<?php endif; ?>
	</article><!-- #post-<?php the_ID(); ?> -->

</div><!-- .container -->

<!-- <?php
global $post;
if($post->ID==7){ 
	get_template_part( '/custom-templates/legkovye');
}
else if($post->ID==10){
	get_template_part( '/custom-templates/kommercheskie');
}
?> -->
