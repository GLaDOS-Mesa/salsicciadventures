<?php

if ( ! function_exists( 'backpacktraveler_mikado_include_woocommerce_shortcodes' ) ) {
	function backpacktraveler_mikado_include_woocommerce_shortcodes() {
		foreach ( glob( MIKADO_FRAMEWORK_MODULES_ROOT_DIR . '/woocommerce/shortcodes/*/load.php' ) as $shortcode_load ) {
			include_once $shortcode_load;
		}
	}
	
	if ( backpacktraveler_mikado_core_plugin_installed() ) {
		add_action( 'backpacktraveler_core_action_include_shortcodes_file', 'backpacktraveler_mikado_include_woocommerce_shortcodes' );
	}
}

if( ! function_exists( 'backpacktraveler_mikado_include_woocommerce_shortcodes_for_elementor' ) ){
    function backpacktraveler_mikado_include_woocommerce_shortcodes_for_elementor(){
        if( backpacktraveler_mikado_is_elementor_installed() && backpacktraveler_mikado_is_theme_registered() ){
            foreach ( glob( MIKADO_FRAMEWORK_MODULES_ROOT_DIR . '/woocommerce/shortcodes/*/elementor-*.php' ) as $shortcode_load ) {
                include_once $shortcode_load;
            }
        }
    }

    add_action('elementor/widgets/widgets_registered', 'backpacktraveler_mikado_include_woocommerce_shortcodes_for_elementor');
}