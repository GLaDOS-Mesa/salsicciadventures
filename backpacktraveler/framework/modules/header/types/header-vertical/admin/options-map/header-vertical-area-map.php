<?php

if ( ! function_exists( 'backpacktraveler_mikado_get_hide_dep_for_header_vertical_area_options' ) ) {
	function backpacktraveler_mikado_get_hide_dep_for_header_vertical_area_options() {
		$hide_dep_options = apply_filters( 'backpacktraveler_mikado_filter_header_vertical_hide_global_option', $hide_dep_options = array() );
		
		return $hide_dep_options;
	}
}

if ( ! function_exists( 'backpacktraveler_mikado_header_vertical_options_map' ) ) {
	function backpacktraveler_mikado_header_vertical_options_map( $panel_header ) {
		$hide_dep_options = backpacktraveler_mikado_get_hide_dep_for_header_vertical_area_options();
		
		$vertical_area_container = backpacktraveler_mikado_add_admin_container_no_style(
			array(
				'parent'          => $panel_header,
				'name'            => 'header_vertical_area_container',
				'dependency' => array(
					'hide' => array(
						'header_options'  => $hide_dep_options
					)
				)
			)
		);
		
		backpacktraveler_mikado_add_admin_section_title(
			array(
				'parent' => $vertical_area_container,
				'name'   => 'menu_area_style',
				'title'  => esc_html__( 'Vertical Area Style', 'backpacktraveler' )
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'        => 'vertical_header_background_color',
				'type'        => 'color',
				'label'       => esc_html__( 'Background Color', 'backpacktraveler' ),
				'description' => esc_html__( 'Set background color for vertical menu', 'backpacktraveler' ),
				'parent'      => $vertical_area_container
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'          => 'vertical_header_background_image',
				'type'          => 'image',
				'default_value' => '',
				'label'         => esc_html__( 'Background Image', 'backpacktraveler' ),
				'description'   => esc_html__( 'Set background image for vertical menu', 'backpacktraveler' ),
				'parent'        => $vertical_area_container
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $vertical_area_container,
				'type'          => 'yesno',
				'name'          => 'vertical_header_shadow',
				'default_value' => 'no',
				'label'         => esc_html__( 'Shadow', 'backpacktraveler' ),
				'description'   => esc_html__( 'Set shadow on vertical header', 'backpacktraveler' ),
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $vertical_area_container,
				'type'          => 'yesno',
				'name'          => 'vertical_header_border',
				'default_value' => 'no',
				'label'         => esc_html__( 'Vertical Area Border', 'backpacktraveler' ),
				'description'   => esc_html__( 'Set border on vertical area', 'backpacktraveler' )
			)
		);
		
		$vertical_header_shadow_border_container = backpacktraveler_mikado_add_admin_container(
			array(
				'parent'          => $vertical_area_container,
				'name'            => 'vertical_header_shadow_border_container',
				'dependency' => array(
					'hide' => array(
						'vertical_header_border'  => 'no'
					)
				)
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $vertical_header_shadow_border_container,
				'type'          => 'color',
				'name'          => 'vertical_header_border_color',
				'default_value' => '',
				'label'         => esc_html__( 'Border Color', 'backpacktraveler' ),
				'description'   => esc_html__( 'Set border color for vertical area', 'backpacktraveler' ),
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $vertical_area_container,
				'type'          => 'yesno',
				'name'          => 'vertical_header_center_content',
				'default_value' => 'no',
				'label'         => esc_html__( 'Center Content', 'backpacktraveler' ),
				'description'   => esc_html__( 'Set content in vertical center', 'backpacktraveler' ),
			)
		);
		
		do_action( 'backpacktraveler_mikado_header_vertical_area_additional_options', $panel_header );
	}
	
	add_action( 'backpacktraveler_mikado_action_additional_header_menu_area_options_map', 'backpacktraveler_mikado_header_vertical_options_map' );
}