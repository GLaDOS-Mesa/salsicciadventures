<?php

if ( ! function_exists( 'backpacktraveler_mikado_register_sidearea_opener_widget' ) ) {
	/**
	 * Function that register sidearea opener widget
	 */
	function backpacktraveler_mikado_register_sidearea_opener_widget( $widgets ) {
		$widgets[] = 'BackpackTravelerMikadoClassSideAreaOpener';
		
		return $widgets;
	}
	
	add_filter( 'backpacktraveler_core_filter_register_widgets', 'backpacktraveler_mikado_register_sidearea_opener_widget' );
}