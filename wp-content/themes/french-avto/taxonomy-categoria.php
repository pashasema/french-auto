		<?php global $wpseo_front;
		nocache_headers();
		include( get_query_template( '404' ) );
		remove_action('wp_head',array($wpseo_front,'head'),1);
		status_header( 404 );
		die();?>