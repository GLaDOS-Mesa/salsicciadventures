<?php

if ( ! function_exists( 'backpacktraveler_mikado_register_header_centered_type' ) ) {
	/**
	 * This function is used to register header type class for header factory file
	 */
	function backpacktraveler_mikado_register_header_centered_type( $header_types ) {
		$header_type = array(
			'header-centered' => 'BackpackTravelerMikadoNamespace\Modules\Header\Types\HeaderCentered'
		);
		
		$header_types = array_merge( $header_types, $header_type );
		
		return $header_types;
	}
}

if ( ! function_exists( 'backpacktraveler_mikado_init_register_header_centered_type' ) ) {
	/**
	 * This function is used to wait header-function.php file to init header object and then to init hook registration function above
	 */
	function backpacktraveler_mikado_init_register_header_centered_type() {
		add_filter( 'backpacktraveler_mikado_filter_register_header_type_class', 'backpacktraveler_mikado_register_header_centered_type' );
	}
	
	add_action( 'backpacktraveler_mikado_action_before_header_function_init', 'backpacktraveler_mikado_init_register_header_centered_type' );
}

if ( ! function_exists( 'backpacktraveler_mikado_header_centered_per_page_custom_styles' ) ) {
	/**
	 * Return header per page styles
	 */
	function backpacktraveler_mikado_header_centered_per_page_custom_styles( $style, $class_prefix, $page_id ) {
		$header_area_style    = array();
		$header_area_selector = array( $class_prefix . '.mkdf-header-centered .mkdf-logo-area .mkdf-logo-wrapper' );
		
		$logo_area_logo_padding = get_post_meta( $page_id, 'mkdf_logo_wrapper_padding_header_centered_meta', true );
		
		if ( $logo_area_logo_padding !== '' ) {
			$header_area_style['padding'] = $logo_area_logo_padding;
		}
		
		$current_style = '';
		
		if ( ! empty( $header_area_style ) ) {
			$current_style .= backpacktraveler_mikado_dynamic_css( $header_area_selector, $header_area_style );
		}
		
		$current_style = $current_style . $style;
		
		return $current_style;
	}
	
		add_filter( 'backpacktraveler_mikado_filter_add_header_page_custom_style', 'backpacktraveler_mikado_header_centered_per_page_custom_styles', 10, 3 );
}