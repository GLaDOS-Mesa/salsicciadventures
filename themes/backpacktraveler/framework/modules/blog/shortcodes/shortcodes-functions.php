<?php

if ( ! function_exists( 'backpacktraveler_mikado_include_blog_shortcodes' ) ) {
	function backpacktraveler_mikado_include_blog_shortcodes() {
		foreach ( glob( MIKADO_FRAMEWORK_MODULES_ROOT_DIR . '/blog/shortcodes/*/load.php' ) as $shortcode_load ) {
			include_once $shortcode_load;
		}
	}
	
	if ( backpacktraveler_mikado_core_plugin_installed() ) {
		add_action( 'backpacktraveler_core_action_include_shortcodes_file', 'backpacktraveler_mikado_include_blog_shortcodes' );
	}
}

if( ! function_exists('backpacktraveler_mikado_include_elementor_blog_shortcodes') ){
    function backpacktraveler_mikado_include_elementor_blog_shortcodes(){
        if( backpacktraveler_mikado_is_elementor_installed() && backpacktraveler_mikado_is_theme_registered() ){
            foreach ( glob( MIKADO_FRAMEWORK_MODULES_ROOT_DIR . '/blog/shortcodes/*/elementor-*.php' ) as $shortcode_load ) {
                include_once $shortcode_load;
            }
        }
    }

    add_action('elementor/widgets/widgets_registered', 'backpacktraveler_mikado_include_elementor_blog_shortcodes');
}