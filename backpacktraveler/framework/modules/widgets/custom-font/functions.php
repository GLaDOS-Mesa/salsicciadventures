<?php

if ( ! function_exists( 'backpacktraveler_mikado_register_custom_font_widget' ) ) {
	/**
	 * Function that register custom font widget
	 */
	function backpacktraveler_mikado_register_custom_font_widget( $widgets ) {
		$widgets[] = 'BackpackTravelerMikadoClassCustomFontWidget';
		
		return $widgets;
	}
	
	add_filter( 'backpacktraveler_core_filter_register_widgets', 'backpacktraveler_mikado_register_custom_font_widget' );
}