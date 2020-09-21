<?php $taxonomy=get_queried_object(); ?>
<section class="all-models services-section-margin">
	<div class="all-models__wrap-items">

		<?php 
		$childTerms = get_categories( [
			'hide_empty' => false,
			'hierarchical'=> true,
			'parent'=> $taxonomy->term_id
		] );
		foreach($childTerms as $childTerm){?>  
			<a href="<?php echo get_term_link($childTerm); ?>" class="all-models__item">
				<?php $imgModel= get_field('photo_for_brand_or_model',$childTerm); ?>
				<img src="<?php echo $imgModel['url']; ?>" alt="<?php echo ($imgModel['alt']); ?>" class="all-models__img">
				<p class="all-models__text"><?php echo ( $childTerm->name) ?></p>
			</a><!-- .all-models__item -->
		<?php }
		wp_reset_postdata();
		?>
	</div><!-- .all-models__wrap-items -->
	<div class="text-center">
		<a class="btn all-models__btn"><span class="textbtn inner-btn">Показать все модели</span></a>
	</div>

	</section><!-- .all-models -->