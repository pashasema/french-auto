	<?php $taxonomy=get_queried_object(); ?>
	<section class="service services-section-margin">
		<div class="all-titles-wrap">
			<h2 class="all-titles service__title"><?php echo get_field('service_title',$taxonomy); ?></h2>
			<span class="devider"><span></span></span>
		</div>
		
		<p class="service__seo-text"><?php echo get_field('service_text',$taxonomy); ?></p><!-- .service__text -->
		<div class="service__wrap-photo">

			<div class="row justify-content-center photo-popup">

				<a href="<?php echo get_field('service_main_photo',$taxonomy); ?>" class="service__photo-link--big" title="Ремонт <?php echo mb_strtolower($taxonomy->name); ?>"><div style="background-image: url('<?php echo get_field('service_main_photo',$taxonomy); ?>')" alt="" class="service__photo--big" title="Ремонт <?php echo mb_strtolower($taxonomy->name); ?>"></div></a>


				<?php 
				$images = get_field('service_gallery',$taxonomy);
				$size = 'medium';

				if( $images ): ?>
					<div class="service__wrap-small-photo">
						<?php foreach( $images as $image ): ?>
							<a href="<?php echo $image['sizes']['large']; ?>" class="service__photo-link--small" title="Ремонт <?php echo mb_strtolower($taxonomy->name); ?>"><div style="background-image: url('<?php echo $image['sizes'][$size]; ?>')" alt="" class="service__photo--small" title="Ремонт <?php echo mb_strtolower($taxonomy->name); ?>"></div></a>
						<?php endforeach; ?>
					</div><!-- .service__wrap-small-photo -->
				<?php endif; ?>

			</div><!-- .row -->

		</div><!-- .service__wrap-photo -->
	</section><!-- .service -->