<?php

if ( ! function_exists( 'backpacktraveler_mikado_register_image_gallery_widget' ) ) {
	/**
	 * Function that register image gallery widget
	 */
	function backpacktraveler_mikado_register_image_gallery_widget( $widgets ) {
		$widgets[] = 'BackpackTravelerMikadoClassImageGalleryWidget';
		
		return $widgets;
	}
	
	add_filter( 'backpacktraveler_core_filter_register_widgets', 'backpacktraveler_mikado_register_image_gallery_widget' );
}