<?php

if ( ! function_exists( 'backpacktraveler_mikado_set_title_standard_with_breadcrumbs_type_for_options' ) ) {
	/**
	 * This function set standard with breadcrumbs title type value for title options map and meta boxes
	 */
	function backpacktraveler_mikado_set_title_standard_with_breadcrumbs_type_for_options( $type ) {
		$type['standard-with-breadcrumbs'] = esc_html__( 'Standard With Breadcrumbs', 'backpacktraveler' );
		
		return $type;
	}
	
	add_filter( 'backpacktraveler_mikado_filter_title_type_global_option', 'backpacktraveler_mikado_set_title_standard_with_breadcrumbs_type_for_options' );
	add_filter( 'backpacktraveler_mikado_filter_title_type_meta_boxes', 'backpacktraveler_mikado_set_title_standard_with_breadcrumbs_type_for_options' );
}