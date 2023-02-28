<?php

if ( ! function_exists( 'backpacktraveler_mikado_register_button_widget' ) ) {
	/**
	 * Function that register button widget
	 */
	function backpacktraveler_mikado_register_button_widget( $widgets ) {
		$widgets[] = 'BackpackTravelerMikadoClassButtonWidget';
		
		return $widgets;
	}
	
	add_filter( 'backpacktraveler_core_filter_register_widgets', 'backpacktraveler_mikado_register_button_widget' );
}