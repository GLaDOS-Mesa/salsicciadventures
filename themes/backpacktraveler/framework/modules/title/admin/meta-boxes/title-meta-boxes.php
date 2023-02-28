<?php

if ( ! function_exists( 'backpacktraveler_mikado_get_title_types_meta_boxes' ) ) {
	function backpacktraveler_mikado_get_title_types_meta_boxes() {
		$title_type_options = apply_filters( 'backpacktraveler_mikado_filter_title_type_meta_boxes', $title_type_options = array( '' => esc_html__( 'Default', 'backpacktraveler' ) ) );
		
		return $title_type_options;
	}
}

foreach ( glob( MIKADO_FRAMEWORK_MODULES_ROOT_DIR . '/title/types/*/admin/meta-boxes/*.php' ) as $meta_box_load ) {
	include_once $meta_box_load;
}

if ( ! function_exists( 'backpacktraveler_mikado_map_title_meta' ) ) {
	function backpacktraveler_mikado_map_title_meta() {
		$title_type_meta_boxes = backpacktraveler_mikado_get_title_types_meta_boxes();

        $scope = apply_filters( 'backpacktraveler_mikado_filter_set_scope_for_meta_boxes', array( 'page', 'post' ), 'title_meta' );

        if (($key = array_search('destination-item', $scope)) !== false) {
            unset($scope[$key]);
        }
		
		$title_meta_box = backpacktraveler_mikado_create_meta_box(
			array(
				'scope' => $scope,
				'title' => esc_html__( 'Title', 'backpacktraveler' ),
				'name'  => 'title_meta'
			)
		);
		
		backpacktraveler_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_show_title_area_meta',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Show Title Area', 'backpacktraveler' ),
				'description'   => esc_html__( 'Disabling this option will turn off page title area', 'backpacktraveler' ),
				'parent'        => $title_meta_box,
				'options'       => backpacktraveler_mikado_get_yes_no_select_array()
			)
		);
		
			$show_title_area_meta_container = backpacktraveler_mikado_add_admin_container(
				array(
					'parent'          => $title_meta_box,
					'name'            => 'mkdf_show_title_area_meta_container',
					'dependency' => array(
						'hide' => array(
							'mkdf_show_title_area_meta' => 'no'
						)
					)
				)
			);
		
				backpacktraveler_mikado_create_meta_box_field(
					array(
						'name'          => 'mkdf_title_area_type_meta',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Title Area Type', 'backpacktraveler' ),
						'description'   => esc_html__( 'Choose title type', 'backpacktraveler' ),
						'parent'        => $show_title_area_meta_container,
						'options'       => $title_type_meta_boxes
					)
				);
		
				backpacktraveler_mikado_create_meta_box_field(
					array(
						'name'          => 'mkdf_title_area_in_grid_meta',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Title Area In Grid', 'backpacktraveler' ),
						'description'   => esc_html__( 'Set title area content to be in grid', 'backpacktraveler' ),
						'options'       => backpacktraveler_mikado_get_yes_no_select_array(),
						'parent'        => $show_title_area_meta_container
					)
				);
		
				backpacktraveler_mikado_create_meta_box_field(
					array(
						'name'        => 'mkdf_title_area_height_meta',
						'type'        => 'text',
						'label'       => esc_html__( 'Height', 'backpacktraveler' ),
						'description' => esc_html__( 'Set a height for Title Area', 'backpacktraveler' ),
						'parent'      => $show_title_area_meta_container,
						'args'        => array(
							'col_width' => 2,
							'suffix'    => 'px'
						)
					)
				);
				
				backpacktraveler_mikado_create_meta_box_field(
					array(
						'name'        => 'mkdf_title_area_background_color_meta',
						'type'        => 'color',
						'label'       => esc_html__( 'Background Color', 'backpacktraveler' ),
						'description' => esc_html__( 'Choose a background color for title area', 'backpacktraveler' ),
						'parent'      => $show_title_area_meta_container
					)
				);
		
				backpacktraveler_mikado_create_meta_box_field(
					array(
						'name'        => 'mkdf_title_area_background_image_meta',
						'type'        => 'image',
						'label'       => esc_html__( 'Background Image', 'backpacktraveler' ),
						'description' => esc_html__( 'Choose an Image for title area', 'backpacktraveler' ),
						'parent'      => $show_title_area_meta_container
					)
				);
		
				backpacktraveler_mikado_create_meta_box_field(
					array(
						'name'          => 'mkdf_title_area_background_image_behavior_meta',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Background Image Behavior', 'backpacktraveler' ),
						'description'   => esc_html__( 'Choose title area background image behavior', 'backpacktraveler' ),
						'parent'        => $show_title_area_meta_container,
						'options'       => array(
							''                    => esc_html__( 'Default', 'backpacktraveler' ),
							'hide'                => esc_html__( 'Hide Image', 'backpacktraveler' ),
							'responsive'          => esc_html__( 'Enable Responsive Image', 'backpacktraveler' ),
							'responsive-disabled' => esc_html__( 'Disable Responsive Image', 'backpacktraveler' ),
							'parallax'            => esc_html__( 'Enable Parallax Image', 'backpacktraveler' ),
							'parallax-zoom-out'   => esc_html__( 'Enable Parallax With Zoom Out Image', 'backpacktraveler' ),
							'parallax-disabled'   => esc_html__( 'Disable Parallax Image', 'backpacktraveler' )
						)
					)
				);
				
				backpacktraveler_mikado_create_meta_box_field(
					array(
						'name'          => 'mkdf_title_area_vertical_alignment_meta',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Vertical Alignment', 'backpacktraveler' ),
						'description'   => esc_html__( 'Specify title area content vertical alignment', 'backpacktraveler' ),
						'parent'        => $show_title_area_meta_container,
						'options'       => array(
							''              => esc_html__( 'Default', 'backpacktraveler' ),
							'header-bottom' => esc_html__( 'From Bottom of Header', 'backpacktraveler' ),
							'window-top'    => esc_html__( 'From Window Top', 'backpacktraveler' )
						)
					)
				);
				
				backpacktraveler_mikado_create_meta_box_field(
					array(
						'name'          => 'mkdf_title_area_title_tag_meta',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Title Tag', 'backpacktraveler' ),
						'options'       => backpacktraveler_mikado_get_title_tag( true ),
						'parent'        => $show_title_area_meta_container
					)
				);
				
				backpacktraveler_mikado_create_meta_box_field(
					array(
						'name'        => 'mkdf_title_text_color_meta',
						'type'        => 'color',
						'label'       => esc_html__( 'Title Color', 'backpacktraveler' ),
						'description' => esc_html__( 'Choose a color for title text', 'backpacktraveler' ),
						'parent'      => $show_title_area_meta_container
					)
				);
				
				backpacktraveler_mikado_create_meta_box_field(
					array(
						'name'          => 'mkdf_title_area_subtitle_meta',
						'type'          => 'text',
						'default_value' => '',
						'label'         => esc_html__( 'Subtitle Text', 'backpacktraveler' ),
						'description'   => esc_html__( 'Enter your subtitle text', 'backpacktraveler' ),
						'parent'        => $show_title_area_meta_container,
						'args'          => array(
							'col_width' => 6
						)
					)
				);
		
				backpacktraveler_mikado_create_meta_box_field(
					array(
						'name'          => 'mkdf_title_area_subtitle_tag_meta',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Subtitle Tag', 'backpacktraveler' ),
						'options'       => backpacktraveler_mikado_get_title_tag( true, array( 'p' => 'p' ) ),
						'parent'        => $show_title_area_meta_container
					)
				);
				
				backpacktraveler_mikado_create_meta_box_field(
					array(
						'name'        => 'mkdf_subtitle_color_meta',
						'type'        => 'color',
						'label'       => esc_html__( 'Subtitle Color', 'backpacktraveler' ),
						'description' => esc_html__( 'Choose a color for subtitle text', 'backpacktraveler' ),
						'parent'      => $show_title_area_meta_container
					)
				);
		
		/***************** Additional Title Area Layout - start *****************/
		
		do_action( 'backpacktraveler_mikado_action_additional_title_area_meta_boxes', $show_title_area_meta_container );
		
		/***************** Additional Title Area Layout - end *****************/
		
	}
	
	add_action( 'backpacktraveler_mikado_action_meta_boxes_map', 'backpacktraveler_mikado_map_title_meta', 60 );
}