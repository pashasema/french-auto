<?php $taxonomy = get_queried_object(); ?>
<section class="prices services-section services-section-margin">

	<div class="container">

		<div class="all-titles-wrap">
			<h2 class="all-titles prices__title">Цены на <?php 
			if(is_single()){
				echo the_title();
			}else if($taxonomy){
				echo $taxonomy->name;
			}?></h2>
			<span class="devider"><span></span></span>
		</div><!-- .all-titles-wrap -->
		<p class="prices__text">Lorem ipsum dolor sit amet et delectus accommodare his consul copiosae legendos at vix ad putent delectus delicata usu. Vidit dissentiet eos cu eum an brute. 
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam odio consectetur praesentium architecto libero ut voluptatum natus nobis corrupti eius mollitia, at veniam asperiores voluptas. Odit hic, quod itaque possimus.</p>

		<?php if ( have_posts() ) : ?>
			<div class="prices__wrap">
				<?php while ( have_posts() ) : the_post();?>
					<?php global $post; ?>

					<div class="prices__item">
						<div class="prices__item-text">
							<h3 class="prices__item-title"><?php the_title(); ?></h3>
							<span class="prices__item-price"><?php the_field('czena_na_uslugu');?> р.</span>
						</div>
						<a href="#<?php echo $post->post_name ?>" class="btn btn-popup prices__item-wrap-btn"><span class="inner-btn">Записаться</span></a>
					</div><!-- .prices__item -->

					<div id="<?php echo $post->post_name ?>" class="contact-form repair-offer__contact-form mfp-hide popup">

						<form class="form repair-offer__form" method="POST">
							<!-- Additional fields -->
							<input name="utm" value="" type="hidden">
							<input name="place" value="Цены на <?php echo mb_strtolower(get_the_title()); ?>" type="hidden">
							<input name="usluga" value="Клиент хочет получить цены на <?php echo mb_strtolower(get_the_title()); ?>" type="hidden">

							<div class="form-group repair-offer__form-group">
								<div class="form-group__title repair-offer__form-group__title">Запишиcь на <?php echo mb_strtolower(get_the_title()); ?></div>

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

				<?php endwhile;
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif;
			?>



			<div class="row justify-content-center text-center">
				<div class="col-5">
					<?php 
					if(is_single()){
						?>
						<div style="margin-top: 20px;"></div>
						<?php
					}else if($taxonomy){
						?>
						<a href="#<?php echo $taxonomy->slug; ?>" class="btn btn-popup prices__btn"><span class="inner-btn">Записаться</span></a>
						<?php
					}?>

					<a class="prices__link" href="tel: <?php echo the_field('phone-number-wp','option'); ?>"><?php echo the_field('phone-number','option'); ?></a>
					<span class="prices__work-time"><?php echo the_field('work-time','option'); ?></span>

				</div><!-- .col -->
			</div><!-- .row -->

			<div id="<?php echo $taxonomy->slug; ?>" class="contact-form repair-offer__contact-form mfp-hide popup">

				<form class="form repair-offer__form" method="POST">
					<!-- Additional fields -->
					<input name="utm" value="" type="hidden">
					<input name="place" value="Цены на <?php echo mb_strtolower($taxonomy->name); ?>" type="hidden">
							<input name="usluga" value="Клиент хочет получить цены на <?php echo mb_strtolower($taxonomy->name); ?>" type="hidden">

					<div class="form-group repair-offer__form-group">
						<div class="form-group__title repair-offer__form-group__title">Запишиcь на <?php echo mb_strtolower($taxonomy->name); ?></div>

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
		</div><!-- .prices__wrap -->

	</div><!-- .container -->

</section><!-- .prices -->