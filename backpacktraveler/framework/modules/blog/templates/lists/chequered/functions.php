<?php

if ( ! function_exists( 'backpacktraveler_mikado_register_blog_chequered_template_file' ) ) {
	/**
	 * Function that register blog chequered template
	 */
	function backpacktraveler_mikado_register_blog_chequered_template_file( $templates ) {
		$templates['blog-chequered'] = esc_html__( 'Blog: Chequered', 'backpacktraveler' );
		
		return $templates;
	}
	
	add_filter( 'backpacktraveler_mikado_filter_register_blog_templates', 'backpacktraveler_mikado_register_blog_chequered_template_file' );
}

if ( ! function_exists( 'backpacktraveler_mikado_set_blog_chequered_type_global_option' ) ) {
	/**
	 * Function that set blog list type value for global blog option map
	 */
	function backpacktraveler_mikado_set_blog_chequered_type_global_option( $options ) {
		$options['chequered'] = esc_html__( 'Blog: Chequered', 'backpacktraveler' );
		
		return $options;
	}
	
	add_filter( 'backpacktraveler_mikado_filter_blog_list_type_global_option', 'backpacktraveler_mikado_set_blog_chequered_type_global_option' );
}