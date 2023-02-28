<?php

if ( ! function_exists( 'backpacktraveler_mikado_register_header_top_menu_type' ) ) {
	/**
	 * This function is used to register header type class for header factory file
	 */
	function backpacktraveler_mikado_register_header_top_menu_type( $header_types ) {
		$header_type = array(
			'header-top-menu' => 'BackpackTravelerMikadoNamespace\Modules\Header\Types\HeaderTopMenu'
		);
		
		$header_types = array_merge( $header_types, $header_type );
		
		return $header_types;
	}
}

if ( ! function_exists( 'backpacktraveler_mikado_init_register_header_top_menu_type' ) ) {
	/**
	 * This function is used to wait header-function.php file to init header object and then to init hook registration function above
	 */
	function backpacktraveler_mikado_init_register_header_top_menu_type() {
		add_filter( 'backpacktraveler_mikado_filter_register_header_type_class', 'backpacktraveler_mikado_register_header_top_menu_type' );
	}
	
	add_action( 'backpacktraveler_mikado_action_before_header_function_init', 'backpacktraveler_mikado_init_register_header_top_menu_type' );
}

if ( ! function_exists( 'backpacktraveler_mikado_header_top_menu_per_page_custom_styles' ) ) {
	/**
	 * Return header per page styles
	 */
	function backpacktraveler_mikado_header_top_menu_per_page_custom_styles( $style, $class_prefix, $page_id ) {
		$header_area_style    = array();
		$header_area_selector = array( $class_prefix . '.mkdf-header-top-menu .mkdf-page-header .mkdf-logo-area' );
		
		$header_top_menu_logo_area_margin_top = get_post_meta( $page_id, 'mkdf_menu_area_height_meta', true );
		
		if ( ! empty( $header_top_menu_logo_area_margin_top ) ) {
			$header_area_style['margin-top'] = backpacktraveler_mikado_filter_px( $header_top_menu_logo_area_margin_top)  . 'px';
		}
		
		$current_style = '';
		
		if ( ! empty( $header_area_style ) ) {
			$current_style .= backpacktraveler_mikado_dynamic_css( $header_area_selector, $header_area_style );
		}
		
		$current_style = $current_style . $style;
		
		return $current_style;
	}
	
	add_filter( 'backpacktraveler_mikado_filter_add_header_page_custom_style', 'backpacktraveler_mikado_header_top_menu_per_page_custom_styles', 10, 3 );
}