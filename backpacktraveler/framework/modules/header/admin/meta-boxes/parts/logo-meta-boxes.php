<?php

if ( ! function_exists( 'backpacktraveler_mikado_logo_meta_box_map' ) ) {
	function backpacktraveler_mikado_logo_meta_box_map() {
		
		$logo_meta_box = backpacktraveler_mikado_create_meta_box(
			array(
				'scope' => apply_filters( 'backpacktraveler_mikado_filter_set_scope_for_meta_boxes', array( 'page', 'post' ), 'logo_meta' ),
				'title' => esc_html__( 'Logo', 'backpacktraveler' ),
				'name'  => 'logo_meta'
			)
		);
		
		backpacktraveler_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_logo_image_meta',
				'type'        => 'image',
				'label'       => esc_html__( 'Logo Image - Default', 'backpacktraveler' ),
				'description' => esc_html__( 'Choose a default logo image to display ', 'backpacktraveler' ),
				'parent'      => $logo_meta_box
			)
		);
		
		backpacktraveler_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_logo_image_dark_meta',
				'type'        => 'image',
				'label'       => esc_html__( 'Logo Image - Dark', 'backpacktraveler' ),
				'description' => esc_html__( 'Choose a default logo image to display ', 'backpacktraveler' ),
				'parent'      => $logo_meta_box
			)
		);
		
		backpacktraveler_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_logo_image_light_meta',
				'type'        => 'image',
				'label'       => esc_html__( 'Logo Image - Light', 'backpacktraveler' ),
				'description' => esc_html__( 'Choose a default logo image to display ', 'backpacktraveler' ),
				'parent'      => $logo_meta_box
			)
		);
		
		backpacktraveler_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_logo_image_sticky_meta',
				'type'        => 'image',
				'label'       => esc_html__( 'Logo Image - Sticky', 'backpacktraveler' ),
				'description' => esc_html__( 'Choose a default logo image to display ', 'backpacktraveler' ),
				'parent'      => $logo_meta_box
			)
		);
		
		backpacktraveler_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_logo_image_mobile_meta',
				'type'        => 'image',
				'label'       => esc_html__( 'Logo Image - Mobile', 'backpacktraveler' ),
				'description' => esc_html__( 'Choose a default logo image to display ', 'backpacktraveler' ),
				'parent'      => $logo_meta_box
			)
		);
	}
	
	add_action( 'backpacktraveler_mikado_action_meta_boxes_map', 'backpacktraveler_mikado_logo_meta_box_map', 47 );
}