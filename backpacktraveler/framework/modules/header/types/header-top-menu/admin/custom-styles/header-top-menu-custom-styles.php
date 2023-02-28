<?php

if ( ! function_exists( 'backpacktraveler_mikado_header_top_menu_logo_area_styles' ) ) {
	/**
	 * Generates styles for menu area
	 */
	function backpacktraveler_mikado_header_top_menu_logo_area_styles() {
		$menu_area_height = backpacktraveler_mikado_options()->getOptionValue( 'menu_area_height' );
		
		if ( ! empty( $menu_area_height ) ) {
			echo backpacktraveler_mikado_dynamic_css( '.mkdf-header-top-menu .mkdf-page-header .mkdf-logo-area', array( 'margin-top' => $menu_area_height . 'px' ) );
		}
	}
	
	add_action( 'backpacktraveler_mikado_action_style_dynamic', 'backpacktraveler_mikado_header_top_menu_logo_area_styles' );
}