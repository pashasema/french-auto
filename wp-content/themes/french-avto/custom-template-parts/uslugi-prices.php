<?php $taxonomy = get_queried_object(); ?>
<?php if(get_field('usluga_block_with_price')){ ?>
	<section class="prices services-section services-section-margin">

		<div class="container">

			<div class="all-titles-wrap">
				<h2 class="all-titles prices__title"><?php echo get_field('price_title') ?></h2>
				<span class="devider"><span></span></span>
			</div><!-- .all-titles-wrap -->
			<p class="prices__text"><?php echo get_field('price_text'); ?></p>


			<div class="prices__wrap">

				<?php while (the_repeater_field('usluga_block_with_price') ) :?>
					<div class="prices__item">
						<div class="prices__item-text">
							<h3 class="prices__item-title"><?php the_sub_field('price_title');?></h3>
							<span class="prices__item-price"><?php the_sub_field('price_price');?></span>
						</div>
						<a href="#<?php the_sub_field('price_title');?>" class="btn btn-popup prices__item-wrap-btn"><span class="inner-btn">Записаться</span></a>
					</div><!-- .prices__item -->

					<div id="<?php the_sub_field('price_title');?>" class="contact-form repair-offer__contact-form mfp-hide popup">

						<form class="form repair-offer__form" method="POST">
							<!-- Additional fields -->
							<input name="utm" value="" type="hidden">
							<input name="place" value="Цены на <?php echo mb_strtolower(the_sub_field('price_title')); ?>" type="hidden">
							<input name="usluga" value="Клиент хочет получить цены на <?php echo mb_strtolower(the_sub_field('price_title')); ?>" type="hidden">

							<div class="form-group repair-offer__form-group">
								<div class="form-group__title repair-offer__form-group__title">Запишиcь на <?php echo mb_strtolower(the_sub_field('price_title')); ?></div>

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

				<?php endwhile; ?>



				<div class="row justify-content-center text-center">
					<div class="col-5">
							<div style="margin-top: 20px;"></div>
						<a class="prices__link" href="tel: <?php echo the_field('phone-number-wp','option'); ?>"><?php echo the_field('phone-number','option'); ?></a>
						<span class="prices__work-time"><?php echo the_field('work-time','option'); ?></span>

					</div><!-- .col -->
				</div><!-- .row -->

			</div><!-- .prices__wrap -->

		</div><!-- .container -->

	</section><!-- .prices -->

	<?php } ?>