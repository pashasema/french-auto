			<?php $category=get_queried_object(); ?>
			<section class="repair services-section-margin">

				<div class="row align-items-center justify-content-center">
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

					<div class="col-10 col-lg-4">

						<div class="legkovye-top-background-wrap"></div>
						
						<?php $offer = get_field('special_offer_check','option'); ?>	
<?php if( $offer ): ?>
						<p class="repair-offer__title"><?php echo the_field('special_offer_titile','option'); ?></p>
						<p class="repair-offer__text"><?php echo the_field('special_offer_text_before','option'); ?> Peugeot, Citroen, Renault <?php echo the_field('special_offer_text_after','option'); ?></p>
<?php endif; ?>
						<div class="contact-form repair-offer__contact-form">
							<form class="form repair-offer__form" method="POST">
								<!-- Additional fields -->
								<input name="utm" value="" type="hidden">
								<input name="place" value="Первый блок" type="hidden">
								<input name="usluga" value="Клиент хочет отправить заявку на <?php echo mb_strtolower($category->name);?> авто" type="hidden">

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