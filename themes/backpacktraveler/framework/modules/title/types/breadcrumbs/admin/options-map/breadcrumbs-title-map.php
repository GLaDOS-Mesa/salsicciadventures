<?php

if ( ! function_exists('backpacktraveler_mikado_breadcrumbs_title_type_options_map') ) {
	function backpacktraveler_mikado_breadcrumbs_title_type_options_map($panel_typography) {
		
		backpacktraveler_mikado_add_admin_section_title(
			array(
				'name'   => 'type_section_breadcrumbs',
				'title'  => esc_html__( 'Breadcrumbs', 'backpacktraveler' ),
				'parent' => $panel_typography
			)
		);
	
		$group_page_breadcrumbs_styles = backpacktraveler_mikado_add_admin_group(
			array(
				'name'        => 'group_page_breadcrumbs_styles',
				'title'       => esc_html__( 'Breadcrumbs', 'backpacktraveler' ),
				'description' => esc_html__( 'Define styles for page breadcrumbs', 'backpacktraveler' ),
				'parent'      => $panel_typography
			)
		);
	
			$row_page_breadcrumbs_styles_1 = backpacktraveler_mikado_add_admin_row(
				array(
					'name'   => 'row_page_breadcrumbs_styles_1',
					'parent' => $group_page_breadcrumbs_styles
				)
			);
		
				backpacktraveler_mikado_add_admin_field(
					array(
						'type'   => 'colorsimple',
						'name'   => 'page_breadcrumb_color',
						'label'  => esc_html__( 'Text Color', 'backpacktraveler' ),
						'parent' => $row_page_breadcrumbs_styles_1
					)
				);
				
				backpacktraveler_mikado_add_admin_field(
					array(
						'type'          => 'textsimple',
						'name'          => 'page_breadcrumb_font_size',
						'default_value' => '',
						'label'         => esc_html__( 'Font Size', 'backpacktraveler' ),
						'parent'        => $row_page_breadcrumbs_styles_1,
						'args'          => array(
							'suffix' => 'px'
						)
					)
				);
				
				backpacktraveler_mikado_add_admin_field(
					array(
						'type'          => 'textsimple',
						'name'          => 'page_breadcrumb_line_height',
						'default_value' => '',
						'label'         => esc_html__( 'Line Height', 'backpacktraveler' ),
						'parent'        => $row_page_breadcrumbs_styles_1,
						'args'          => array(
							'suffix' => 'px'
						)
					)
				);
				
				backpacktraveler_mikado_add_admin_field(
					array(
						'type'          => 'selectblanksimple',
						'name'          => 'page_breadcrumb_text_transform',
						'default_value' => '',
						'label'         => esc_html__( 'Text Transform', 'backpacktraveler' ),
						'options'       => backpacktraveler_mikado_get_text_transform_array(),
						'parent'        => $row_page_breadcrumbs_styles_1
					)
				);
	
			$row_page_breadcrumbs_styles_2 = backpacktraveler_mikado_add_admin_row(
				array(
					'name'   => 'row_page_breadcrumbs_styles_2',
					'parent' => $group_page_breadcrumbs_styles,
					'next'   => true
				)
			);
	
				backpacktraveler_mikado_add_admin_field(
					array(
						'type'          => 'fontsimple',
						'name'          => 'page_breadcrumb_google_fonts',
						'default_value' => '-1',
						'label'         => esc_html__( 'Font Family', 'backpacktraveler' ),
						'parent'        => $row_page_breadcrumbs_styles_2
					)
				);
				
				backpacktraveler_mikado_add_admin_field(
					array(
						'type'          => 'selectblanksimple',
						'name'          => 'page_breadcrumb_font_style',
						'default_value' => '',
						'label'         => esc_html__( 'Font Style', 'backpacktraveler' ),
						'options'       => backpacktraveler_mikado_get_font_style_array(),
						'parent'        => $row_page_breadcrumbs_styles_2
					)
				);
				
				backpacktraveler_mikado_add_admin_field(
					array(
						'type'          => 'selectblanksimple',
						'name'          => 'page_breadcrumb_font_weight',
						'default_value' => '',
						'label'         => esc_html__( 'Font Weight', 'backpacktraveler' ),
						'options'       => backpacktraveler_mikado_get_font_weight_array(),
						'parent'        => $row_page_breadcrumbs_styles_2
					)
				);
				
				backpacktraveler_mikado_add_admin_field(
					array(
						'type'          => 'textsimple',
						'name'          => 'page_breadcrumb_letter_spacing',
						'default_value' => '',
						'label'         => esc_html__( 'Letter Spacing', 'backpacktraveler' ),
						'parent'        => $row_page_breadcrumbs_styles_2,
						'args'          => array(
							'suffix' => 'px'
						)
					)
				);
	
			$row_page_breadcrumbs_styles_3 = backpacktraveler_mikado_add_admin_row(
				array(
					'name'   => 'row_page_breadcrumbs_styles_3',
					'parent' => $group_page_breadcrumbs_styles,
					'next'   => true
				)
			);
		
				backpacktraveler_mikado_add_admin_field(
					array(
						'type'   => 'colorsimple',
						'name'   => 'page_breadcrumb_hovercolor',
						'label'  => esc_html__( 'Hover/Active Text Color', 'backpacktraveler' ),
						'parent' => $row_page_breadcrumbs_styles_3
					)
				);
    }

	add_action( 'backpacktraveler_mikado_action_additional_title_typography_options_map', 'backpacktraveler_mikado_breadcrumbs_title_type_options_map');
}