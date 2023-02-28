<?php

if ( ! function_exists( 'backpacktraveler_mikado_register_sticky_sidebar_widget' ) ) {
	/**
	 * Function that register sticky sidebar widget
	 */
	function backpacktraveler_mikado_register_sticky_sidebar_widget( $widgets ) {
		$widgets[] = 'BackpackTravelerMikadoClassStickySidebar';
		
		return $widgets;
	}
	
	add_filter( 'backpacktraveler_core_filter_register_widgets', 'backpacktraveler_mikado_register_sticky_sidebar_widget' );
}