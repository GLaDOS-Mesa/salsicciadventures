<?php

if ( ! function_exists( 'backpacktraveler_mikado_map_post_link_meta' ) ) {
	function backpacktraveler_mikado_map_post_link_meta() {
		$link_post_format_meta_box = backpacktraveler_mikado_create_meta_box(
			array(
				'scope' => array( 'post' ),
				'title' => esc_html__( 'Link Post Format', 'backpacktraveler' ),
				'name'  => 'post_format_link_meta'
			)
		);
		
		backpacktraveler_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_post_link_link_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Link', 'backpacktraveler' ),
				'description' => esc_html__( 'Enter link', 'backpacktraveler' ),
				'parent'      => $link_post_format_meta_box
			)
		);
	}
	
	add_action( 'backpacktraveler_mikado_action_meta_boxes_map', 'backpacktraveler_mikado_map_post_link_meta', 24 );
}