<section class="car-type services-section-margin">

	<div class="container">
		<div class="row">
			<div class="col">

				<div class="car-type-commercial text-center">

					<div class="all-titles-wrap">
						<p class="all-titles car-type-commercial__title--big">Обслуживаемые марки коммерческих авто</p>
						<span class="devider"><span></span></span>
					</div>

					<div class="car-type-commercial__content">
						<?php 
						$terms = get_categories( [
							'hide_empty' => false,
							'parent'=> 35,
						] );
						foreach($terms as $term){?>  

							<div class="car-type-commercial__wrap-link">
								<a href="<?php echo get_term_link( $term ) ?>">
									<img class="car-type-commercial__img car-type-commercial__img--big" src="<?php echo get_field('photo_for_brand_or_model',$term); ?>" alt="">
								</a>
								<a class="car-type-commercial__link--noimg" href="<?php echo get_term_link( $term ) ?>"><?php echo ( $term->name) ?></a>
							</div><!-- .car-type-commercial__wrap-link -->             	

						<?php }
						wp_reset_postdata();
						?>

					</div><!-- .car-type-commercial__content -->

					<a class="btn btn-popup" href="#all-models-kommercheskie"><span class="textbtn inner-btn">Все модели</span></a>

					<div id="all-models-kommercheskie" class="popup-commercial mfp-hide popup">

						<p class="popup-commercial__title">Выберите модель автомобиля:</p>

						<?php 
						$terms = get_categories( [
							'hide_empty' => false,
							'parent'=> 35,
						] );
						foreach($terms as $term){?>  

							<div class="popup-commercial__list-wrap">
								<ul class="popup-commercial__list">
									<p class="popup-commercial__list-title"><?php echo ( $term->name) ?></p>
									<?php 
									$childTerms = get_categories( [
										'hide_empty' => false,
										'hierarchical'=> true,
										'parent'=> $term->term_id
									] );
									foreach($childTerms as $childTerm){?>  
										<li class="popup-commercial__list-item"><a href="<?php echo get_term_link($childTerm); ?>"><?php echo ( $childTerm->name) ?></a></li>
									<?php }
									wp_reset_postdata();
									?>
								</ul><!-- .popup-commercial__list -->
								<a href="" class="popup-commercial__list-wrap-link">Посмотреть все</a>
							</div><!-- .popup-commercial__list-wrap -->         	

						<?php }
						wp_reset_postdata();
						?>

					</div><!-- .popup-commercial -->

				</div><!-- .car-type__commercial -->

			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->

</section><!-- .car-type -->