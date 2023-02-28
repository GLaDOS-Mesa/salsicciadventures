<?php

if ( backpacktraveler_mikado_contact_form_7_installed() ) {
	include_once MIKADO_FRAMEWORK_MODULES_ROOT_DIR . '/widgets/contact-form-7/contact-form-7.php';
	
	add_filter( 'backpacktraveler_core_filter_register_widgets', 'backpacktraveler_mikado_register_cf7_widget' );
}

if ( ! function_exists( 'backpacktraveler_mikado_register_cf7_widget' ) ) {
	/**
	 * Function that register cf7 widget
	 */
	function backpacktraveler_mikado_register_cf7_widget( $widgets ) {
		$widgets[] = 'BackpackTravelerMikadoClassContactForm7Widget';
		
		return $widgets;
	}
}