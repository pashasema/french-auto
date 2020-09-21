			<?php $taxonomy=get_queried_object(); ?>
			<?php $category_parent = get_term( $taxonomy->category_parent, 'category' ); ?>
			<section class="service services-section-margin">
				<div class="all-titles-wrap">
					<h2 class="all-titles service__title">Ремонт <?php echo($category_parent->name); ?> <?php echo($taxonomy->name); ?> в Москве</h2>
					<span class="devider"><span></span></span>
				</div>

				<p class="service__seo-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit suscipit amet dolore ea, distinctio fugiat error, tempore necessitatibus sapiente! Ipsa, corporis, quasi labore sequi numquam sapiente necessitatibus incidunt vel excepturi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit suscipit amet dolore ea, distinctio fugiat error, tempore necessitatibus sapiente! Ipsa, corporis, quasi labore sequi numquam sapiente necessitatibus incidunt vel excepturi.</p><!-- .service__text -->
				<div class="service__wrap-photo">

					<div class="row justify-content-center photo-popup">

						
						<a href="<?php echo get_template_directory_uri(); ?>/img/repair1.jpg" class="service__photo-link--big" title="ремонт"><img src="<?php echo get_template_directory_uri(); ?>/img/repair1.jpg" alt="" class="service__photo--big" title="ремонт"></a>

						<div class="service__wrap-small-photo">
							<a href="<?php echo get_template_directory_uri(); ?>/img/repair2.jpg" class="service__photo-link--small" title="ремонт"><img src="<?php echo get_template_directory_uri(); ?>/img/repair2.jpg" alt="" class="service__photo--small" title="ремонт"></a>
							<a href="<?php echo get_template_directory_uri(); ?>/img/repair3.jpg" class="service__photo-link--small" title="ремонт"><img src="<?php echo get_template_directory_uri(); ?>/img/repair3.jpg" alt="" class="service__photo--small" title="ремонт"></a>
							<a href="<?php echo get_template_directory_uri(); ?>/img/repair4.jpg" class="service__photo-link--small" title="ремонт"><img src="<?php echo get_template_directory_uri(); ?>/img/repair4.jpg" alt="" class="service__photo--small" title="ремонт"></a>
							<a href="<?php echo get_template_directory_uri(); ?>/img/repair5.jpg" class="service__photo-link--small" title="ремонт"><img src="<?php echo get_template_directory_uri(); ?>/img/repair5.jpg" alt="" class="service__photo--small" title="ремонт"></a>
						</div><!-- .service__wrap-small-photo -->

					</div><!-- .row -->

				</div><!-- .service__wrap-photo -->
	</section><!-- .service -->