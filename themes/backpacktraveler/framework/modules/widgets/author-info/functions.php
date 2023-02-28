<?php

if ( ! function_exists( 'backpacktraveler_mikado_register_author_info_widget' ) ) {
	/**
	 * Function that register author info widget
	 */
	function backpacktraveler_mikado_register_author_info_widget( $widgets ) {
		$widgets[] = 'BackpackTravelerMikadoClassAuthorInfoWidget';
		
		return $widgets;
	}
	
	add_filter( 'backpacktraveler_core_filter_register_widgets', 'backpacktraveler_mikado_register_author_info_widget' );
}