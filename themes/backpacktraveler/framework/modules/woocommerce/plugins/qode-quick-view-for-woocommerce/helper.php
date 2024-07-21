<?php

if ( ! function_exists( 'backpacktraveler_mikado_woocommerce_qode_quick_view_template_single_title' ) ) {
	/**
	 * Function for overriding product title template in QODE Quick View plugin template
	 */
	function backpacktraveler_mikado_woocommerce_qode_quick_view_template_single_title() {
		the_title( '<h3  itemprop="name" class="mkdf-qode-quick-view-product-title entry-title">', '</h3>' );
	}
}

