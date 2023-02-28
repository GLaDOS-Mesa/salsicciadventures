<?php

if ( ! function_exists( 'backpacktraveler_mikado_disable_wpml_css' ) ) {
	function backpacktraveler_mikado_disable_wpml_css() {
		define( 'ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true );
	}
	
	add_action( 'after_setup_theme', 'backpacktraveler_mikado_disable_wpml_css' );
}