<?php

if ( ! function_exists( 'backpacktraveler_mikado_get_hide_dep_for_header_centered_logo_down_options' ) ) {
	function backpacktraveler_mikado_get_hide_dep_for_header_centered_logo_down_options() {
		$hide_dep_options = apply_filters( 'backpacktraveler_mikado_header_centered_logo_down_hide_global_option', $hide_dep_options = array() );
		
		return $hide_dep_options;
	}
}

if ( ! function_exists( 'backpacktraveler_mikado_header_centered_logo_down_map' ) ) {
	function backpacktraveler_mikado_header_centered_logo_down_map( $parent ) {
		$hide_dep_options = backpacktraveler_mikado_get_hide_dep_for_header_centered_logo_down_options();
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'          => $parent,
				'type'            => 'text',
				'name'            => 'logo_wrapper_padding_header_centered_logo_down',
				'default_value'   => '',
				'label'           => esc_html__( 'Logo Padding', 'backpacktraveler' ),
				'description'     => esc_html__( 'Insert padding in format: 0px 0px 1px 0px', 'backpacktraveler' ),
				'args'            => array(
					'col_width' => 3
				),
				'dependency' => array(
					'hide' => array(
						'header_options'  => $hide_dep_options
					)
				)
			)
		);
	}
	
	add_action( 'backpacktraveler_mikado_header_logo_area_additional_options', 'backpacktraveler_mikado_header_centered_logo_down_map' );
}