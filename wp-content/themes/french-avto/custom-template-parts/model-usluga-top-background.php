	<section class="uslugi-top-background">

		<div class="row align-items-center">
			<div class="col-12 col-lg-6">

				<h1 class="uslugi-top-background__title"><?php echo the_field('usluga_title'); ?></h1>

				<p class="uslugi-top-background__text"><?php the_content(); ?></p>

				<a href="#consultation" class="btn btn-popup uslugi-top-background__btn"><span class="inner-btn">Получить консультацию</span></a>

				<div id="consultation" class="contact-form repair-offer__contact-form mfp-hide popup">

					<form class="form repair-offer__form" method="POST">
						<!-- Additional fields -->
						<input name="utm" value="" type="hidden">
						<input name="place" value="Первый блок" type="hidden">
						<input name="usluga" value="Клиент хочет получить консультацию на <?php echo mb_strtolower(get_the_title());?>" type="hidden">

						<div class="form-group repair-offer__form-group">
							<div class="form-group__title repair-offer__form-group__title"><?php echo get_field('uslugi_popup_title'); ?></div>

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
			<div class="col-12 col-lg-6 d-none d-lg-block">

				<div class="uslugi-top-background__wrap-owl">
					<img src="<?php the_post_thumbnail_url( 'full' ); ?>" class="uslugi-top-background__img">
				</div><!-- .uslugi-top-background__wrap-owl -->

			</div><!-- .col -->
		</div><!-- .row -->

	</section><!-- .uslugi-top-background-->