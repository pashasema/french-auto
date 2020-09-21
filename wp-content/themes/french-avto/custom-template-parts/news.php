<?php $query = new WP_Query( array('post_type'   => 'poleznye-materialy')); ?>
<?php if ($query->have_posts()) : ?>
	<section class="news services-section-margin">

		<div class="container">

			<div class="all-titles-wrap">
				<h2 class="all-titles news__title">Полезные статьи</h2>
				<span class="devider"><span></span></span>
			</div>

			<?php $args = array( 'posts_per_page' => 3, 'post_type'   => 'poleznye-materialy');
			$lastposts = get_posts( $args );
			foreach( $lastposts as $post ){ setup_postdata($post);?>
				<div class="row">

					<div class="news-block col-lg-4 col-md-6 col-sm-12">

						<div class="news-block-inner">

							<div class="news-block__wrap-img">
								<a class="news-block__link" href="<?php echo get_permalink(); ?>"><img class="news-block__img" src="<?php echo the_post_thumbnail_url(); ?>" alt=""></a>
							</div><!-- .news-block-inner__wrap-img -->

							<div class="news-block__meta">
								<ul class="news-block__list">

									<li class="news-block__list-item"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/avatar.svg" class="news-block__list-item-icon news-block__list-item-icon--admin"> <?php
									echo get_the_author();?></li>
									<li class="news-block__list-item"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/calendar.svg" class="news-block__list-item-icon news-block__list-item-icon--date"> <?php the_time('j F Y'); ?></li>

								</ul><!-- .news-block__list -->

								<?php
								the_title( '<h2 class="news-block__title"><a class="news-block__title-link" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
								?>
								<div class="news-block__text"><?php the_excerpt();?></div>

								<a href="<?php echo get_permalink(); ?>" class="news-block__btn">Подробнее <img src="<?php echo get_template_directory_uri(); ?>/img/icons/arrow.svg" class="news-block__list-item-icon"></a>

							</div><!-- .news-block__meta -->

						</div><!-- .news-block-inner -->

					</div><!-- .news-block .col -->

				<?php }
				wp_reset_postdata();?>
			</div><!-- .row -->
		</div><!-- .container -->

	</section>
	<?php
else :
endif;
?>