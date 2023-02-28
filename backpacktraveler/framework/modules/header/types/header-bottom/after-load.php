<?php

if ( ! function_exists( 'backpacktraveler_mikado_disable_behaviors_for_header_bottom' ) ) {
	/**
	 * This function is used to disable sticky header functions that perform processing variables their used in js for this header type
	 */
	function backpacktraveler_mikado_disable_behaviors_for_header_bottom( $allow_behavior ) {
		return false;
	}
	
	if ( backpacktraveler_mikado_check_is_header_type_enabled( 'header-bottom', backpacktraveler_mikado_get_page_id() ) ) {
		add_filter( 'backpacktraveler_mikado_filter_allow_sticky_header_behavior', 'backpacktraveler_mikado_disable_behaviors_for_header_bottom' );
		add_filter( 'backpacktraveler_mikado_filter_allow_content_boxed_layout', 'backpacktraveler_mikado_disable_behaviors_for_header_bottom' );

        remove_action('backpacktraveler_mikado_action_after_wrapper_inner', 'backpacktraveler_mikado_get_header');
        add_action('backpacktraveler_mikado_action_before_main_content', 'backpacktraveler_mikado_get_header');
	}
}