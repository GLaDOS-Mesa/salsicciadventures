<?php

if ( ! function_exists( 'backpacktraveler_mikado_get_hide_dep_for_header_centered_logo_down_meta_boxes' ) ) {
	function backpacktraveler_mikado_get_hide_dep_for_header_centered_logo_down_meta_boxes() {
		$hide_dep_options = apply_filters( 'backpacktraveler_mikado_header_centered_logo_down_hide_meta_boxes', $hide_dep_options = array() );
		
		return $hide_dep_options;
	}
}

if ( ! function_exists( 'backpacktraveler_mikado_header_centered_logo_down_meta_map' ) ) {
	function backpacktraveler_mikado_header_centered_logo_down_meta_map( $parent ) {
		$hide_dep_options = backpacktraveler_mikado_get_hide_dep_for_header_centered_logo_down_meta_boxes();
		
		backpacktraveler_mikado_create_meta_box_field(
			array(
				'parent'          => $parent,
				'type'            => 'text',
				'name'            => 'mkdf_logo_wrapper_padding_header_centered_logo_down_meta',
				'default_value'   => '',
				'label'           => esc_html__( 'Logo Padding', 'backpacktraveler' ),
				'description'     => esc_html__( 'Insert padding in format: 0px 0px 1px 0px', 'backpacktraveler' ),
				'args'            => array(
					'col_width' => 3
				),
				'dependency' => array(
					'hide' => array(
						'mkdf_header_type_meta'  => $hide_dep_options
					)
				)
			)
		);

        backpacktraveler_mikado_create_meta_box_field(
            array(
                'parent'          => $parent,
                'name'          => 'mkdf_disable_centered_left_widget_area_meta',
                'type'          => 'yesno',
                'default_value' => 'no',
                'label'         => esc_html__( 'Disable Header Menu Left Area Widget', 'backpacktraveler' ),
                'description'   => esc_html__( 'Enabling this option will hide left widget area from the menu area', 'backpacktraveler' ),
                'dependency' => array(
                    'hide' => array(
                        'mkdf_header_type_meta'  => $hide_dep_options
                    )
                )
            )
        );

        $backpacktraveler_custom_sidebars = backpacktraveler_mikado_get_custom_sidebars();
        if ( is_array( $backpacktraveler_custom_sidebars ) && count( $backpacktraveler_custom_sidebars ) > 0 ) {
            backpacktraveler_mikado_create_meta_box_field(
                array(
                    'parent'          => $parent,
                    'name'        => 'mkdf_custom_centered_left_area_sidebar_meta',
                    'type'        => 'selectblank',
                    'label'       => esc_html__( 'Choose Custom Widget Area In Menu Area', 'backpacktraveler' ),
                    'description' => esc_html__( 'Choose custom widget area to display in header left menu area', 'backpacktraveler' ),
                    'options'     => $backpacktraveler_custom_sidebars,
                    'dependency' => array(
                        'hide' => array(
                            'mkdf_disable_centered_left_widget_area_meta' => 'yes'
                        )
                    )
                )
            );
        }

        backpacktraveler_mikado_create_meta_box_field(
            array(
                'parent'          => $parent,
                'name'          => 'mkdf_disable_centered_right_widget_area_meta',
                'type'          => 'yesno',
                'default_value' => 'no',
                'label'         => esc_html__( 'Disable Header Menu Right Area Widget', 'backpacktraveler' ),
                'description'   => esc_html__( 'Enabling this option will hide right widget area from the menu area', 'backpacktraveler' ),
                'dependency' => array(
                    'hide' => array(
                        'mkdf_header_type_meta'  => $hide_dep_options
                    )
                )
            )
        );

        $backpacktraveler_custom_sidebars = backpacktraveler_mikado_get_custom_sidebars();
        if ( is_array( $backpacktraveler_custom_sidebars ) && count( $backpacktraveler_custom_sidebars ) > 0 ) {
            backpacktraveler_mikado_create_meta_box_field(
                array(
                    'parent'          => $parent,
                    'name'        => 'mkdf_custom_centered_right_area_sidebar_meta',
                    'type'        => 'selectblank',
                    'label'       => esc_html__( 'Choose Custom Widget Area In Menu Area', 'backpacktraveler' ),
                    'description' => esc_html__( 'Choose custom widget area to display in header right menu area', 'backpacktraveler' ),
                    'options'     => $backpacktraveler_custom_sidebars,
                    'dependency' => array(
                        'hide' => array(
                            'mkdf_disable_centered_left_widget_area_meta' => 'yes'
                        )
                    )
                )
            );
        }
	}
	
	add_action( 'backpacktraveler_mikado_header_logo_area_additional_meta_boxes_map', 'backpacktraveler_mikado_header_centered_logo_down_meta_map', 10, 1 );
}