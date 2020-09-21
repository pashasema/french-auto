	<?php $category=get_queried_object(); ?>
	<section class="services services-section-margin">
		<div class="all-titles-wrap">
			<h2 class="all-titles services-title">Услуги автосервиса</h2>
			<span class="devider"><span></span></span>
		</div>

		<div class="services-wrap-btn">
			<?php 
			$terms = get_terms( [
				'taxonomy' => 'post_tag',
				'hide_empty' => false,
			] );
			if( $terms ){
				$counterOfCat=1;
				foreach( $terms as $tag ){
					?>
					<div class="services-wrap-btn__item <?php if($counterOfCat == 1){ echo "active";} ?>" data-count="<?php echo $counterOfCat; ?>"><?php echo ($tag->name) ?></div>
					<?php $counterOfCat++; ?> 
				<?php }
				wp_reset_postdata();
			}?>
		</div><!-- .services-wrap-btn -->


		<div class="services-content-wrap">
			<?php 
			$terms = get_terms( [
				'taxonomy' => 'post_tag',
				'hide_empty' => false,
			] );
			$counterOfCat=1;
			foreach($terms as $term){?>  
				<ul class="services-content services-content--<?php echo $counterOfCat; ?> <?php if($counterOfCat == 1){ echo "active";} ?>" data-count="<?php echo $counterOfCat; ?>">
					<?php
					$args = array(
						'post_type' => 'post',
						'post_status' => 'publish',
						'category__and' => $category->term_id,
						'posts_per_page' => -1,
						'tag__in'=> $term->term_id,
					);
					?>
					<?php $uslugiList = new WP_Query( $args ); ?>
					<?php while($uslugiList->have_posts()) {?>
						<?php $uslugiList->the_post();?>
						<li class="services-content__item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php }?>
					<?php wp_reset_postdata();?>

				</ul><!-- .services-content -->
				<?php $counterOfCat++; ?> 
			<?php }
			wp_reset_postdata();
			?>
		</div><!-- .services-content-wrap -->

	</section><!-- .services -->

	<div class="not-find-a-service services-section-margin">
		<div class="all-titles-wrap">
			<p class="all-titles not-find-a-service__title">Не нашли подходящую услугу?</p>
			<span class="devider"><span></span></span>
		</div>
		<p class="not-find-a-service__text">Для расчета стоимости работ, звоните:</p>
		<a class="not-find-a-service__link" href="tel: <?php echo the_field('phone-number-wp','option'); ?>"><?php echo the_field('phone-number','option'); ?></a>
		<p class="not-find-a-service__bottom-text">Мы уточним детали по ремонту автомобиля и <span class="text-block">рассчитаем стоимость работ с учетом наших бонусов,</span> скидок и спецпредложений</p>
	</div><!-- .not-find-a-service -->