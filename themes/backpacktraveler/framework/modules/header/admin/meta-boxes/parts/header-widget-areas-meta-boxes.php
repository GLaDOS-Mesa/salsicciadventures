<?php

if ( ! function_exists( 'backpacktraveler_mikado_get_hide_dep_for_header_widget_areas_meta_boxes' ) ) {
	function backpacktraveler_mikado_get_hide_dep_for_header_widget_areas_meta_boxes() {
		$hide_dep_options = apply_filters( 'backpacktraveler_mikado_filter_header_widget_areas_hide_meta_boxes', $hide_dep_options = array() );
		
		return $hide_dep_options;
	}
}

if ( ! function_exists( 'backpacktraveler_mikado_get_hide_dep_for_header_widget_area_two_meta_boxes' ) ) {
	function backpacktraveler_mikado_get_hide_dep_for_header_widget_area_two_meta_boxes() {
		$hide_dep_options = apply_filters( 'backpacktraveler_mikado_filter_header_widget_area_two_hide_meta_boxes', $hide_dep_options = array() );
		
		return $hide_dep_options;
	}
}

if ( ! function_exists( 'backpacktraveler_mikado_header_widget_areas_meta_options_map' ) ) {
	function backpacktraveler_mikado_header_widget_areas_meta_options_map( $header_meta_box ) {
		$hide_dep_widgets 			= backpacktraveler_mikado_get_hide_dep_for_header_widget_areas_meta_boxes();
		$hide_dep_widget_area_two 	= backpacktraveler_mikado_get_hide_dep_for_header_widget_area_two_meta_boxes();
		
		$header_widget_areas_container = backpacktraveler_mikado_add_admin_container_no_style(
			array(
				'type'       => 'container',
				'name'       => 'header_widget_areas_container',
				'parent'     => $header_meta_box,
				'dependency' => array(
					'hide' => array(
						'mkdf_header_type_meta' => $hide_dep_widgets
					)
				),
				'args'       => array(
					'enable_panels_for_default_value' => true
				)
			)
		);
		
		backpacktraveler_mikado_add_admin_section_title(
			array(
				'parent' => $header_widget_areas_container,
				'name'   => 'header_widget_areas',
				'title'  => esc_html__( 'Widget Areas', 'backpacktraveler' )
			)
		);
		
		backpacktraveler_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_disable_header_widget_areas_meta',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Disable Header Widget Areas', 'backpacktraveler' ),
				'description'   => esc_html__( 'Enabling this option will hide widget areas from header', 'backpacktraveler' ),
				'parent'        => $header_widget_areas_container,
			)
		);

		$header_custom_widget_areas_container = backpacktraveler_mikado_add_admin_container_no_style(
			array(
				'type'       => 'container',
				'name'       => 'header_custom_widget_areas_container',
				'parent'     => $header_widget_areas_container,
				'dependency' => array(
					'hide' => array(
						'mkdf_disable_header_widget_areas_meta' => 'yes'
					)
				)
			)
		);
					
		$backpacktraveler_custom_sidebars = backpacktraveler_mikado_get_custom_sidebars();
		if ( count( $backpacktraveler_custom_sidebars ) > 0 ) {
			backpacktraveler_mikado_create_meta_box_field(
				array(
					'name'        => 'mkdf_custom_header_widget_area_one_meta',
					'type'        => 'selectblank',
					'label'       => esc_html__( 'Choose Custom Header Widget Area One', 'backpacktraveler' ),
					'description' => esc_html__( 'Choose custom widget area to display in header widget area one', 'backpacktraveler' ),
					'parent'      => $header_custom_widget_areas_container,
					'options'     => $backpacktraveler_custom_sidebars
				)
			);
		}

		if ( count( $backpacktraveler_custom_sidebars ) > 0 ) {
			backpacktraveler_mikado_create_meta_box_field(
				array(
					'name'        => 'mkdf_custom_header_widget_area_two_meta',
					'type'        => 'selectblank',
					'label'       => esc_html__( 'Choose Custom Header Widget Area Two', 'backpacktraveler' ),
					'description' => esc_html__( 'Choose custom widget area to display in header widget area two', 'backpacktraveler' ),
					'parent'      => $header_custom_widget_areas_container,
					'options'     => $backpacktraveler_custom_sidebars,
					'dependency' => array(
						'hide' => array(
							'mkdf_header_type_meta' => $hide_dep_widget_area_two
						)
					)
				)
			);
		}

		backpacktraveler_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_disable_custom_header_widget_areas_meta',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Disable Custom Header Widget Areas', 'backpacktraveler' ),
				'description'   => esc_html__( 'Enabling this option will hide widget areas from Centered With Down Logo header', 'backpacktraveler' ),
				'parent'        => $header_widget_areas_container,
			)
		);
		
		do_action( 'backpacktraveler_mikado_header_widget_areas_additional_meta_boxes_map', $header_widget_areas_container );
	}
	
	add_action( 'backpacktraveler_mikado_action_header_widget_areas_meta_boxes_map', 'backpacktraveler_mikado_header_widget_areas_meta_options_map', 10, 1 );
}