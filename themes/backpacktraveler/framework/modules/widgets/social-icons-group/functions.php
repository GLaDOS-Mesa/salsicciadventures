<?php

if ( ! function_exists( 'backpacktraveler_mikado_register_social_icons_widget' ) ) {
	/**
	 * Function that register social icon widget
	 */
	function backpacktraveler_mikado_register_social_icons_widget( $widgets ) {
		$widgets[] = 'BackpackTravelerMikadoClassClassIconsGroupWidget';
		
		return $widgets;
	}
	
	add_filter( 'backpacktraveler_core_filter_register_widgets', 'backpacktraveler_mikado_register_social_icons_widget' );
}