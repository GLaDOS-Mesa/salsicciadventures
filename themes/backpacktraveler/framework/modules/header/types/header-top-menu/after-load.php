<?php

if ( ! function_exists( 'backpacktraveler_mikado_disable_behaviors_for_header_top_menu' ) ) {
	/**
	 * This function is used to disable sticky header functions that perform processing variables their used in js for this header type
	 */
	function backpacktraveler_mikado_disable_behaviors_for_header_top_menu( $allow_behavior ) {
		return false;
	}
	
	if ( backpacktraveler_mikado_check_is_header_type_enabled( 'header-top-menu', backpacktraveler_mikado_get_page_id() ) ) {
		add_filter( 'backpacktraveler_mikado_filter_allow_sticky_header_behavior', 'backpacktraveler_mikado_disable_behaviors_for_header_top_menu' );
		add_filter( 'backpacktraveler_mikado_filter_allow_content_boxed_layout', 'backpacktraveler_mikado_disable_behaviors_for_header_top_menu' );
	}
}