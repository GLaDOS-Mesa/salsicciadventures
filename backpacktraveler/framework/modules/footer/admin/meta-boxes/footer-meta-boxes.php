<?php

if ( ! function_exists( 'backpacktraveler_mikado_map_footer_meta' ) ) {
	function backpacktraveler_mikado_map_footer_meta() {
		
		$footer_meta_box = backpacktraveler_mikado_create_meta_box(
			array(
				'scope' => apply_filters( 'backpacktraveler_mikado_filter_set_scope_for_meta_boxes', array( 'page', 'post' ), 'footer_meta' ),
				'title' => esc_html__( 'Footer', 'backpacktraveler' ),
				'name'  => 'footer_meta'
			)
		);
		
		backpacktraveler_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_disable_footer_meta',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Disable Footer for this Page', 'backpacktraveler' ),
				'description'   => esc_html__( 'Enabling this option will hide footer on this page', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_get_yes_no_select_array(),
				'parent'        => $footer_meta_box
			)
		);
		
		$show_footer_meta_container = backpacktraveler_mikado_add_admin_container(
			array(
				'name'       => 'mkdf_show_footer_meta_container',
				'parent'     => $footer_meta_box,
				'dependency' => array(
					'hide' => array(
						'mkdf_disable_footer_meta' => 'yes'
					)
				)
			)
		);
		
			backpacktraveler_mikado_create_meta_box_field(
				array(
					'name'          => 'mkdf_footer_in_grid_meta',
					'type'          => 'select',
					'default_value' => '',
					'label'         => esc_html__( 'Footer in Grid', 'backpacktraveler' ),
					'description'   => esc_html__( 'Enabling this option will place Footer content in grid', 'backpacktraveler' ),
					'options'       => backpacktraveler_mikado_get_yes_no_select_array(),
					'parent'        => $show_footer_meta_container
				)
			);
			
			backpacktraveler_mikado_create_meta_box_field(
				array(
					'name'          => 'mkdf_uncovering_footer_meta',
					'type'          => 'select',
					'default_value' => '',
					'label'         => esc_html__( 'Uncovering Footer', 'backpacktraveler' ),
					'description'   => esc_html__( 'Enabling this option will make Footer gradually appear on scroll', 'backpacktraveler' ),
					'options'       => backpacktraveler_mikado_get_yes_no_select_array(),
					'parent'        => $show_footer_meta_container
				)
			);
		
			backpacktraveler_mikado_create_meta_box_field(
				array(
					'name'          => 'mkdf_show_footer_top_meta',
					'type'          => 'select',
					'default_value' => '',
					'label'         => esc_html__( 'Show Footer Top', 'backpacktraveler' ),
					'description'   => esc_html__( 'Enabling this option will show Footer Top area', 'backpacktraveler' ),
					'options'       => backpacktraveler_mikado_get_yes_no_select_array(),
					'parent'        => $show_footer_meta_container
				)
			);
		
			$footer_top_styles_group = backpacktraveler_mikado_add_admin_group(
				array(
					'name'        => 'footer_top_styles_group',
					'title'       => esc_html__( 'Footer Top Styles', 'backpacktraveler' ),
					'description' => esc_html__( 'Define style for footer top area', 'backpacktraveler' ),
					'parent'      => $show_footer_meta_container,
					'dependency'  => array(
						'show' => array(
							'mkdf_show_footer_top_meta' => array( '', 'yes' )
						)
					)
				)
			);
			
			$footer_top_styles_row_1 = backpacktraveler_mikado_add_admin_row(
				array(
					'name'   => 'footer_top_styles_row_1',
					'parent' => $footer_top_styles_group
				)
			);
		
				backpacktraveler_mikado_create_meta_box_field(
					array(
						'name'   => 'mkdf_footer_top_background_color_meta',
						'type'   => 'colorsimple',
						'label'  => esc_html__( 'Background Color', 'backpacktraveler' ),
						'parent' => $footer_top_styles_row_1
					)
				);
		
				backpacktraveler_mikado_create_meta_box_field(
					array(
						'name'   => 'mkdf_footer_top_border_color_meta',
						'type'   => 'colorsimple',
						'label'  => esc_html__( 'Border Color', 'backpacktraveler' ),
						'parent' => $footer_top_styles_row_1
					)
				);
		
				backpacktraveler_mikado_create_meta_box_field(
					array(
						'name'   => 'mkdf_footer_top_border_width_meta',
						'type'   => 'textsimple',
						'label'  => esc_html__( 'Border Width', 'backpacktraveler' ),
						'parent' => $footer_top_styles_row_1,
						'args'   => array(
							'suffix' => 'px'
						)
					)
				);
			
			backpacktraveler_mikado_create_meta_box_field(
				array(
					'name'          => 'mkdf_show_footer_bottom_meta',
					'type'          => 'select',
					'default_value' => '',
					'label'         => esc_html__( 'Show Footer Bottom', 'backpacktraveler' ),
					'description'   => esc_html__( 'Enabling this option will show Footer Bottom area', 'backpacktraveler' ),
					'options'       => backpacktraveler_mikado_get_yes_no_select_array(),
					'parent'        => $show_footer_meta_container
				)
			);
		
			$footer_bottom_styles_group = backpacktraveler_mikado_add_admin_group(
				array(
					'name'        => 'footer_bottom_styles_group',
					'title'       => esc_html__( 'Footer Bottom Styles', 'backpacktraveler' ),
					'description' => esc_html__( 'Define style for footer bottom area', 'backpacktraveler' ),
					'parent'      => $show_footer_meta_container,
					'dependency'  => array(
						'show' => array(
							'mkdf_show_footer_bottom_meta' => array( '', 'yes' )
						)
					)
				)
			);
			
			$footer_bottom_styles_row_1 = backpacktraveler_mikado_add_admin_row(
				array(
					'name'   => 'footer_bottom_styles_row_1',
					'parent' => $footer_bottom_styles_group
				)
			);
			
				backpacktraveler_mikado_create_meta_box_field(
					array(
						'name'   => 'mkdf_footer_bottom_background_color_meta',
						'type'   => 'colorsimple',
						'label'  => esc_html__( 'Background Color', 'backpacktraveler' ),
						'parent' => $footer_bottom_styles_row_1
					)
				);
				
				backpacktraveler_mikado_create_meta_box_field(
					array(
						'name'   => 'mkdf_footer_bottom_border_color_meta',
						'type'   => 'colorsimple',
						'label'  => esc_html__( 'Border Color', 'backpacktraveler' ),
						'parent' => $footer_bottom_styles_row_1
					)
				);
				
				backpacktraveler_mikado_create_meta_box_field(
					array(
						'name'   => 'mkdf_footer_bottom_border_width_meta',
						'type'   => 'textsimple',
						'label'  => esc_html__( 'Border Width', 'backpacktraveler' ),
						'parent' => $footer_bottom_styles_row_1,
						'args'   => array(
							'suffix' => 'px'
						)
					)
				);
	}
	
	add_action( 'backpacktraveler_mikado_action_meta_boxes_map', 'backpacktraveler_mikado_map_footer_meta', 70 );
}