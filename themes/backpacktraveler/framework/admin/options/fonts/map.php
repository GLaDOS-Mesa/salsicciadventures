<?php

if ( ! function_exists( 'backpacktraveler_mikado_fonts_options_map' ) ) {
	/**
	 * Font options page
	 */
	function backpacktraveler_mikado_fonts_options_map() {
		
		backpacktraveler_mikado_add_admin_page(
			array(
				'slug'  => '_fonts_page',
				'title' => esc_html__( 'Fonts', 'backpacktraveler' ),
				'icon'  => 'fa fa-font'
			)
		);
		
		/**
		 * Headings
		 */
		$panel_headings = backpacktraveler_mikado_add_admin_panel(
			array(
				'page'  => '_fonts_page',
				'name'  => 'panel_headings',
				'title' => esc_html__( 'Headings', 'backpacktraveler' )
			)
		);
		
		//H1
		$group_heading_h1 = backpacktraveler_mikado_add_admin_group(
			array(
				'name'        => 'group_heading_h1',
				'title'       => esc_html__( 'H1 Style', 'backpacktraveler' ),
				'description' => esc_html__( 'Define styles for h1 heading', 'backpacktraveler' ),
				'parent'      => $panel_headings
			)
		);
		
		$row_heading_h1_1 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_heading_h1_1',
				'parent' => $group_heading_h1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'colorsimple',
				'name'          => 'h1_color',
				'default_value' => '',
				'label'         => esc_html__( 'Text Color', 'backpacktraveler' ),
				'parent'        => $row_heading_h1_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h1_font_size',
				'default_value' => '',
				'label'         => esc_html__( 'Font Size', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_heading_h1_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h1_line_height',
				'default_value' => '',
				'label'         => esc_html__( 'Line Height', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_heading_h1_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'selectblanksimple',
				'name'          => 'h1_text_transform',
				'default_value' => '',
				'label'         => esc_html__( 'Text Transform', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_get_text_transform_array(),
				'parent'        => $row_heading_h1_1
			)
		);
		
		$row_heading_h1_2 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_heading_h1_2',
				'parent' => $group_heading_h1,
				'next'   => true
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'fontsimple',
				'name'          => 'h1_google_fonts',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'backpacktraveler' ),
				'parent'        => $row_heading_h1_2
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'selectblanksimple',
				'name'          => 'h1_font_style',
				'default_value' => '',
				'label'         => esc_html__( 'Font Style', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_get_font_style_array(),
				'parent'        => $row_heading_h1_2
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'selectblanksimple',
				'name'          => 'h1_font_weight',
				'default_value' => '',
				'label'         => esc_html__( 'Font Weight', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_get_font_weight_array(),
				'parent'        => $row_heading_h1_2
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h1_letter_spacing',
				'default_value' => '',
				'label'         => esc_html__( 'Letter Spacing', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_heading_h1_2
			)
		);
		
		$row_heading_h1_3 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_heading_h1_3',
				'parent' => $group_heading_h1,
				'next'   => true
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h1_margin_top',
				'default_value' => '',
				'label'         => esc_html__( 'Margin Top (px)', 'backpacktraveler' ),
				'parent'        => $row_heading_h1_3
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h1_margin_bottom',
				'default_value' => '',
				'label'         => esc_html__( 'Margin Bottom (px)', 'backpacktraveler' ),
				'parent'        => $row_heading_h1_3
			)
		);
		
		//H2
		$group_heading_h2 = backpacktraveler_mikado_add_admin_group(
			array(
				'name'        => 'group_heading_h2',
				'title'       => esc_html__( 'H2 Style', 'backpacktraveler' ),
				'description' => esc_html__( 'Define styles for h2 heading', 'backpacktraveler' ),
				'parent'      => $panel_headings
			)
		);
		
		$row_heading_h2_1 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_heading_h2_1',
				'parent' => $group_heading_h2
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'colorsimple',
				'name'          => 'h2_color',
				'default_value' => '',
				'label'         => esc_html__( 'Text Color', 'backpacktraveler' ),
				'parent'        => $row_heading_h2_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h2_font_size',
				'default_value' => '',
				'label'         => esc_html__( 'Font Size', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_heading_h2_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h2_line_height',
				'default_value' => '',
				'label'         => esc_html__( 'Line Height', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_heading_h2_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'selectblanksimple',
				'name'          => 'h2_text_transform',
				'default_value' => '',
				'label'         => esc_html__( 'Text Transform', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_get_text_transform_array(),
				'parent'        => $row_heading_h2_1
			)
		);
		
		$row_heading_h2_2 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_heading_h2_2',
				'parent' => $group_heading_h2,
				'next'   => true
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'fontsimple',
				'name'          => 'h2_google_fonts',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'backpacktraveler' ),
				'parent'        => $row_heading_h2_2
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'selectblanksimple',
				'name'          => 'h2_font_style',
				'default_value' => '',
				'label'         => esc_html__( 'Font Style', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_get_font_style_array(),
				'parent'        => $row_heading_h2_2
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'selectblanksimple',
				'name'          => 'h2_font_weight',
				'default_value' => '',
				'label'         => esc_html__( 'Font Weight', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_get_font_weight_array(),
				'parent'        => $row_heading_h2_2
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h2_letter_spacing',
				'default_value' => '',
				'label'         => esc_html__( 'Letter Spacing', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_heading_h2_2
			)
		);
		
		$row_heading_h2_3 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_heading_h2_3',
				'parent' => $group_heading_h2,
				'next'   => true
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h2_margin_top',
				'default_value' => '',
				'label'         => esc_html__( 'Margin Top (px)', 'backpacktraveler' ),
				'parent'        => $row_heading_h2_3
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h2_margin_bottom',
				'default_value' => '',
				'label'         => esc_html__( 'Margin Bottom (px)', 'backpacktraveler' ),
				'parent'        => $row_heading_h2_3
			)
		);
		
		//H3
		$group_heading_h3 = backpacktraveler_mikado_add_admin_group(
			array(
				'name'        => 'group_heading_h3',
				'title'       => esc_html__( 'H3 Style', 'backpacktraveler' ),
				'description' => esc_html__( 'Define styles for h3 heading', 'backpacktraveler' ),
				'parent'      => $panel_headings
			)
		);
		
		$row_heading_h3_1 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_heading_h3_1',
				'parent' => $group_heading_h3
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'colorsimple',
				'name'          => 'h3_color',
				'default_value' => '',
				'label'         => esc_html__( 'Text Color', 'backpacktraveler' ),
				'parent'        => $row_heading_h3_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h3_font_size',
				'default_value' => '',
				'label'         => esc_html__( 'Font Size', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_heading_h3_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h3_line_height',
				'default_value' => '',
				'label'         => esc_html__( 'Line Height', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_heading_h3_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'selectblanksimple',
				'name'          => 'h3_text_transform',
				'default_value' => '',
				'label'         => esc_html__( 'Text Transform', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_get_text_transform_array(),
				'parent'        => $row_heading_h3_1
			)
		);
		
		$row_heading_h3_2 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_heading_h3_2',
				'parent' => $group_heading_h3,
				'next'   => true
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'fontsimple',
				'name'          => 'h3_google_fonts',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'backpacktraveler' ),
				'parent'        => $row_heading_h3_2
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'selectblanksimple',
				'name'          => 'h3_font_style',
				'default_value' => '',
				'label'         => esc_html__( 'Font Style', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_get_font_style_array(),
				'parent'        => $row_heading_h3_2
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'selectblanksimple',
				'name'          => 'h3_font_weight',
				'default_value' => '',
				'label'         => esc_html__( 'Font Weight', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_get_font_weight_array(),
				'parent'        => $row_heading_h3_2
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h3_letter_spacing',
				'default_value' => '',
				'label'         => esc_html__( 'Letter Spacing', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_heading_h3_2
			)
		);
		
		$row_heading_h3_3 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_heading_h3_3',
				'parent' => $group_heading_h3,
				'next'   => true
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h3_margin_top',
				'default_value' => '',
				'label'         => esc_html__( 'Margin Top (px)', 'backpacktraveler' ),
				'parent'        => $row_heading_h3_3
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h3_margin_bottom',
				'default_value' => '',
				'label'         => esc_html__( 'Margin Bottom (px)', 'backpacktraveler' ),
				'parent'        => $row_heading_h3_3
			)
		);
		
		//H4
		$group_heading_h4 = backpacktraveler_mikado_add_admin_group(
			array(
				'name'        => 'group_heading_h4',
				'title'       => esc_html__( 'H4 Style', 'backpacktraveler' ),
				'description' => esc_html__( 'Define styles for h4 heading', 'backpacktraveler' ),
				'parent'      => $panel_headings
			)
		);
		
		$row_heading_h4_1 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_heading_h4_1',
				'parent' => $group_heading_h4
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'colorsimple',
				'name'          => 'h4_color',
				'default_value' => '',
				'label'         => esc_html__( 'Text Color', 'backpacktraveler' ),
				'parent'        => $row_heading_h4_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h4_font_size',
				'default_value' => '',
				'label'         => esc_html__( 'Font Size', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_heading_h4_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h4_line_height',
				'default_value' => '',
				'label'         => esc_html__( 'Line Height', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_heading_h4_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'selectblanksimple',
				'name'          => 'h4_text_transform',
				'default_value' => '',
				'label'         => esc_html__( 'Text Transform', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_get_text_transform_array(),
				'parent'        => $row_heading_h4_1
			)
		);
		
		$row_heading_h4_2 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_heading_h4_2',
				'parent' => $group_heading_h4,
				'next'   => true
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'fontsimple',
				'name'          => 'h4_google_fonts',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'backpacktraveler' ),
				'parent'        => $row_heading_h4_2
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'selectblanksimple',
				'name'          => 'h4_font_style',
				'default_value' => '',
				'label'         => esc_html__( 'Font Style', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_get_font_style_array(),
				'parent'        => $row_heading_h4_2
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'selectblanksimple',
				'name'          => 'h4_font_weight',
				'default_value' => '',
				'label'         => esc_html__( 'Font Weight', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_get_font_weight_array(),
				'parent'        => $row_heading_h4_2
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h4_letter_spacing',
				'default_value' => '',
				'label'         => esc_html__( 'Letter Spacing', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_heading_h4_2
			)
		);
		
		$row_heading_h4_3 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_heading_h4_3',
				'parent' => $group_heading_h4,
				'next'   => true
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h4_margin_top',
				'default_value' => '',
				'label'         => esc_html__( 'Margin Top (px)', 'backpacktraveler' ),
				'parent'        => $row_heading_h4_3
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h4_margin_bottom',
				'default_value' => '',
				'label'         => esc_html__( 'Margin Bottom (px)', 'backpacktraveler' ),
				'parent'        => $row_heading_h4_3
			)
		);
		
		//H5
		$group_heading_h5 = backpacktraveler_mikado_add_admin_group(
			array(
				'name'        => 'group_heading_h5',
				'title'       => esc_html__( 'H5 Style', 'backpacktraveler' ),
				'description' => esc_html__( 'Define styles for h5 heading', 'backpacktraveler' ),
				'parent'      => $panel_headings
			)
		);
		
		$row_heading_h5_1 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_heading_h5_1',
				'parent' => $group_heading_h5
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'colorsimple',
				'name'          => 'h5_color',
				'default_value' => '',
				'label'         => esc_html__( 'Text Color', 'backpacktraveler' ),
				'parent'        => $row_heading_h5_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h5_font_size',
				'default_value' => '',
				'label'         => esc_html__( 'Font Size', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_heading_h5_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h5_line_height',
				'default_value' => '',
				'label'         => esc_html__( 'Line Height', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_heading_h5_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'selectblanksimple',
				'name'          => 'h5_text_transform',
				'default_value' => '',
				'label'         => esc_html__( 'Text Transform', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_get_text_transform_array(),
				'parent'        => $row_heading_h5_1
			)
		);
		
		$row_heading_h5_2 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_heading_h5_2',
				'parent' => $group_heading_h5,
				'next'   => true
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'fontsimple',
				'name'          => 'h5_google_fonts',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'backpacktraveler' ),
				'parent'        => $row_heading_h5_2
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'selectblanksimple',
				'name'          => 'h5_font_style',
				'default_value' => '',
				'label'         => esc_html__( 'Font Style', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_get_font_style_array(),
				'parent'        => $row_heading_h5_2
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'selectblanksimple',
				'name'          => 'h5_font_weight',
				'default_value' => '',
				'label'         => esc_html__( 'Font Weight', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_get_font_weight_array(),
				'parent'        => $row_heading_h5_2
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h5_letter_spacing',
				'default_value' => '',
				'label'         => esc_html__( 'Letter Spacing', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_heading_h5_2
			)
		);
		
		$row_heading_h5_3 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_heading_h5_3',
				'parent' => $group_heading_h5,
				'next'   => true
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h5_margin_top',
				'default_value' => '',
				'label'         => esc_html__( 'Margin Top (px)', 'backpacktraveler' ),
				'parent'        => $row_heading_h5_3
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h5_margin_bottom',
				'default_value' => '',
				'label'         => esc_html__( 'Margin Bottom (px)', 'backpacktraveler' ),
				'parent'        => $row_heading_h5_3
			)
		);
		
		//H6
		$group_heading_h6 = backpacktraveler_mikado_add_admin_group(
			array(
				'name'        => 'group_heading_h6',
				'title'       => esc_html__( 'H6 Style', 'backpacktraveler' ),
				'description' => esc_html__( 'Define styles for h6 heading', 'backpacktraveler' ),
				'parent'      => $panel_headings
			)
		);
		
		$row_heading_h6_1 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_heading_h6_1',
				'parent' => $group_heading_h6
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'colorsimple',
				'name'          => 'h6_color',
				'default_value' => '',
				'label'         => esc_html__( 'Text Color', 'backpacktraveler' ),
				'parent'        => $row_heading_h6_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h6_font_size',
				'default_value' => '',
				'label'         => esc_html__( 'Font Size', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_heading_h6_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h6_line_height',
				'default_value' => '',
				'label'         => esc_html__( 'Line Height', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_heading_h6_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'selectblanksimple',
				'name'          => 'h6_text_transform',
				'default_value' => '',
				'label'         => esc_html__( 'Text Transform', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_get_text_transform_array(),
				'parent'        => $row_heading_h6_1
			)
		);
		
		$row_heading_h6_2 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_heading_h6_2',
				'parent' => $group_heading_h6,
				'next'   => true
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'fontsimple',
				'name'          => 'h6_google_fonts',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'backpacktraveler' ),
				'parent'        => $row_heading_h6_2
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'selectblanksimple',
				'name'          => 'h6_font_style',
				'default_value' => '',
				'label'         => esc_html__( 'Font Style', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_get_font_style_array(),
				'parent'        => $row_heading_h6_2
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'selectblanksimple',
				'name'          => 'h6_font_weight',
				'default_value' => '',
				'label'         => esc_html__( 'Font Weight', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_get_font_weight_array(),
				'parent'        => $row_heading_h6_2
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h6_letter_spacing',
				'default_value' => '',
				'label'         => esc_html__( 'Letter Spacing', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_heading_h6_2
			)
		);
		
		$row_heading_h6_3 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_heading_h6_3',
				'parent' => $group_heading_h6,
				'next'   => true
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h6_margin_top',
				'default_value' => '',
				'label'         => esc_html__( 'Margin Top (px)', 'backpacktraveler' ),
				'parent'        => $row_heading_h6_3
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h6_margin_bottom',
				'default_value' => '',
				'label'         => esc_html__( 'Margin Bottom (px)', 'backpacktraveler' ),
				'parent'        => $row_heading_h6_3
			)
		);
		
		/**
		 * Headings Responsive (Tablet Landscape View)
		 */
		$panel_responsive_headings3 = backpacktraveler_mikado_add_admin_panel(
			array(
				'page'  => '_fonts_page',
				'name'  => 'panel_responsive_headings3',
				'title' => esc_html__( 'Headings Responsive (Tablet Landscape View)', 'backpacktraveler' )
			)
		);
		
		//H1
		$group_responsive3_heading_h1 = backpacktraveler_mikado_add_admin_group(
			array(
				'name'        => 'group_responsive3_heading_h1',
				'title'       => esc_html__( 'H1 Responsive Style', 'backpacktraveler' ),
				'description' => esc_html__( 'Define responsive styles for h1 heading', 'backpacktraveler' ),
				'parent'      => $panel_responsive_headings3
			)
		);
		
		$row_responsive_heading_h1_3 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_responsive_heading_h1_3',
				'parent' => $group_responsive3_heading_h1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h1_responsive_font_size_3',
				'default_value' => '',
				'label'         => esc_html__( 'Font Size', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive_heading_h1_3
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h1_responsive_line_height_3',
				'default_value' => '',
				'label'         => esc_html__( 'Line Height', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive_heading_h1_3
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h1_responsive_letter_spacing_3',
				'default_value' => '',
				'label'         => esc_html__( 'Letter Spacing', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive_heading_h1_3
			)
		);
		
		//H2
		$group_responsive3_heading_h2 = backpacktraveler_mikado_add_admin_group(
			array(
				'name'        => 'group_responsive3_heading_h2',
				'title'       => esc_html__( 'H2 Responsive Style', 'backpacktraveler' ),
				'description' => esc_html__( 'Define responsive styles for h2 heading', 'backpacktraveler' ),
				'parent'      => $panel_responsive_headings3
			)
		);
		
		$row_responsive_heading_h2_3 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_responsive_heading_h2_3',
				'parent' => $group_responsive3_heading_h2
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h2_responsive_font_size_3',
				'default_value' => '',
				'label'         => esc_html__( 'Font Size', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive_heading_h2_3
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h2_responsive_line_height_3',
				'default_value' => '',
				'label'         => esc_html__( 'Line Height', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive_heading_h2_3
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h2_responsive_letter_spacing_3',
				'default_value' => '',
				'label'         => esc_html__( 'Letter Spacing', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive_heading_h2_3
			)
		);
		
		//H3
		$group_responsive3_heading_h3 = backpacktraveler_mikado_add_admin_group(
			array(
				'name'        => 'group_responsive3_heading_h3',
				'title'       => esc_html__( 'H3 Responsive Style', 'backpacktraveler' ),
				'description' => esc_html__( 'Define responsive styles for h3 heading', 'backpacktraveler' ),
				'parent'      => $panel_responsive_headings3
			)
		);
		
		$row_responsive_heading_h3_3 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_responsive_heading_h3_3',
				'parent' => $group_responsive3_heading_h3
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h3_responsive_font_size_3',
				'default_value' => '',
				'label'         => esc_html__( 'Font Size', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive_heading_h3_3
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h3_responsive_line_height_3',
				'default_value' => '',
				'label'         => esc_html__( 'Line Height', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive_heading_h3_3
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h3_responsive_letter_spacing_3',
				'default_value' => '',
				'label'         => esc_html__( 'Letter Spacing', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive_heading_h3_3
			)
		);
		
		//H4
		$group_responsive3_heading_h4 = backpacktraveler_mikado_add_admin_group(
			array(
				'name'        => 'group_responsive3_heading_h4',
				'title'       => esc_html__( 'H4 Responsive Style', 'backpacktraveler' ),
				'description' => esc_html__( 'Define responsive styles for h4 heading', 'backpacktraveler' ),
				'parent'      => $panel_responsive_headings3
			)
		);
		
		$row_responsive_heading_h4_3 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_responsive_heading_h4_3',
				'parent' => $group_responsive3_heading_h4
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h4_responsive_font_size_3',
				'default_value' => '',
				'label'         => esc_html__( 'Font Size', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive_heading_h4_3
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h4_responsive_line_height_3',
				'default_value' => '',
				'label'         => esc_html__( 'Line Height', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive_heading_h4_3
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h4_responsive_letter_spacing_3',
				'default_value' => '',
				'label'         => esc_html__( 'Letter Spacing', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive_heading_h4_3
			)
		);
		
		//H5
		$group_responsive3_heading_h5 = backpacktraveler_mikado_add_admin_group(
			array(
				'name'        => 'group_responsive3_heading_h5',
				'title'       => esc_html__( 'H5 Responsive Style', 'backpacktraveler' ),
				'description' => esc_html__( 'Define responsive styles for h5 heading', 'backpacktraveler' ),
				'parent'      => $panel_responsive_headings3
			)
		);
		
		$row_responsive_heading_h5_3 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_responsive_heading_h5_3',
				'parent' => $group_responsive3_heading_h5
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h5_responsive_font_size_3',
				'default_value' => '',
				'label'         => esc_html__( 'Font Size', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive_heading_h5_3
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h5_responsive_line_height_3',
				'default_value' => '',
				'label'         => esc_html__( 'Line Height', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive_heading_h5_3
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h5_responsive_letter_spacing_3',
				'default_value' => '',
				'label'         => esc_html__( 'Letter Spacing', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive_heading_h5_3
			)
		);
		
		//H6
		$group_responsive3_heading_h6 = backpacktraveler_mikado_add_admin_group(
			array(
				'name'        => 'group_responsive3_heading_h6',
				'title'       => esc_html__( 'H6 Responsive Style', 'backpacktraveler' ),
				'description' => esc_html__( 'Define responsive styles for h6 heading', 'backpacktraveler' ),
				'parent'      => $panel_responsive_headings3
			)
		);
		
		$row_responsive_heading_h6_3 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_responsive_heading_h6_3',
				'parent' => $group_responsive3_heading_h6
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h6_responsive_font_size_3',
				'default_value' => '',
				'label'         => esc_html__( 'Font Size', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive_heading_h6_3
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h6_responsive_line_height_3',
				'default_value' => '',
				'label'         => esc_html__( 'Line Height', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive_heading_h6_3
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h6_responsive_letter_spacing_3',
				'default_value' => '',
				'label'         => esc_html__( 'Letter Spacing', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive_heading_h6_3
			)
		);
		
		/**
		 * Headings Responsive (Tablet Portrait View)
		 */
		$panel_responsive_headings = backpacktraveler_mikado_add_admin_panel(
			array(
				'page'  => '_fonts_page',
				'name'  => 'panel_responsive_headings',
				'title' => esc_html__( 'Headings Responsive (Tablet Portrait View)', 'backpacktraveler' )
			)
		);
		
		//H1
		$group_responsive_heading_h1 = backpacktraveler_mikado_add_admin_group(
			array(
				'name'        => 'group_responsive_heading_h1',
				'title'       => esc_html__( 'H1 Responsive Style', 'backpacktraveler' ),
				'description' => esc_html__( 'Define responsive styles for h1 heading', 'backpacktraveler' ),
				'parent'      => $panel_responsive_headings
			)
		);
		
		$row_responsive_heading_h1_1 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_responsive_heading_h1_1',
				'parent' => $group_responsive_heading_h1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h1_responsive_font_size',
				'default_value' => '',
				'label'         => esc_html__( 'Font Size', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive_heading_h1_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h1_responsive_line_height',
				'default_value' => '',
				'label'         => esc_html__( 'Line Height', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive_heading_h1_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h1_responsive_letter_spacing',
				'default_value' => '',
				'label'         => esc_html__( 'Letter Spacing', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive_heading_h1_1
			)
		);
		
		//H2
		$group_responsive_heading_h2 = backpacktraveler_mikado_add_admin_group(
			array(
				'name'        => 'group_responsive_heading_h2',
				'title'       => esc_html__( 'H2 Responsive Style', 'backpacktraveler' ),
				'description' => esc_html__( 'Define responsive styles for h2 heading', 'backpacktraveler' ),
				'parent'      => $panel_responsive_headings
			)
		);
		
		$row_responsive_heading_h2_1 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_responsive_heading_h2_1',
				'parent' => $group_responsive_heading_h2
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h2_responsive_font_size',
				'default_value' => '',
				'label'         => esc_html__( 'Font Size', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive_heading_h2_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h2_responsive_line_height',
				'default_value' => '',
				'label'         => esc_html__( 'Line Height', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive_heading_h2_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h2_responsive_letter_spacing',
				'default_value' => '',
				'label'         => esc_html__( 'Letter Spacing', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive_heading_h2_1
			)
		);
		
		//H3
		$group_responsive_heading_h3 = backpacktraveler_mikado_add_admin_group(
			array(
				'name'        => 'group_responsive_heading_h3',
				'title'       => esc_html__( 'H3 Responsive Style', 'backpacktraveler' ),
				'description' => esc_html__( 'Define responsive styles for h3 heading', 'backpacktraveler' ),
				'parent'      => $panel_responsive_headings
			)
		);
		
		$row_responsive_heading_h3_1 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_responsive_heading_h3_1',
				'parent' => $group_responsive_heading_h3
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h3_responsive_font_size',
				'default_value' => '',
				'label'         => esc_html__( 'Font Size', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive_heading_h3_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h3_responsive_line_height',
				'default_value' => '',
				'label'         => esc_html__( 'Line Height', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive_heading_h3_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h3_responsive_letter_spacing',
				'default_value' => '',
				'label'         => esc_html__( 'Letter Spacing', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive_heading_h3_1
			)
		);
		
		//H4
		$group_responsive_heading_h4 = backpacktraveler_mikado_add_admin_group(
			array(
				'name'        => 'group_responsive_heading_h4',
				'title'       => esc_html__( 'H4 Responsive Style', 'backpacktraveler' ),
				'description' => esc_html__( 'Define responsive styles for h4 heading', 'backpacktraveler' ),
				'parent'      => $panel_responsive_headings
			)
		);
		
		$row_responsive_heading_h4_1 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_responsive_heading_h4_1',
				'parent' => $group_responsive_heading_h4
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h4_responsive_font_size',
				'default_value' => '',
				'label'         => esc_html__( 'Font Size', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive_heading_h4_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h4_responsive_line_height',
				'default_value' => '',
				'label'         => esc_html__( 'Line Height', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive_heading_h4_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h4_responsive_letter_spacing',
				'default_value' => '',
				'label'         => esc_html__( 'Letter Spacing', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive_heading_h4_1
			)
		);
		
		//H5
		$group_responsive_heading_h5 = backpacktraveler_mikado_add_admin_group(
			array(
				'name'        => 'group_responsive_heading_h5',
				'title'       => esc_html__( 'H5 Responsive Style', 'backpacktraveler' ),
				'description' => esc_html__( 'Define responsive styles for h5 heading', 'backpacktraveler' ),
				'parent'      => $panel_responsive_headings
			)
		);
		
		$row_responsive_heading_h5_1 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_responsive_heading_h5_1',
				'parent' => $group_responsive_heading_h5
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h5_responsive_font_size',
				'default_value' => '',
				'label'         => esc_html__( 'Font Size', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive_heading_h5_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h5_responsive_line_height',
				'default_value' => '',
				'label'         => esc_html__( 'Line Height', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive_heading_h5_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h5_responsive_letter_spacing',
				'default_value' => '',
				'label'         => esc_html__( 'Letter Spacing', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive_heading_h5_1
			)
		);
		
		//H6
		$group_responsive_heading_h6 = backpacktraveler_mikado_add_admin_group(
			array(
				'name'        => 'group_responsive_heading_h6',
				'title'       => esc_html__( 'H6 Responsive Style', 'backpacktraveler' ),
				'description' => esc_html__( 'Define responsive styles for h6 heading', 'backpacktraveler' ),
				'parent'      => $panel_responsive_headings
			)
		);
		
		$row_responsive_heading_h6_1 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_responsive_heading_h6_1',
				'parent' => $group_responsive_heading_h6
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h6_responsive_font_size',
				'default_value' => '',
				'label'         => esc_html__( 'Font Size', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive_heading_h6_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h6_responsive_line_height',
				'default_value' => '',
				'label'         => esc_html__( 'Line Height', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive_heading_h6_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h6_responsive_letter_spacing',
				'default_value' => '',
				'label'         => esc_html__( 'Letter Spacing', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive_heading_h6_1
			)
		);
		
		/**
		 * Headings Responsive (Mobile Devices)
		 */
		$panel_responsive_headings2 = backpacktraveler_mikado_add_admin_panel(
			array(
				'page'  => '_fonts_page',
				'name'  => 'panel_responsive_headings2',
				'title' => esc_html__( 'Headings Responsive (Mobile Devices)', 'backpacktraveler' )
			)
		);
		
		//H1
		$group_responsive2_heading_h1 = backpacktraveler_mikado_add_admin_group(
			array(
				'name'        => 'group_responsive2_heading_h1',
				'title'       => esc_html__( 'H1 Responsive Style', 'backpacktraveler' ),
				'description' => esc_html__( 'Define responsive styles for h1 heading', 'backpacktraveler' ),
				'parent'      => $panel_responsive_headings2
			)
		);
		
		$row_responsive2_heading_h1_1 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_responsive2_heading_h1_1',
				'parent' => $group_responsive2_heading_h1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h1_responsive_font_size_2',
				'default_value' => '',
				'label'         => esc_html__( 'Font Size', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive2_heading_h1_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h1_responsive_line_height_2',
				'default_value' => '',
				'label'         => esc_html__( 'Line Height', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive2_heading_h1_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h1_responsive_letter_spacing_2',
				'default_value' => '',
				'label'         => esc_html__( 'Letter Spacing', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive2_heading_h1_1
			)
		);
		
		//H2
		$group_responsive2_heading_h2 = backpacktraveler_mikado_add_admin_group(
			array(
				'name'        => 'group_responsive2_heading_h2',
				'title'       => esc_html__( 'H2 Responsive Style', 'backpacktraveler' ),
				'description' => esc_html__( 'Define responsive styles for h2 heading', 'backpacktraveler' ),
				'parent'      => $panel_responsive_headings2
			)
		);
		
		$row_responsive2_heading_h2_1 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_responsive2_heading_h2_1',
				'parent' => $group_responsive2_heading_h2
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h2_responsive_font_size_2',
				'default_value' => '',
				'label'         => esc_html__( 'Font Size', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive2_heading_h2_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h2_responsive_line_height_2',
				'default_value' => '',
				'label'         => esc_html__( 'Line Height', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive2_heading_h2_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h2_responsive_letter_spacing_2',
				'default_value' => '',
				'label'         => esc_html__( 'Letter Spacing', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive2_heading_h2_1
			)
		);
		
		//H3
		$group_responsive2_heading_h3 = backpacktraveler_mikado_add_admin_group(
			array(
				'name'        => 'group_responsive2_heading_h3',
				'title'       => esc_html__( 'H3 Responsive Style', 'backpacktraveler' ),
				'description' => esc_html__( 'Define responsive styles for h3 heading', 'backpacktraveler' ),
				'parent'      => $panel_responsive_headings2
			)
		);
		
		$row_responsive2_heading_h3_1 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_responsive2_heading_h3_1',
				'parent' => $group_responsive2_heading_h3
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h3_responsive_font_size_2',
				'default_value' => '',
				'label'         => esc_html__( 'Font Size', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive2_heading_h3_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h3_responsive_line_height_2',
				'default_value' => '',
				'label'         => esc_html__( 'Line Height', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive2_heading_h3_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h3_responsive_letter_spacing_2',
				'default_value' => '',
				'label'         => esc_html__( 'Letter Spacing', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive2_heading_h3_1
			)
		);
		
		//H4
		$group_responsive2_heading_h4 = backpacktraveler_mikado_add_admin_group(
			array(
				'name'        => 'group_responsive2_heading_h4',
				'title'       => esc_html__( 'H4 Responsive Style', 'backpacktraveler' ),
				'description' => esc_html__( 'Define responsive styles for h4 heading', 'backpacktraveler' ),
				'parent'      => $panel_responsive_headings2
			)
		);
		
		$row_responsive2_heading_h4_1 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_responsive2_heading_h4_1',
				'parent' => $group_responsive2_heading_h4
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h4_responsive_font_size_2',
				'default_value' => '',
				'label'         => esc_html__( 'Font Size', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive2_heading_h4_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h4_responsive_line_height_2',
				'default_value' => '',
				'label'         => esc_html__( 'Line Height', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive2_heading_h4_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h4_responsive_letter_spacing_2',
				'default_value' => '',
				'label'         => esc_html__( 'Letter Spacing', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive2_heading_h4_1
			)
		);
		
		//H5
		$group_responsive2_heading_h5 = backpacktraveler_mikado_add_admin_group(
			array(
				'name'        => 'group_responsive2_heading_h5',
				'title'       => esc_html__( 'H5 Responsive Style', 'backpacktraveler' ),
				'description' => esc_html__( 'Define responsive styles for h5 heading', 'backpacktraveler' ),
				'parent'      => $panel_responsive_headings2
			)
		);
		
		$row_responsive2_heading_h5_1 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_responsive2_heading_h5_1',
				'parent' => $group_responsive2_heading_h5
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h5_responsive_font_size_2',
				'default_value' => '',
				'label'         => esc_html__( 'Font Size', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive2_heading_h5_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h5_responsive_line_height_2',
				'default_value' => '',
				'label'         => esc_html__( 'Line Height', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive2_heading_h5_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h5_responsive_letter_spacing_2',
				'default_value' => '',
				'label'         => esc_html__( 'Letter Spacing', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive2_heading_h5_1
			)
		);
		
		//H6
		$group_responsive2_heading_h6 = backpacktraveler_mikado_add_admin_group(
			array(
				'name'        => 'group_responsive2_heading_h6',
				'title'       => esc_html__( 'H6 Responsive Style', 'backpacktraveler' ),
				'description' => esc_html__( 'Define responsive styles for h6 heading', 'backpacktraveler' ),
				'parent'      => $panel_responsive_headings2
			)
		);
		
		$row_responsive2_heading_h6_1 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_responsive2_heading_h6_1',
				'parent' => $group_responsive2_heading_h6
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h6_responsive_font_size_2',
				'default_value' => '',
				'label'         => esc_html__( 'Font Size', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive2_heading_h6_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h6_responsive_line_height_2',
				'default_value' => '',
				'label'         => esc_html__( 'Line Height', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive2_heading_h6_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'h6_responsive_letter_spacing_2',
				'default_value' => '',
				'label'         => esc_html__( 'Letter Spacing', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_responsive2_heading_h6_1
			)
		);
		
		/**
		 * Text
		 */
		$panel_text = backpacktraveler_mikado_add_admin_panel(
			array(
				'page'  => '_fonts_page',
				'name'  => 'panel_text',
				'title' => esc_html__( 'Text', 'backpacktraveler' )
			)
		);
		
		$group_text = backpacktraveler_mikado_add_admin_group(
			array(
				'name'        => 'group_text',
				'title'       => esc_html__( 'Paragraph', 'backpacktraveler' ),
				'description' => esc_html__( 'Define styles for paragraph text', 'backpacktraveler' ),
				'parent'      => $panel_text
			)
		);
		
		$row_text_1 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_text_1',
				'parent' => $group_text
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'colorsimple',
				'name'          => 'text_color',
				'default_value' => '',
				'label'         => esc_html__( 'Text Color', 'backpacktraveler' ),
				'parent'        => $row_text_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'text_font_size',
				'default_value' => '',
				'label'         => esc_html__( 'Font Size', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_text_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'text_line_height',
				'default_value' => '',
				'label'         => esc_html__( 'Line Height', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_text_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'selectblanksimple',
				'name'          => 'text_text_transform',
				'default_value' => '',
				'label'         => esc_html__( 'Text Transform', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_get_text_transform_array(),
				'parent'        => $row_text_1
			)
		);
		
		$row_text_2 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_text_2',
				'parent' => $group_text,
				'next'   => true
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'fontsimple',
				'name'          => 'text_google_fonts',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'backpacktraveler' ),
				'parent'        => $row_text_2
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'selectblanksimple',
				'name'          => 'text_font_style',
				'default_value' => '',
				'label'         => esc_html__( 'Font Style', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_get_font_style_array(),
				'parent'        => $row_text_2
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'selectblanksimple',
				'name'          => 'text_font_weight',
				'default_value' => '',
				'label'         => esc_html__( 'Font Weight', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_get_font_weight_array(),
				'parent'        => $row_text_2
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'text_letter_spacing',
				'default_value' => '',
				'label'         => esc_html__( 'Letter Spacing', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_text_2
			)
		);
		
		$row_text_3 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_text_3',
				'parent' => $group_text,
				'next'   => true
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'text_margin_top',
				'default_value' => '',
				'label'         => esc_html__( 'Margin Top (px)', 'backpacktraveler' ),
				'parent'        => $row_text_3
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'text_margin_bottom',
				'default_value' => '',
				'label'         => esc_html__( 'Margin Bottom (px)', 'backpacktraveler' ),
				'parent'        => $row_text_3
			)
		);
		
		$group_text_res1 = backpacktraveler_mikado_add_admin_group(
			array(
				'name'        => 'group_text_res1',
				'title'       => esc_html__( 'Paragraph Responsive (Tablet Portrait View)', 'backpacktraveler' ),
				'description' => esc_html__( 'Define responsive styles for paragraph text for tablet devices - portrait view', 'backpacktraveler' ),
				'parent'      => $panel_text
			)
		);
		
		$row_res_text_1 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_text_1',
				'parent' => $group_text_res1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'text_font_size_res1',
				'default_value' => '',
				'label'         => esc_html__( 'Font Size', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_res_text_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'text_line_height_res1',
				'default_value' => '',
				'label'         => esc_html__( 'Line Height', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_res_text_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'text_letter_spacing_res1',
				'default_value' => '',
				'label'         => esc_html__( 'Letter Spacing', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_res_text_1
			)
		);
		
		$group_text_res2 = backpacktraveler_mikado_add_admin_group(
			array(
				'name'        => 'group_text_res2',
				'title'       => esc_html__( 'Paragraph Responsive (Mobile Devices)', 'backpacktraveler' ),
				'description' => esc_html__( 'Define responsive styles for paragraph text for mobile devices', 'backpacktraveler' ),
				'parent'      => $panel_text
			)
		);
		
		$row_res_text_2 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_res_text_2',
				'parent' => $group_text_res2
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'text_font_size_res2',
				'default_value' => '',
				'label'         => esc_html__( 'Font Size', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_res_text_2
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'text_line_height_res2',
				'default_value' => '',
				'label'         => esc_html__( 'Line Height', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_res_text_2
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'text_letter_spacing_res2',
				'default_value' => '',
				'label'         => esc_html__( 'Letter Spacing', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => esc_html__( 'px / em', 'backpacktraveler' )
				),
				'parent'        => $row_res_text_2
			)
		);
		
		$group_link = backpacktraveler_mikado_add_admin_group(
			array(
				'name'        => 'group_link',
				'title'       => esc_html__( 'Links', 'backpacktraveler' ),
				'description' => esc_html__( 'Define styles for link text', 'backpacktraveler' ),
				'parent'      => $panel_text
			)
		);
		
		$row_link_1 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_link_1',
				'parent' => $group_link
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'colorsimple',
				'name'          => 'link_color',
				'default_value' => '',
				'label'         => esc_html__( 'Link Color', 'backpacktraveler' ),
				'parent'        => $row_link_1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'colorsimple',
				'name'          => 'link_hovercolor',
				'default_value' => '',
				'label'         => esc_html__( 'Hover Link Color', 'backpacktraveler' ),
				'parent'        => $row_link_1
			)
		);
		
		$row_link_2 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'row_link_2',
				'parent' => $group_link,
				'next'   => true
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'selectblanksimple',
				'name'          => 'link_fontstyle',
				'default_value' => '',
				'label'         => esc_html__( 'Font Style', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_get_font_style_array(),
				'parent'        => $row_link_2
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'selectblanksimple',
				'name'          => 'link_fontweight',
				'default_value' => '',
				'label'         => esc_html__( 'Font Weight', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_get_font_weight_array(),
				'parent'        => $row_link_2
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'selectblanksimple',
				'name'          => 'link_fontdecoration',
				'default_value' => '',
				'label'         => esc_html__( 'Link Decoration', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_get_text_decorations(),
				'parent'        => $row_link_2
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'selectblanksimple',
				'name'          => 'link_hover_fontdecoration',
				'default_value' => '',
				'label'         => esc_html__( 'Hovel Link Decoration', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_get_text_decorations(),
				'parent'        => $row_link_2
			)
		);
	}
	
	add_action( 'backpacktraveler_mikado_action_options_map', 'backpacktraveler_mikado_fonts_options_map', backpacktraveler_mikado_set_options_map_position( 'fonts' ) );
}