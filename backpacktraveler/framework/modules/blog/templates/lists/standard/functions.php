<?php

if ( ! function_exists( 'backpacktraveler_mikado_register_blog_standard_template_file' ) ) {
	/**
	 * Function that register blog standard template
	 */
	function backpacktraveler_mikado_register_blog_standard_template_file( $templates ) {
		$templates['blog-standard'] = esc_html__( 'Blog: Standard', 'backpacktraveler' );
		
		return $templates;
	}
	
	add_filter( 'backpacktraveler_mikado_filter_register_blog_templates', 'backpacktraveler_mikado_register_blog_standard_template_file' );
}

if ( ! function_exists( 'backpacktraveler_mikado_set_blog_standard_type_global_option' ) ) {
	/**
	 * Function that set blog list type value for global blog option map
	 */
	function backpacktraveler_mikado_set_blog_standard_type_global_option( $options ) {
		$options['standard'] = esc_html__( 'Blog: Standard', 'backpacktraveler' );
		
		return $options;
	}
	
	add_filter( 'backpacktraveler_mikado_filter_blog_list_type_global_option', 'backpacktraveler_mikado_set_blog_standard_type_global_option' );
}