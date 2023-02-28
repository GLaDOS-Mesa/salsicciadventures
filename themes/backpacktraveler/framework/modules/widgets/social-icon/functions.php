<?php

if ( ! function_exists( 'backpacktraveler_mikado_register_social_icon_widget' ) ) {
	/**
	 * Function that register social icon widget
	 */
	function backpacktraveler_mikado_register_social_icon_widget( $widgets ) {
		$widgets[] = 'BackpackTravelerMikadoClassSocialIconWidget';
		
		return $widgets;
	}
	
	add_filter( 'backpacktraveler_core_filter_register_widgets', 'backpacktraveler_mikado_register_social_icon_widget' );
}