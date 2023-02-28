<?php

if ( ! function_exists( 'backpacktraveler_mikado_register_woocommerce_dropdown_cart_widget' ) ) {
	/**
	 * Function that register dropdown cart widget
	 */
	function backpacktraveler_mikado_register_woocommerce_dropdown_cart_widget( $widgets ) {
		$widgets[] = 'BackpackTravelerMikadoClassWoocommerceDropdownCart';
		
		return $widgets;
	}
	
	add_filter( 'backpacktraveler_core_filter_register_widgets', 'backpacktraveler_mikado_register_woocommerce_dropdown_cart_widget' );
}

if ( ! function_exists( 'backpacktraveler_mikado_get_dropdown_cart_icon_class' ) ) {
	/**
	 * Returns dropdow cart icon class
	 */
	function backpacktraveler_mikado_get_dropdown_cart_icon_class() {
		$classes = array(
			'mkdf-header-cart'
		);
		
		$classes[] = backpacktraveler_mikado_get_icon_sources_class( 'dropdown_cart', 'mkdf-header-cart' );
		
		return $classes;
	}
}