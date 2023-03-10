<?php

if ( ! function_exists( 'backpacktraveler_mikado_map_post_gallery_meta' ) ) {
	
	function backpacktraveler_mikado_map_post_gallery_meta() {
		$gallery_post_format_meta_box = backpacktraveler_mikado_create_meta_box(
			array(
				'scope' => array( 'post' ),
				'title' => esc_html__( 'Gallery Post Format', 'backpacktraveler' ),
				'name'  => 'post_format_gallery_meta'
			)
		);
		
		backpacktraveler_mikado_add_multiple_images_field(
			array(
				'name'        => 'mkdf_post_gallery_images_meta',
				'label'       => esc_html__( 'Gallery Images', 'backpacktraveler' ),
				'description' => esc_html__( 'Choose your gallery images', 'backpacktraveler' ),
				'parent'      => $gallery_post_format_meta_box,
			)
		);
	}
	
	add_action( 'backpacktraveler_mikado_action_meta_boxes_map', 'backpacktraveler_mikado_map_post_gallery_meta', 21 );
}
