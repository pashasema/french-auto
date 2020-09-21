	<?php $taxonomy=get_queried_object(); ?>
	<?php $category_parent = get_term( $taxonomy->category_parent, 'category' ); ?>

	<section class="repair services-section-margin">

		<div class="row align-items-center">
			<div class="col-12 col-lg-6">

				<h1 class="all-titles repair__title"><?php echo get_field('model_title',$taxonomy); ?></h1>
				<?php
				if(get_field('model_list',$taxonomy) ):
					?>
					<ul class="repair__list">
						<?php
						while (the_repeater_field('model_list',$taxonomy) ) :
							?>
							<li class="repair__list-item"><?php the_sub_field('model_item',$taxonomy);?></li>
							<?php
						endwhile;
						?>
					</ul><!-- .repair__list -->
					<?php
				endif;
				?>

				<a href="#model-form" class="btn btn-popup repair__list-btn"><span class="inner-btn">Записаться</span></a>

			</div><!-- .col -->
			<div class="col-12 col-lg-6 d-none d-lg-block">
<?php $imgModel =  get_field('photo_for_brand_or_model',$taxonomy); ?>
				<img src="<?php echo $imgModel['url']; ?>" alt="<?php echo $imgModel['alt']; ?>" class="">
				
			</div><!-- .col -->
		</div><!-- .row -->

	</section><!-- .repair -->

	<div id="model-form" class="contact-form repair-offer__contact-form mfp-hide popup">

		<form class="form repair-offer__form" method="POST">
			<!-- Additional fields -->
			<input name="utm" value="" type="hidden">
			<input name="place" value="Первый блок" type="hidden">
			<input name="usluga" value="Запишиcь на <?php $offer = get_field('special_offer_check','option'); ?><?php if( $offer ): ?><?php echo mb_strtolower(get_field('special_offer_text_before','option')); ?> <?php echo($taxonomy->name); ?> <?php echo the_field('special_offer_text_after','option'); ?><?php else:  ?> ремонт для <?php echo($taxonomy->name); ?><?php endif; ?>" type="hidden">

			<div class="form-group repair-offer__form-group">
				<?php $offer = get_field('special_offer_check','option'); ?>	
				<?php if( $offer ): ?>
					<div class="form-group__title repair-offer__form-group__title">Запишиcь на <?php echo mb_strtolower(get_field('special_offer_text_before','option')); ?> <?php echo($taxonomy->name); ?> <?php echo the_field('special_offer_text_after','option'); ?></div>
					<?php else:  ?>
						<div class="form-group__title repair-offer__form-group__title">Запишиcь на ремонт для <?php echo($taxonomy->name); ?></div>
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