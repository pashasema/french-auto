<section class="why-choose-us services-section-margin">

	<div class="container">

		<div class="all-titles-wrap">
			<h2 class="all-titles why-choose-us__title"><?php echo the_field('block-with-form_title','option'); ?></h2>
			<span class="devider"><span></span></span>
		</div>
		<div class="why-choose-us__text"><?php echo the_field('block-with-form_text','option'); ?></div>

		<div class="row">
			<div class="col-12 col-lg-6">

				<?php
				if(get_field('block-with-form_list','option') ):
					?>
					<ul class="why-choose-us__list">
						<?php
						$counter=1;
						while (the_repeater_field('block-with-form_list','option') ) :
							?>
							<li class="why-choose-us__list-item"><span class="why-choose-us__list-item-count">0<?php echo $counter; ?></span><span class="why-choose-us__list-item-text"><?php the_sub_field('block-with-form_list_item','option');?></span></li>
							<?php
							$counter++;
						endwhile;
						?>
					</ul><!-- .why-choose-us__list -->
					<?php
				endif;
				?>

			</div><!-- .col -->
			<div class="col-12 col-lg-6 d-none d-lg-block">

				<div class="why-choose-us__wrap-img">
					<img src="<?php echo get_field('block-with-form_photo','option');?>" class="why-choose-us__img">
				</div><!-- .why-choose-us__wrap-img -->

			</div><!-- .col -->
		</div><!-- .row -->
		<div class="row justify-content-center text-center">
			<div class="col-12 col-lg-6">

				<div class="why-choose-us__special-offer">
					<?php $offer = get_field('special_offer_check','option'); ?>	
					<?php if( $offer ): ?>
						<span class="why-choose-us__special-offer-title"><?php echo the_field('special_offer_titile','option'); ?></span>
						<p class="why-choose-us__special-offer-text"><?php echo the_field('special_offer_text_before','option'); ?> Renault, Pegeout, Citroen <?php echo the_field('special_offer_text_after','option'); ?></p>
					<?php endif; ?>

				</div><!-- .why-choose-us__special-offer -->

			</div><!-- .col -->
		</div><!-- .row -->
		<div class="row justify-content-center text-center">
			<div class="col-6">

				<a href="#specpredlojenie" class="btn btn-popup why-choose-us__btn"><span class="inner-btn">Записаться</span></a>

				<div id="specpredlojenie" class="contact-form repair-offer__contact-form mfp-hide popup">

					<form class="form repair-offer__form" method="POST">
						<!-- Additional fields -->
						<input name="utm" value="" type="hidden">
						<input name="place" value="Почему стоить обратиться к нам?" type="hidden">
							<input name="usluga" value="Запишиcь на <?php $offer = get_field('special_offer_check','option'); ?><?php if( $offer ): ?><?php echo mb_strtolower(get_field('special_offer_text_before','option')); ?> Renault, Pegeout, Citroen <?php echo the_field('special_offer_text_after','option'); ?><?php else:  ?> ремонт для Renault, Pegeout, Citroen<?php endif; ?>" type="hidden">

								<div class="form-group repair-offer__form-group">

									<?php $offer = get_field('special_offer_check','option'); ?>	
									<?php if( $offer ): ?>
										<div class="form-group__title repair-offer__form-group__title">Запишиcь на <?php echo mb_strtolower(get_field('special_offer_text_before','option')); ?> Renault, Pegeout, Citroen <?php echo the_field('special_offer_text_after','option'); ?></div>
										<?php else:  ?>
											<div class="form-group__title repair-offer__form-group__title">Запишиcь на ремонт для Renault, Pegeout, Citroen</div>
										<?php endif; ?>

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

				<a class="why-choose-us__link" href="tel: <?php echo the_field('phone-number-wp','option'); ?>"><?php echo the_field('phone-number','option'); ?></a>
				<span class="why-choose-us__work-time"><?php echo the_field('work-time','option'); ?></span>

			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->

</section><!-- .why-choose-us -->