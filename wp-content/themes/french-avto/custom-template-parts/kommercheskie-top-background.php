		<?php $category=get_queried_object(); ?>
		<section class="repair services-section-margin">

			<div class="row align-items-center">
				<div class="col-12 col-lg-8">
					<div class="top-background__wrap-img-logo">
						<img src="<?php echo get_template_directory_uri(); ?>/img/pegeout.png" alt="" class="top-background__img-logo">
						<img src="<?php echo get_template_directory_uri(); ?>/img/renault.png" alt="" class="top-background__img-logo">
						<img src="<?php echo get_template_directory_uri(); ?>/img/citroen.png" alt="" class="top-background__img-logo">
					</div><!-- .top-background__wrap-img -->
					<h1 class="all-titles repair__title"><?php echo get_field('car_type_title',$category); ?></h1>
					<p class="repair__text"><?php echo get_field('car_type_text',$category); ?></p>

					<?php
					if(get_field('car_type_list',$category) ):
						?>
						<ul class="repair__list">
							<?php
							while (the_repeater_field('car_type_list',$category) ) :
								?>
								<li class="repair__list-item"><?php the_sub_field('car_type_item',$category);?></li>
								<?php
							endwhile;
							?>
						</ul><!-- .repair__list -->
						<?php
					endif;
					?>

				</div><!-- .col -->
				<div class="col-12 col-lg-4">
					<?php if( get_field('car_type_checker',$category) == 'commercial' ): ?>

						<?php 
						$images = get_field('car_type_gallery',$category);
						$size = 'full';

						if( $images ): ?>
							<div class="repair__wrap-owl">
								<div class="owl-carousel repair__owl-carousel owl-theme top-background__owl-carousel">
									<?php foreach( $images as $image ): ?>
										<img src="<?php echo $image['url']; ?>" class="repair__img repair__img--little">
									<?php endforeach; ?>
								</div><!-- .top-background__owl-carousel -->
							</div><!-- .why-choose-us__wrap-img -->
						<?php endif; ?>

					<?php endif; ?>

					<a href="#consultation" class="btn btn-popup repair__btn"><span class="textbtn inner-btn">Получить консультацию</span></a>

					<div id="consultation" class="contact-form repair-offer__contact-form mfp-hide popup">

						<form class="form repair-offer__form" method="POST">
							<!-- Additional fields -->
							<input name="utm" value="" type="hidden">
							<input name="place" value="Первый блок" type="hidden">
							<input name="usluga" value="Клиент хочет получить консультацию на <?php echo mb_strtolower($category->name);?>" type="hidden">

							<div class="form-group repair-offer__form-group">
								<div class="form-group__title repair-offer__form-group__title"><?php echo get_field('car_type_form_title',$category);?></div>

								<p class="form-group__description repair-offer__form-group__description">Введите номер телефона:</p>
								<input type="tel" class="form-group__field repair-offer__form-group__field" name="phone" placeholder="+7 (___) ___-__-__" required >
							</div>
							<div class="form-polconf repair-offer__form-polconf">
								<input type="checkbox" class="form-polconf__checkbox repair-offer__form-polconf__checkbox" checked="checked" required="required" name="polconf-form" aria-required="true"><a class="form-polconf__link" href="/docs/conditionals/" target="_blank">Согласие на обработку персональных данных</a>
							</div>
							<button type="submit" class="btn repair-offer__btn">
								<span class="textbtn inner-btn">Отправить заявку</span>
							</button>
						</form><!-- .form -->
					</div><!-- .contact-form -->

				</div><!-- .col -->
			</div><!-- .row -->

	</section><!-- .repair -->