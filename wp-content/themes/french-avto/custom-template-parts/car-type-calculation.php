	<?php $taxonomy=get_queried_object(); ?>
	<section class="calculation services-section-margin">
		<div class="all-titles-wrap">
			<h2 class="all-titles calculation__title"><?php echo get_field('calculation_title', $taxonomy); ?></h2>
			<span class="devider"><span></span></span>
		</div>
		<p class="calculation__text"><?php echo get_field('calculation_text', $taxonomy); ?></p>

		<div class="row align-items-center">
			<div class="col-12 col-lg-6 d-none d-lg-block">
				
				<div class="calculation__wrap-img">
					<img src="<?php echo get_field('calculation_img', $taxonomy); ?>" class="calculation__img">
				</div><!-- .why-choose-us__wrap-img -->

			</div><!-- .col -->
			<div class="col-12 col-lg-6">

				<div class="contact-form calculation__contact-form">
					<form class="form calculation__form" method="POST">
						<!-- Additional fields -->
						<input name="utm" value="" type="hidden">
						<input name="place" value="Расчёт стоимости" type="hidden">
						<input name="usluga" value="Клиент хочет расчитать стоимость <?php echo mb_strtolower($taxonomy->name); ?>" type="hidden">

						<div class="form-group calculation__form-group">
							<div class="form-group__title calculation__form-group__title">Оставьте свои контактные данные, чтобы получить предварительную оценку стоимости ремонта вашего автомобиля</div>
							<p class="form-group__description calculation__form-group__description">Введите номер телефона:</p>
							<input type="tel" class="form-group__field calculation__form-group__field" name="phone" placeholder="+7 (___) ___-__-__" required >
							<p class="form-group__description calculation__form-group__description">Введите комментарий:</p>
							<textarea class="form-group__textarea calculation__form-group__textarea" name="comment" id="commentfooter"></textarea>
						</div>
						<div class="form-polconf calculation__form-polconf">
							<input type="checkbox" class="form-polconf__checkbox calculation__form-polconf__checkbox" checked="checked" required="required" name="polconf-form" aria-required="true"><a class="form-polconf__link" href="/docs/conditionals/" target="_blank">Согласие на обработку персональных данных</a>
						</div>
						<button type="submit" class="btn calculation__btn">
							<span class="textbtn inner-btn">Отправить заявку</span>
						</button>
					</form><!-- .form -->
				</div><!-- .contact-form -->
				
			</div><!-- .col -->
		</div><!-- .row -->

	</section><!-- .calculation -->