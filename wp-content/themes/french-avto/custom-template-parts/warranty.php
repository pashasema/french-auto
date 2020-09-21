<div class="warranty">

	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="col d-flex align-items-center">

				<img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-certificate.png" class="warranty__icon">
				<div class="warranty__wrap-text">
					<p class="warranty__title">Гарантия</p>
					<p class="warranty__text">Гарантия 12 месяцев на все выполненные работы</p>
				</div><!-- .warranty__wrap-text -->

			</div><!-- .col -->
			<div class="col-12 col-sm-5 col-lg-3 text-center">
				<a href="#garantia" class="btn btn-popup warranty__btn"><span class="inner-btn">Оставить заявку</span></a>

<div id="garantia" class="contact-form repair-offer__contact-form mfp-hide popup">

						<form class="form repair-offer__form" method="POST">
							<!-- Additional fields -->
							<input name="utm" value="" type="hidden">
							<input name="place" value="Гарантия" type="hidden">
							<input name="usluga" value="Клиент хочет оставить заявку" type="hidden">

							<div class="form-group repair-offer__form-group">
								<div class="form-group__title repair-offer__form-group__title">Оставить заявку</div>

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
	</div><!-- .container -->

</div><!-- .warranty -->