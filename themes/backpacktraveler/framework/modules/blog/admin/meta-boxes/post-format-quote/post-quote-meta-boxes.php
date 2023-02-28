<?php

if ( ! function_exists( 'backpacktraveler_mikado_map_post_quote_meta' ) ) {
	function backpacktraveler_mikado_map_post_quote_meta() {
		$quote_post_format_meta_box = backpacktraveler_mikado_create_meta_box(
			array(
				'scope' => array( 'post' ),
				'title' => esc_html__( 'Quote Post Format', 'backpacktraveler' ),
				'name'  => 'post_format_quote_meta'
			)
		);
		
		backpacktraveler_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_post_quote_text_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Quote Text', 'backpacktraveler' ),
				'description' => esc_html__( 'Enter Quote text', 'backpacktraveler' ),
				'parent'      => $quote_post_format_meta_box
			)
		);
		
		backpacktraveler_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_post_quote_author_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Quote Author', 'backpacktraveler' ),
				'description' => esc_html__( 'Enter Quote author', 'backpacktraveler' ),
				'parent'      => $quote_post_format_meta_box
			)
		);
	}
	
	add_action( 'backpacktraveler_mikado_action_meta_boxes_map', 'backpacktraveler_mikado_map_post_quote_meta', 25 );
}