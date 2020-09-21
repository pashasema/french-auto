<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package french-avto
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(57280987, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/57280987" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">

		<header class="top-header">

			<div class="top-header-first-bar">

				<div class="container">

					<div class="top-header-first-bar-inner">
						<p class="top-header-first-bar__text"><?php echo the_field('work-time','option'); ?></p>
						<a href="#zapisatsa" class="btn btn-popup top-header-first-bar__btn"><span class="inner-btn">Записаться</span></a>

						<div id="zapisatsa" class="contact-form repair-offer__contact-form mfp-hide popup">

							<form class="form repair-offer__form" method="POST">
								<!-- Additional fields -->
								<input name="utm" value="" type="hidden">
								<input name="place" value="" type="hidden">
								<input name="usluga" value="Клиент хочет записаться на ремонт" type="hidden">

								<div class="form-group repair-offer__form-group">
									<div class="form-group__title repair-offer__form-group__title">Запишиcь на ремонт</div>

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

					</div><!-- .top-header-first-bar-inner -->

				</div><!-- .container -->

			</div><!-- .top-header-first-bar -->

			<div class="top-header-second-bar">
				<div class="container">
					<div class="row justify-content-center justify-content-lg-between align-items-center">
						<div class="col-4 d-none d-lg-flex align-items-center justify-content-center">
							<div>
								<?php the_custom_logo(); ?>
								<div class="custom-logo-name"><?php echo bloginfo("name"); ?></div>
							</div>
							<p class="top-header-second-bar__descr"><?php echo bloginfo("description"); ?></p>

						</div><!-- .col -->
						<div class="col-auto col-4-custom">

							<div class="top-header-second-bar__item top-header-second-bar__item--map">
								<span class="top-header-second-bar__item-text"><?php echo get_field('current-adress_more','option'); ?></span>
								<a class="top-header-second-bar__item-link"><?php echo get_field('current-adress','option'); ?></a>
							</div>
							<div class="top-header-second-bar__item top-header-second-bar__item--phone">
								<span class="top-header-second-bar__item-text">Позвоните нам</span>
								<a href="tel:<?php echo the_field('phone-number-wp','option'); ?>" class="top-header-second-bar__item-link"><?php echo the_field('phone-number','option'); ?></a>
							</div>

						</div><!-- .col -->
					</div><!-- .row -->
				</div><!-- .container -->


			</div><!-- .top-header-second-bar -->


			<div class="top-header-menu__wrap">

				<div class="container">
					<nav id="site-navigation" class="main-navigation">
						<div class="logo-mob d-block d-lg-none"><div>
								<?php the_custom_logo(); ?>
								<div class="custom-logo-name"><?php echo bloginfo("name"); ?></div>
							</div></div>
						<a class="menu-toggle">
							<span class="bar bar1"></span>
							<span class="bar bar2"></span>
							<span class="bar bar3"></span>
							<span class="bar bar4"></span>
						</a>
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
						?>
					</nav><!-- #site-navigation -->

				</div><!-- .container -->

			</div><!-- .top-header-menu__wrap	 -->
		</header><!-- .top-header -->

		<div id="content" class="site-content">
