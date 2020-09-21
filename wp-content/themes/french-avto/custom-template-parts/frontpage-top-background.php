	<section class="services-section-margin top-background">

		<div class="row align-items-center">
			<div class="col-12 col-lg-6 d-none d-lg-block">
				<?php 
				$images = get_field('photo_frontpage',$taxonomy);
				$size = 'full';

				if( $images ): ?>
					<div class="top-background__wrap-owl">
						<div class="owl-carousel top-background__owl-carousel owl-theme">
							<?php foreach( $images as $image ): ?>
								<img src="<?php echo $image['url']; ?>" class="top-background__img">
							<?php endforeach; ?>
						</div><!-- .top-background__owl-carousel -->
					</div><!-- .why-choose-us__wrap-img -->
				<?php endif; ?>

			</div><!-- .col -->
			<div class="col-12 col-lg-6">

				<div class="top-background__wrap-img-logo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/pegeout.png" alt="" class="top-background__img-logo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/renault.png" alt="" class="top-background__img-logo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/citroen.png" alt="" class="top-background__img-logo">
				</div><!-- .top-background__wrap-img -->
				<h1 class="top-background__title"><?php echo get_field('title_frontpage'); ?></h1>

				<p class="top-background__text"><?php echo get_field('text_under_title_frontpage'); ?></p>

				<a href="#consultation" class="btn btn-popup top-background__btn"><span class="inner-btn">Записаться на ремонт</span></a>

					<div id="consultation" class="contact-form repair-offer__contact-form mfp-hide popup">

						<form class="form repair-offer__form" method="POST">
							<!-- Additional fields -->
							<input name="utm" value="" type="hidden">
							<input name="place" value="Первый блок" type="hidden">
							<input name="usluga" value="Клиент хочет записатсья на ремонт" type="hidden">

							<div class="form-group repair-offer__form-group">
								<div class="form-group__title repair-offer__form-group__title">Запишиcь на ремонт по доступным ценам для Peugeot, Citroen, Renault </div>

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

	</section><!-- .top-background -->