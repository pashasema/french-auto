<section class="map services-section-margin">

	<div class="ymap-container">
		<div class="loader loader-default"></div>
		<div id="map-yandex"></div>

		<div class="container map__text-wrap">

			<div class="map__text">
				<p class="all-titles map__text-title">Наши контакты</p>

				<div class="map__text-item">
					<p class="map__text-item-title">Адрес:</p>
					<p class="map__text-item-text"><?php echo get_field('current-adress','option'); ?></p>
				</div><!-- .map__text-item -->
				<div class="map__text-item">
					<p class="map__text-item-title">Время работы:</p>
					<p class="map__text-item-text"><?php echo the_field('work-time','option'); ?></p>
				</div><!-- .map__text-item -->
				<div class="map__text-item">
					<p class="map__text-item-title">Телефон:</p>
					<a class="map__text-item-link" href="tel: <?php echo the_field('phone-number-wp','option'); ?>"><?php echo the_field('phone-number','option'); ?></a>
				</div><!-- .map__text-item -->
				<a href="#zakazat-zvonok" class="btn btn-popup map__text-item-btn"><span class="inner-btn">Заказать звонок</span></a>

				<div id="zakazat-zvonok" class="contact-form repair-offer__contact-form mfp-hide popup">

					<form class="form repair-offer__form" method="POST">
						<!-- Additional fields -->
						<input name="utm" value="" type="hidden">
						<input name="place" value="Подвал сайта" type="hidden">
						<input name="usluga" value="Клиент хочет заказать звонок" type="hidden">

						<div class="form-group repair-offer__form-group">
							<div class="form-group__title repair-offer__form-group__title">Закажите обратный звонок</div>

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

			</div><!-- .map__text -->

		</div><!-- .container -->

	</div><!-- .ymap-container -->
</section><!-- .map -->