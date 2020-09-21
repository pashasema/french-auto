	<?php $taxonomy=get_queried_object(); ?>
	<section class="block-with-form services-section-margin">
		<div class="all-titles-wrap">
			<h2 class="all-titles block-with-form__title">Не трать время и деньги на поиск автосервиса</h2>
			<span class="devider"><span></span></span>
		</div>
		<p class="block-with-form__text">Оставьте заявку и получите 3 бонуса от нашего автоцентра</p>

		<div class="row justify-content-center">
			<div class="col-12 col-md-4">

				<div class="block-with-form__item">

					<span class="block-with-form__item-count">01</span>
					<p class="block-with-form__item-title">Бесплатная консультация</p>
					<p class="block-with-form__item-text">Бесплатная консультация по ремонту вашего автомобиля</p>

				</div><!-- .block-with-form__item -->

			</div><!-- .col -->
			<div class="col-12 col-md-4">

				<div class="block-with-form__item">

					<span class="block-with-form__item-count">02</span>
					<p class="block-with-form__item-title">Бесплатная диагностика</p>
					<p class="block-with-form__item-text">Бесплатная диагностика ходовой <?php echo($taxonomy->name); ?> в день обращения</p>

				</div><!-- .block-with-form__item -->

			</div><!-- .col -->
			<div class="col-12 col-md-4">

				<div class="block-with-form__item">

					<span class="block-with-form__item-count">03</span>
					<p class="block-with-form__item-title">Бесплатная проверка</p>
					<p class="block-with-form__item-text">Бесплатная проверка и долив рабочих жидкостей <?php echo($taxonomy->name); ?></p>

				</div><!-- .block-with-form__item -->

			</div><!-- .col -->
		</div><!-- .row -->

		<div class="block-with-form__contact-form-wrap">

			<div class="row justify-content-center">
				<div class="col-12 col-lg-4">

					<div class="contact-form block-with-form__contact-form">
						<form class="form block-with-form__form" method="POST">
							<!-- Additional fields -->
							<input name="utm" value="" type="hidden">
							<input name="place" value="Не трать время и деньги на поиск автосервиса" type="hidden">
							<input name="usluga" value="Клиент хочет оставить заявку и получить бонусы для <?php echo($taxonomy->name); ?>" type="hidden">

							<div class="form-group block-with-form__form-group">
								<div class="form-group__title block-with-form__form-group__title">Оставьте заявку</div>
								<p class="form-group__description block-with-form__form-group__description">Введите номер телефона:</p>
								<input type="tel" class="form-group__field block-with-form__form-group__field" name="phone" placeholder="+7 (___) ___-__-__" required >
								<p class="form-group__description block-with-form__form-group__description">Введите комментарий:</p>
								<textarea class="form-group__textarea block-with-form__form-group__textarea" name="comment" id="commentfooter"></textarea>
							</div>
							<div class="form-polconf block-with-form__form-polconf">
								<input type="checkbox" class="form-polconf__checkbox block-with-form__form-polconf__checkbox" checked="checked" required="required" name="polconf-form" aria-required="true"><a class="form-polconf__link" href="/docs/conditionals/" target="_blank">Согласие на обработку персональных данных</a>
							</div>
							<button type="submit" class="btn block-with-form__btn">
								<span class="textbtn inner-btn">Получить бонус</span>
							</button>
						</form><!-- .form -->
					</div><!-- .contact-form -->

				</div><!-- .col -->
			</div><!-- .row -->

		</div><!-- .block-with-form__contact-form-wrap -->
	</section><!-- .block-with-form -->