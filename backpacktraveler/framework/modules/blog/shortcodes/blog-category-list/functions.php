<?php

if ( ! function_exists( 'backpacktraveler_core_add_blog_category_list_shortcode' ) ) {
	function backpacktraveler_core_add_blog_category_list_shortcode( $shortcodes_class_name ) {
		$shortcodes = array(
			'BackpackTravelerCore\CPT\Shortcodes\BlogCategoryList\BlogCategoryList'
		);
		
		$shortcodes_class_name = array_merge( $shortcodes_class_name, $shortcodes );
		
		return $shortcodes_class_name;
	}
	
	add_filter( 'backpacktraveler_core_filter_add_vc_shortcode', 'backpacktraveler_core_add_blog_category_list_shortcode' );
}

if ( ! function_exists( 'backpacktraveler_core_set_blog_category_list_icon_class_name_for_vc_shortcodes' ) ) {
	/**
	 * Function that set custom icon class name for blog category list shortcode to set our icon for Visual Composer shortcodes panel
	 */
	function backpacktraveler_core_set_blog_category_list_icon_class_name_for_vc_shortcodes( $shortcodes_icon_class_array ) {
		$shortcodes_icon_class_array[] = '.icon-wpb-blog-category-list';
		
		return $shortcodes_icon_class_array;
	}
	
	add_filter( 'backpacktraveler_core_filter_add_vc_shortcodes_custom_icon_class', 'backpacktraveler_core_set_blog_category_list_icon_class_name_for_vc_shortcodes' );
}