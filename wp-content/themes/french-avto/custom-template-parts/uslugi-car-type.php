<section class="car-type services-section-margin">

	<div class="container">
		<div class="row justify-content-center">			

			<?php if(have_rows('legkovye_avto')){ ?>
				<div class="col-12 col-lg-6">

					<div class="car-type-commercial text-center">
						<h3 class="car-type-commercial__title"><span class="text-block">Обслуживаемые марки</span> <span class="car-type-commercial__title--color">легковых</span> автомобилей</h3>


						<div class="car-type-commercial__content">

							<?php $renault = get_field('legkovye_avto')['usluga_dlya_marki_renault'];?>
							<?php $renault_url = get_permalink($renault); ?>
							<?php $renault_term = get_term('36', 'category'); ?>
							<?php if( $renault ) {?>
								<div class="car-type-commercial__wrap-link">
									<a href="<?php echo $renault_url; ?>">
										<img class="car-type-commercial__img" src="<?php echo get_field('photo_for_brand_or_model',$renault_term); ?>" alt="">
									</a>
									<a class="car-type-commercial__link--noimg" href="<?php echo $renault_url; ?>">Renault</a>
								</div><!-- .car-type-commercial__wrap-link --> 
							<?php }?> 

							<?php $citroen = get_field('legkovye_avto')['usluga_dlya_marki_citroen'];?>
							<?php $citroen_url = get_permalink($citroen); ?>
							<?php $citroen_term = get_term('64', 'category'); ?>
							<?php if( $citroen ) {?>
								<div class="car-type-commercial__wrap-link">
									<a href="<?php echo $citroen_url; ?>">
										<img class="car-type-commercial__img" src="<?php echo get_field('photo_for_brand_or_model',$citroen_term); ?>" alt="">
									</a>
									<a class="car-type-commercial__link--noimg" href="<?php echo $citroen_url; ?>">Citroen</a>
								</div><!-- .car-type-commercial__wrap-link --> 
							<?php }?> 

							<?php $peugeot = get_field('legkovye_avto')['usluga_dlya_marki_peugeot'];?>
							<?php $peugeot_url = get_permalink($peugeot); ?>
							<?php $peugeot_term = get_term('63', 'category'); ?>
							<?php if( $peugeot ) {?>
								<div class="car-type-commercial__wrap-link">
									<a href="<?php echo $peugeot_url; ?>">
										<img class="car-type-commercial__img" src="<?php echo get_field('photo_for_brand_or_model',$peugeot_term); ?>" alt="">
									</a>
									<a class="car-type-commercial__link--noimg" href="<?php echo $peugeot_url; ?>">Peugeot</a>
								</div><!-- .car-type-commercial__wrap-link --> 
							<?php }?> 

						</div><!-- .car-type-commercial__content -->
						<?php $renault_model = get_field('legkovye_avto')['uslugi_dlya_modeli_renault'];?>
						<?php $citroen_model = get_field('legkovye_avto')['uslugi_dlya_modeli_citroen'];?>
						<?php $peugeot_model = get_field('legkovye_avto')['uslugi_dlya_modeli_peugeot'];?>
						<?php if($renault_model or $citroen_model or $peugeot_model){?>
							<a class="btn btn-popup" href="#all-models-legkovye"><span class="textbtn inner-btn">Все модели</span></a>
						<?php }?>

						<div id="all-models-legkovye" class="popup-commercial mfp-hide popup">

							<p class="popup-commercial__title">Выберите модель автомобиля:</p>

							<?php if( $renault_model ) {?>
								<div class="popup-commercial__list-wrap">
									<ul class="popup-commercial__list">
										<p class="popup-commercial__list-title">Renault</p>
										<?php foreach( $renault_model as $post):?>
											<li class="popup-commercial__list-item"><a href="<?php the_permalink(); ?>"><?php $category = get_the_category(); 
											echo $category[0]->cat_name; ?></a></li>
										<?php endforeach; ?>
									</ul><!-- .popup-commercial__list -->
									<a href="" class="popup-commercial__list-wrap-link">Посмотреть все</a>
								</div><!-- .popup-commercial__list-wrap --> 
								<?php wp_reset_postdata();
							}?> 

							<?php if( $citroen_model ) {?>
								<div class="popup-commercial__list-wrap">
									<ul class="popup-commercial__list">
										<p class="popup-commercial__list-title">citroen</p>
										<?php foreach( $citroen_model as $post):?>
											<li class="popup-commercial__list-item"><a href="<?php the_permalink(); ?>"><?php $category = get_the_category(); 
											echo $category[0]->cat_name; ?></a></li>
										<?php endforeach; ?>
									</ul><!-- .popup-commercial__list -->
									<a href="" class="popup-commercial__list-wrap-link">Посмотреть все</a>
								</div><!-- .popup-commercial__list-wrap --> 
								<?php wp_reset_postdata();
							}?> 

							<?php $peugeot_model = get_field('legkovye_avto')['uslugi_dlya_modeli_peugeot'];?>
							<?php if( $peugeot_model ) {?>
								<div class="popup-commercial__list-wrap">
									<ul class="popup-commercial__list">
										<p class="popup-commercial__list-title">peugeot</p>
										<?php foreach( $peugeot_model as $post):?>
											<li class="popup-commercial__list-item"><a href="<?php the_permalink(); ?>"><?php $category = get_the_category(); 
											echo $category[0]->cat_name; ?></a></li>
										<?php endforeach; ?>
									</ul><!-- .popup-commercial__list -->
									<a href="" class="popup-commercial__list-wrap-link">Посмотреть все</a>
								</div><!-- .popup-commercial__list-wrap --> 
								<?php wp_reset_postdata();
							}?> 

						</div><!-- .popup-commercial -->

					</div><!-- .car-type__commercial -->

				</div><!-- .col -->
			<?php } ?>


			<?php $komm_renault = get_field('kommercheskie_avto')['usluga_dlya_marki_renault'];?>
			<?php $komm_citroen = get_field('kommercheskie_avto')['usluga_dlya_marki_citroen'];?>
			<?php $komm_peugeot = get_field('kommercheskie_avto')['usluga_dlya_marki_peugeot'];?>
			<?php if($komm_peugeot or $komm_citroen or $komm_peugeot){ ?>
				<div class="col-12 col-lg-6">

					<div class="car-type-commercial text-center">
						<h3 class="car-type-commercial__title"><span class="text-block">Обслуживаемые марки</span> <span class="car-type-commercial__title--color">коммерческих автомобилей</span></h3>


						<div class="car-type-commercial__content">

							<?php $komm_renault = get_field('kommercheskie_avto')['usluga_dlya_marki_renault'];?>
							<?php $komm_renault_url = get_permalink($komm_renault); ?>
							<?php $komm_renault_term = get_term('37', 'category'); ?>
							<?php if( $komm_renault ) {?>
								<div class="car-type-commercial__wrap-link">
									<a href="<?php echo $komm_renault_url; ?>">
										<img class="car-type-commercial__img" src="<?php echo get_field('photo_for_brand_or_model',$komm_renault_term); ?>" alt="">
									</a>
									<a class="car-type-commercial__link--noimg" href="<?php echo $komm_renault_url; ?>">Renault</a>
								</div><!-- .car-type-commercial__wrap-link --> 
							<?php }?> 

							<?php $komm_citroen = get_field('kommercheskie_avto')['usluga_dlya_marki_citroen'];?>
							<?php $komm_citroen_url = get_permalink($komm_citroen); ?>
							<?php $komm_citroen_term = get_term('42', 'category'); ?>
							<?php if( $komm_citroen ) {?>
								<div class="car-type-commercial__wrap-link">
									<a href="<?php echo $komm_citroen_url; ?>">
										<img class="car-type-commercial__img" src="<?php echo get_field('photo_for_brand_or_model',$komm_citroen_term); ?>" alt="">
									</a>
									<a class="car-type-commercial__link--noimg" href="<?php echo $komm_citroen_url; ?>">Citroen</a>
								</div><!-- .car-type-commercial__wrap-link --> 
							<?php }?> 

							<?php $komm_peugeot = get_field('kommercheskie_avto')['usluga_dlya_marki_peugeot'];?>
							<?php $komm_peugeot_url = get_permalink($komm_peugeot); ?>
							<?php $komm_peugeot_term = get_term('43', 'category'); ?>
							<?php if( $komm_peugeot ) {?>
								<div class="car-type-commercial__wrap-link">
									<a href="<?php echo $komm_peugeot_url; ?>">
										<img class="car-type-commercial__img" src="<?php echo get_field('photo_for_brand_or_model',$komm_peugeot_term); ?>" alt="">
									</a>
									<a class="car-type-commercial__link--noimg" href="<?php echo $komm_peugeot_url; ?>">Peugeot</a>
								</div><!-- .car-type-commercial__wrap-link --> 
							<?php }?> 

						</div><!-- .car-type-commercial__content -->
						<?php $komm_renault_model = get_field('kommercheskie_avto')['uslugi_dlya_modeli_renault'];?>
						<?php $komm_citroen_model = get_field('kommercheskie_avto')['uslugi_dlya_modeli_citroen'];?>
						<?php $komm_peugeot_model = get_field('kommercheskie_avto')['uslugi_dlya_modeli_peugeot'];?>
						<?php if($komm_renault_model or $komm_citroen_model or $komm_peugeot_model){?>
							<a class="btn btn-popup" href="#all-models-legkovye"><span class="textbtn inner-btn">Все модели</span></a>
						<?php }?>

						<div id="all-models-legkovye" class="popup-commercial mfp-hide popup">

							<p class="popup-commercial__title">Выберите модель автомобиля:</p>

							<?php if( $komm_renault_model ) {?>
								<div class="popup-commercial__list-wrap">
									<ul class="popup-commercial__list">
										<p class="popup-commercial__list-title">Renault</p>
										<?php foreach( $komm_renault_model as $post):?>
											<li class="popup-commercial__list-item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
										<?php endforeach; ?>
									</ul><!-- .popup-commercial__list -->
									<a href="" class="popup-commercial__list-wrap-link">Посмотреть все</a>
								</div><!-- .popup-commercial__list-wrap --> 
								<?php wp_reset_postdata();
							}?> 

							<?php if( $komm_citroen_model ) {?>
								<div class="popup-commercial__list-wrap">
									<ul class="popup-commercial__list">
										<p class="popup-commercial__list-title">Citroen</p>
										<?php foreach( $komm_citroen_model as $post):?>
											<li class="popup-commercial__list-item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
										<?php endforeach; ?>
									</ul><!-- .popup-commercial__list -->
									<a href="" class="popup-commercial__list-wrap-link">Посмотреть все</a>
								</div><!-- .popup-commercial__list-wrap --> 
								<?php wp_reset_postdata();
							}?> 

							<?php if( $komm_peugeot_model ) {?>
								<div class="popup-commercial__list-wrap">
									<ul class="popup-commercial__list">
										<p class="popup-commercial__list-title">Peugeot</p>
										<?php foreach( $komm_peugeot_model as $post):?>
											<li class="popup-commercial__list-item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
										<?php endforeach; ?>
									</ul><!-- .popup-commercial__list -->
									<a href="" class="popup-commercial__list-wrap-link">Посмотреть все</a>
								</div><!-- .popup-commercial__list-wrap --> 
								<?php wp_reset_postdata();
							}?> 

						</div><!-- .popup-commercial -->

					</div><!-- .car-type__commercial -->

				</div><!-- .col -->
			<?php } ?>
		</div><!-- .row -->
	</div><!-- .container -->

</section><!-- .car-type -->