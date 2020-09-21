<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package french-avto
 */

?>
<?php if (!is_singular()){?>
	<div class="news-block col-lg-4 col-md-6 col-sm-12">
	<?php } ?>

	<div class="news-block-inner">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="news-block__wrap-img">
				<a class="news-block__link" href="<?php echo get_permalink(); ?>"><img class="news-block__img" src="<?php echo the_post_thumbnail_url(); ?>" alt=""></a>
			</div><!-- .news-block-inner__wrap-img -->

			<div class="news-block__meta">
				<?php 
				if ( 'post' === get_post_type() ) :
					?>
					<ul class="news-block__list">

						<li class="news-block__list-item"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/avatar.svg" class="news-block__list-item-icon news-block__list-item-icon--admin"> <?php
						echo get_the_author();?></li>
						<li class="news-block__list-item"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/calendar.svg" class="news-block__list-item-icon news-block__list-item-icon--date"> <?php the_time('j F Y'); ?></li>

					</ul><!-- .news-block__list -->
				<?php endif; ?>

				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="news-block__title">', '</h1>' );
				else :
					the_title( '<h2 class="news-block__title"><a class="news-block__title-link" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
				?>
				<div class="news-block__text">
					<?php if (is_singular()){?>
						<?php the_content(); ?>
					<?php } 
					else{
						the_excerpt();
					}?>
				</div><!-- .news-block__text -->

				<?php if (!is_singular()){?>
					<a href="<?php echo get_permalink(); ?>" class="news-block__btn">Подробнее <img src="<?php echo get_template_directory_uri(); ?>/img/icons/arrow.svg" class="news-block__list-item-icon"></a>
				<?php } ?>

			</div><!-- .news-block__meta -->

		</article><!-- #post-<?php the_ID(); ?> -->
	</div><!-- .news-block-inner -->

	<?php if (!is_singular()){?>
	</div><!-- .news-block .col -->
<?php } ?>



