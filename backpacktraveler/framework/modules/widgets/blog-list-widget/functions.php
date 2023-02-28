<?php

if ( ! function_exists( 'backpacktraveler_mikado_register_blog_list_widget' ) ) {
	/**
	 * Function that register blog list widget
	 */
	function backpacktraveler_mikado_register_blog_list_widget( $widgets ) {
		$widgets[] = 'BackpackTravelerMikadoClassBlogListWidget';
		
		return $widgets;
	}
	
	add_filter( 'backpacktraveler_core_filter_register_widgets', 'backpacktraveler_mikado_register_blog_list_widget' );
}