<?php $term = get_queried_object();
$get_page_type = get_field('page-type',$term);
if($term->slug=='kommercheskie'){
	get_template_part( 'custom-templates/category', $get_page_type .'-'.$term->slug);  
}
else if($term->slug=='legkovye'){
	get_template_part( 'custom-templates/category', $get_page_type .'-'.$term->slug);  
}
else{
	get_template_part( 'custom-templates/category', $get_page_type );
}