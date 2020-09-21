<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package french-avto
 */

?>

<?php get_template_part( "custom-template-parts/map"); ?>

</div><!-- #content -->

<footer class="footer">
	
	<div class="container">
		<div class="row">
			<div class="col-6 col-sm-3">

				<ul class="footer__list">
					<p class="footer__list-title"><?php echo get_field('footer_first_column','option')['footer_column_title']; ?></p>

					<?php while (have_rows('footer_first_column','option')) : the_row(); ?>
						<?php
						while (have_rows('footer_column_list')) :the_row();
							?>
							<li class="footer__list-item"><?php the_sub_field('footer_column_list_item');?></li>
							<?php
						endwhile;
					endwhile;
					?>

				</ul>	

			</div><!-- .col-3 -->
			<div class="col-6 col-sm-3">
				
				<ul class="footer__list">
					<p class="footer__list-title"><?php echo get_field('footer_sec_column','option')['footer_column_title']; ?></p>
					<?php while (have_rows('footer_sec_column','option')) : the_row(); ?>
						<?php
						while (have_rows('footer_column_list')) :the_row();
							?>
							<li class="footer__list-item"><?php the_sub_field('footer_column_list_item');?></li>
							<?php
						endwhile;
					endwhile;
					?>
				</ul>	

			</div><!-- .col-3 -->
			<div class="col-6 col-sm-3">
				
				<ul class="footer__list">
					<p class="footer__list-title"><?php echo get_field('footer_third_column','option')['footer_column_title']; ?></p>
					<?php while (have_rows('footer_third_column','option')) : the_row(); ?>
						<?php
						while (have_rows('footer_column_list')) :the_row();
							?>
							<li class="footer__list-item"><?php the_sub_field('footer_column_list_item');?></li>
							<?php
						endwhile;
					endwhile;
					?>
				</ul>	

			</div><!-- .col-3 -->
			<div class="col-6 col-sm-3">
				
				<ul class="footer__list">
					<p class="footer__list-title">Наши контакты</p>
					<li class="footer__list-item"><a href="tel:<?php echo the_field('phone-number-wp','option'); ?>" class="footer__list-phone"><?php echo the_field('phone-number','option'); ?></a></li>
					<li class="footer__list-item"><span class="footer__list-adress"><?php echo get_field('current-adress','option'); ?></span></li>
				</ul>	

			</div>
		</div><!-- .row -->
	</div><!-- .container -->

	<p class="footer__cpr">&#169; <?php echo date('Y'); ?> Автосервис <?php echo bloginfo("name");?></p>

</footer>

</div><!-- .container -->

<div style="display: none">
	<span id="landing-name"><?php bloginfo( 'name' ); ?></span>
	<span id="landing-site"><?php echo home_url(); ?></span>
</div>

<div id="thankyou" class="zoom-anim-dialog mfp-hide popup--thankyou">
	<h2 class="thankyou__title">Спасибо за заявку!</h2>
</div><!-- #thankyou -->

<div class="callBottom">
	<a href="#calltous" class="popup-with-move-anim btn-popup"
	   title="Заказать звонок сейчас"
	   data-textbtn="Заказать звонок сейчас"
	   data-place="Виджет - заказать бесплатный звонок"
	   data-texttitle="Оставьте телефон ниже <span class='text-block'>и получите бесплатную</span> консультацию специалиста!"
	   data-icon="phone"
	></a>
	<div class="textInfo">
		Заказать<br>бесплатный<br>звонок
	</div>
	<div class="iconBlock">
		<div class="iconPhone shake shake-constant">
<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 fill="#fff" width="30px" height="30px" viewBox="0 0 348.077 348.077" style="enable-background:new 0 0 348.077 348.077;"
	 xml:space="preserve">
<g>
	<g>
		<g>
			<path d="M340.273,275.083l-53.755-53.761c-10.707-10.664-28.438-10.34-39.518,0.744l-27.082,27.076
				c-1.711-0.943-3.482-1.928-5.344-2.973c-17.102-9.476-40.509-22.464-65.14-47.113c-24.704-24.701-37.704-48.144-47.209-65.257
				c-1.003-1.813-1.964-3.561-2.913-5.221l18.176-18.149l8.936-8.947c11.097-11.1,11.403-28.826,0.721-39.521L73.39,8.194
				C62.708-2.486,44.969-2.162,33.872,8.938l-15.15,15.237l0.414,0.411c-5.08,6.482-9.325,13.958-12.484,22.02
				C3.74,54.28,1.927,61.603,1.098,68.941C-6,127.785,20.89,181.564,93.866,254.541c100.875,100.868,182.167,93.248,185.674,92.876
				c7.638-0.913,14.958-2.738,22.397-5.627c7.992-3.122,15.463-7.361,21.941-12.43l0.331,0.294l15.348-15.029
				C350.631,303.527,350.95,285.795,340.273,275.083z"/>
		</g>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>

		</div>
	</div>
</div>

<div id="calltous" class="zoom-anim-dialog mfp-hide popup popup-call-to-us">
	<div class="contact-form repair-offer__contact-form popup">
		<form class="form" method="POST" novalidate="novalidate">
			<!-- Additional fields -->
			<input name="utm" value="" type="hidden">
			<input name="place" value="" type="hidden">

			<div class="form-group">
				<div class="form-group__title repair-offer__form-group__title">Введите ваш номер телефона <span class="text-block">и наш менеджер свяжется с вами</span></div>
				<p class="form-group__description">Введите ваш номер телефона:</p>
				<input type="tel" class="form-group__field" name="phone" placeholder="+7 (___) ___-__-__" required="" data-rule-required="true" data-rule-minlength="10" data-msg="Введите номер телефона" data-rule-checkmask="true">
				<p class="form-group__description">Введите комментарий:</p>
				<textarea class="form-group__textarea" name="comment" id="comment"></textarea>
			</div>
			<div class="form-polconf">
				<input type="checkbox" class="form-polconf__checkbox" checked="checked" required="required" name="polconf-form" aria-required="true"><a class="form-polconf__link" href="/docs/conditionals/" target="_blank">Согласие на обработку персональных данных</a>
			</div>
			<button type="submit" class="btn repair-offer__btn">
				<span class="textbtn inner-btn">Заказать звонок</span>
			</button>
		</form>
	</div>
</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
