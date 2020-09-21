	<?php $taxonomy = get_queried_object(); ?>
	<section class="service services-section-margin">
		<div class="all-titles-wrap">
			<h2 class="all-titles service__title"><?php echo the_title(); ?> в Москве</h2>
			<span class="devider"><span></span></span>
		</div>

		<p class="service__seo-text"><?php echo get_field('tekst_dlya_bloka_remonta_uslug'); ?></p><!-- .service__text -->
		<div class="service__wrap-photo">

			<div class="row justify-content-center photo-popup">

				<a href="<?php echo get_field('pervoe_foto_dlya_bloka_remonta_uslug'); ?>" class="service__photo-link--big" title="Ремонт <?php echo get_field('service_title',$taxonomy); ?> транспорта"><img src="<?php echo get_field('pervoe_foto_dlya_bloka_remonta_uslug'); ?>" alt="" class="service__photo--big" title="Ремонт <?php echo get_field('service_title',$taxonomy); ?> транспорта"></a>


				<?php 
				$images = get_field('ostalnye_foto_dlya_bloka_remonta_uslug');
				$size = 'full';

				if( $images ): ?>
					<div class="service__wrap-small-photo">
						<?php foreach( $images as $image ): ?>
							<a href="<?php echo $image['url']; ?>" class="service__photo-link--small" title="Ремонт <?php echo get_field('service_title',$taxonomy); ?> транспорта"><img src="<?php echo $image['url']; ?>" alt="" class="service__photo--small" title="Ремонт <?php echo get_field('service_title',$taxonomy); ?> транспорта"></a>
						<?php endforeach; ?>
					</div><!-- .service__wrap-small-photo -->
				<?php endif; ?>

			</div><!-- .row -->

		</div><!-- .service__wrap-photo -->
	</section><!-- .service -->