<?php

if ( ! function_exists( 'backpacktraveler_mikado_register_separator_widget' ) ) {
	/**
	 * Function that register separator widget
	 */
	function backpacktraveler_mikado_register_separator_widget( $widgets ) {
		$widgets[] = 'BackpackTravelerMikadoClassSeparatorWidget';
		
		return $widgets;
	}
	
	add_filter( 'backpacktraveler_core_filter_register_widgets', 'backpacktraveler_mikado_register_separator_widget' );
}