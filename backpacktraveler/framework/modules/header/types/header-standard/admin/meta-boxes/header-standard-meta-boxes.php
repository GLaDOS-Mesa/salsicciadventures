<?php

if ( ! function_exists( 'backpacktraveler_mikado_get_hide_dep_for_header_standard_meta_boxes' ) ) {
	function backpacktraveler_mikado_get_hide_dep_for_header_standard_meta_boxes() {
		$hide_dep_options = apply_filters( 'backpacktraveler_mikado_filter_header_standard_hide_meta_boxes', $hide_dep_options = array() );
		
		return $hide_dep_options;
	}
}

if ( ! function_exists( 'backpacktraveler_mikado_header_standard_meta_map' ) ) {
	function backpacktraveler_mikado_header_standard_meta_map( $parent ) {
		$hide_dep_options = backpacktraveler_mikado_get_hide_dep_for_header_standard_meta_boxes();
		
		backpacktraveler_mikado_create_meta_box_field(
			array(
				'parent'          => $parent,
				'type'            => 'select',
				'name'            => 'mkdf_set_menu_area_position_meta',
				'default_value'   => '',
				'label'           => esc_html__( 'Choose Menu Area Position', 'backpacktraveler' ),
				'description'     => esc_html__( 'Select menu area position in your header', 'backpacktraveler' ),
				'options'         => array(
					''       => esc_html__( 'Default', 'backpacktraveler' ),
					'left'   => esc_html__( 'Left', 'backpacktraveler' ),
					'right'  => esc_html__( 'Right', 'backpacktraveler' ),
					'center' => esc_html__( 'Center', 'backpacktraveler' )
				),
				'dependency' => array(
					'hide' => array(
						'mkdf_header_type_meta'  => $hide_dep_options
					)
				)
			)
		);
	}
	
	add_action( 'backpacktraveler_mikado_action_additional_header_area_meta_boxes_map', 'backpacktraveler_mikado_header_standard_meta_map' );
}