<?php

if ( ! function_exists( 'backpacktraveler_mikado_add_blog_list_shortcode' ) ) {
	function backpacktraveler_mikado_add_blog_list_shortcode( $shortcodes_class_name ) {
		$shortcodes = array(
			'BackpackTravelerCore\CPT\Shortcodes\BlogList\BlogList'
		);
		
		$shortcodes_class_name = array_merge( $shortcodes_class_name, $shortcodes );
		
		return $shortcodes_class_name;
	}
	
	add_filter( 'backpacktraveler_core_filter_add_vc_shortcode', 'backpacktraveler_mikado_add_blog_list_shortcode' );
}

if ( ! function_exists( 'backpacktraveler_mikado_set_blog_list_icon_class_name_for_vc_shortcodes' ) ) {
	/**
	 * Function that set custom icon class name for blog shortcodes to set our icon for Visual Composer shortcodes panel
	 */
	function backpacktraveler_mikado_set_blog_list_icon_class_name_for_vc_shortcodes( $shortcodes_icon_class_array ) {
		$shortcodes_icon_class_array[] = '.icon-wpb-blog-list';
		
		return $shortcodes_icon_class_array;
	}
	
	add_filter( 'backpacktraveler_core_filter_add_vc_shortcodes_custom_icon_class', 'backpacktraveler_mikado_set_blog_list_icon_class_name_for_vc_shortcodes' );
}