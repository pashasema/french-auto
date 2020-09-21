	<?php $taxonomy=get_queried_object(); ?>
	<section class="repair-marka" style="background-image: url(<?php echo get_field('marka_photo',$taxonomy); ?>);">

		<div class="repair-marka-inner">
			<div class="container">
				<?php
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
				}
				?>
			</div>
		</div>

		<div class="container">
			<div class="row align-items-center">
				<div class="col-12 col-lg-8">

					<h1 class="all-titles repair__title"><?php echo get_field('marka_title',$taxonomy); ?></h1>
					<?php
					if(get_field('marka_list',$taxonomy) ):
						?>
						<ul class="repair__list">
							<?php
							while (the_repeater_field('marka_list',$taxonomy) ) :
								?>
								<li class="repair__list-item"><?php the_sub_field('marka_item',$taxonomy);?></li>
								<?php
							endwhile;
							?>
						</ul><!-- .repair__list -->
						<?php
					endif;
					?>

				</div><!-- .col -->
				<div class="col-12 col-lg-4">
					
					<?php $offer = get_field('special_offer_check','option'); ?>	
					<?php if( $offer ): ?>
						<p class="repair-offer__title"><?php echo the_field('special_offer_titile','option'); ?></p>
						<p class="repair-offer__text repair-offer__text--marka"><?php echo the_field('special_offer_text_before','option'); ?> <?php echo($taxonomy->name); ?> <?php echo the_field('special_offer_text_after','option'); ?></p>
					<?php endif; ?>

					<div class="contact-form repair-offer__contact-form repair-offer__contact-form--marka">
						<form class="form repair-offer__form" method="POST">
							<!-- Additional fields -->
							<input name="utm" value="" type="hidden">
							<input name="place" value="Первый блок" type="hidden">
							<input name="usluga" value="Клиент хочет записаться на ремонт <?php echo($taxonomy->name); ?>" type="hidden">

							<div class="form-group repair-offer__form-group">
								<div class="form-group__title repair-offer__form-group__title form-group__title--marka">Оставьте свои данные для записи на ремонт</div>
								<p class="form-group__description repair-offer__form-group__description form-group__description--marka">Введите номер телефона:</p>
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

	</section><!-- .repair -->