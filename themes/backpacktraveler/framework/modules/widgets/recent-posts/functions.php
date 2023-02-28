<?php

if ( ! function_exists( 'backpacktraveler_mikado_register_recent_posts_widget' ) ) {
	/**
	 * Function that register search opener widget
	 */
	function backpacktraveler_mikado_register_recent_posts_widget( $widgets ) {
		$widgets[] = 'BackpackTravelerMikadoClassRecentPosts';
		
		return $widgets;
	}
	
	add_filter( 'backpacktraveler_core_filter_register_widgets', 'backpacktraveler_mikado_register_recent_posts_widget' );
}