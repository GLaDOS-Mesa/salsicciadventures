<?php

if ( ! function_exists( 'backpacktraveler_mikado_register_icon_widget' ) ) {
	/**
	 * Function that register icon widget
	 */
	function backpacktraveler_mikado_register_icon_widget( $widgets ) {
		$widgets[] = 'BackpackTravelerMikadoClassIconWidget';
		
		return $widgets;
	}
	
	add_filter( 'backpacktraveler_core_filter_register_widgets', 'backpacktraveler_mikado_register_icon_widget' );
}