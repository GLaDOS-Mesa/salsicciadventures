<?php

if ( ! function_exists( 'backpacktraveler_mikado_mobile_header_options_map' ) ) {
	function backpacktraveler_mikado_mobile_header_options_map() {
		
		$panel_mobile_header = backpacktraveler_mikado_add_admin_panel(
			array(
				'title' => esc_html__( 'Mobile Header', 'backpacktraveler' ),
				'name'  => 'panel_mobile_header',
				'page'  => '_header_page'
			)
		);
		
		$mobile_header_group = backpacktraveler_mikado_add_admin_group(
			array(
				'parent' => $panel_mobile_header,
				'name'   => 'mobile_header_group',
				'title'  => esc_html__( 'Mobile Header Styles', 'backpacktraveler' )
			)
		);
		
		$mobile_header_row1 = backpacktraveler_mikado_add_admin_row(
			array(
				'parent' => $mobile_header_group,
				'name'   => 'mobile_header_row1'
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'   => 'mobile_header_height',
				'type'   => 'textsimple',
				'label'  => esc_html__( 'Height', 'backpacktraveler' ),
				'parent' => $mobile_header_row1,
				'args'   => array(
					'col_width' => 3,
					'suffix'    => 'px'
				)
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'   => 'mobile_header_background_color',
				'type'   => 'colorsimple',
				'label'  => esc_html__( 'Background Color', 'backpacktraveler' ),
				'parent' => $mobile_header_row1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'   => 'mobile_header_border_bottom_color',
				'type'   => 'colorsimple',
				'label'  => esc_html__( 'Border Bottom Color', 'backpacktraveler' ),
				'parent' => $mobile_header_row1
			)
		);
		
		$mobile_menu_group = backpacktraveler_mikado_add_admin_group(
			array(
				'parent' => $panel_mobile_header,
				'name'   => 'mobile_menu_group',
				'title'  => esc_html__( 'Mobile Menu Styles', 'backpacktraveler' )
			)
		);
		
		$mobile_menu_row1 = backpacktraveler_mikado_add_admin_row(
			array(
				'parent' => $mobile_menu_group,
				'name'   => 'mobile_menu_row1'
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'   => 'mobile_menu_background_color',
				'type'   => 'colorsimple',
				'label'  => esc_html__( 'Background Color', 'backpacktraveler' ),
				'parent' => $mobile_menu_row1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'   => 'mobile_menu_border_bottom_color',
				'type'   => 'colorsimple',
				'label'  => esc_html__( 'Border Bottom Color', 'backpacktraveler' ),
				'parent' => $mobile_menu_row1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'   => 'mobile_menu_separator_color',
				'type'   => 'colorsimple',
				'label'  => esc_html__( 'Menu Item Separator Color', 'backpacktraveler' ),
				'parent' => $mobile_menu_row1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'        => 'mobile_logo_height',
				'type'        => 'text',
				'label'       => esc_html__( 'Logo Height For Mobile Header', 'backpacktraveler' ),
				'description' => esc_html__( 'Define logo height for screen size smaller than 1024px', 'backpacktraveler' ),
				'parent'      => $panel_mobile_header,
				'args'        => array(
					'col_width' => 3,
					'suffix'    => 'px'
				)
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'        => 'mobile_logo_height_phones',
				'type'        => 'text',
				'label'       => esc_html__( 'Logo Height For Mobile Devices', 'backpacktraveler' ),
				'description' => esc_html__( 'Define logo height for screen size smaller than 480px', 'backpacktraveler' ),
				'parent'      => $panel_mobile_header,
				'args'        => array(
					'col_width' => 3,
					'suffix'    => 'px'
				)
			)
		);
		
		backpacktraveler_mikado_add_admin_section_title(
			array(
				'parent' => $panel_mobile_header,
				'name'   => 'mobile_header_fonts_title',
				'title'  => esc_html__( 'Typography', 'backpacktraveler' )
			)
		);
		
		$first_level_group = backpacktraveler_mikado_add_admin_group(
			array(
				'parent'      => $panel_mobile_header,
				'name'        => 'first_level_group',
				'title'       => esc_html__( '1st Level Menu', 'backpacktraveler' ),
				'description' => esc_html__( 'Define styles for 1st level in Mobile Menu Navigation', 'backpacktraveler' )
			)
		);
		
		$first_level_row1 = backpacktraveler_mikado_add_admin_row(
			array(
				'parent' => $first_level_group,
				'name'   => 'first_level_row1'
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'   => 'mobile_text_color',
				'type'   => 'colorsimple',
				'label'  => esc_html__( 'Text Color', 'backpacktraveler' ),
				'parent' => $first_level_row1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'   => 'mobile_text_hover_color',
				'type'   => 'colorsimple',
				'label'  => esc_html__( 'Hover/Active Text Color', 'backpacktraveler' ),
				'parent' => $first_level_row1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'   => 'mobile_text_google_fonts',
				'type'   => 'fontsimple',
				'label'  => esc_html__( 'Font Family', 'backpacktraveler' ),
				'parent' => $first_level_row1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'   => 'mobile_text_font_size',
				'type'   => 'textsimple',
				'label'  => esc_html__( 'Font Size', 'backpacktraveler' ),
				'parent' => $first_level_row1,
				'args'   => array(
					'col_width' => 3,
					'suffix'    => 'px'
				)
			)
		);
		
		$first_level_row2 = backpacktraveler_mikado_add_admin_row(
			array(
				'parent' => $first_level_group,
				'name'   => 'first_level_row2'
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'   => 'mobile_text_line_height',
				'type'   => 'textsimple',
				'label'  => esc_html__( 'Line Height', 'backpacktraveler' ),
				'parent' => $first_level_row2,
				'args'   => array(
					'col_width' => 3,
					'suffix'    => 'px'
				)
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'    => 'mobile_text_text_transform',
				'type'    => 'selectsimple',
				'label'   => esc_html__( 'Text Transform', 'backpacktraveler' ),
				'parent'  => $first_level_row2,
				'options' => backpacktraveler_mikado_get_text_transform_array()
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'    => 'mobile_text_font_style',
				'type'    => 'selectsimple',
				'label'   => esc_html__( 'Font Style', 'backpacktraveler' ),
				'parent'  => $first_level_row2,
				'options' => backpacktraveler_mikado_get_font_style_array()
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'    => 'mobile_text_font_weight',
				'type'    => 'selectsimple',
				'label'   => esc_html__( 'Font Weight', 'backpacktraveler' ),
				'parent'  => $first_level_row2,
				'options' => backpacktraveler_mikado_get_font_weight_array()
			)
		);
		
		$first_level_row3 = backpacktraveler_mikado_add_admin_row(
			array(
				'parent' => $first_level_group,
				'name'   => 'first_level_row3'
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'mobile_text_letter_spacing',
				'label'         => esc_html__( 'Letter Spacing', 'backpacktraveler' ),
				'default_value' => '',
				'parent'        => $first_level_row3,
				'args'          => array(
					'suffix' => 'px'
				)
			)
		);
		
		$second_level_group = backpacktraveler_mikado_add_admin_group(
			array(
				'parent'      => $panel_mobile_header,
				'name'        => 'second_level_group',
				'title'       => esc_html__( 'Dropdown Menu', 'backpacktraveler' ),
				'description' => esc_html__( 'Define styles for drop down menu items in Mobile Menu Navigation', 'backpacktraveler' )
			)
		);
		
		$second_level_row1 = backpacktraveler_mikado_add_admin_row(
			array(
				'parent' => $second_level_group,
				'name'   => 'second_level_row1'
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'   => 'mobile_dropdown_text_color',
				'type'   => 'colorsimple',
				'label'  => esc_html__( 'Text Color', 'backpacktraveler' ),
				'parent' => $second_level_row1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'   => 'mobile_dropdown_text_hover_color',
				'type'   => 'colorsimple',
				'label'  => esc_html__( 'Hover/Active Text Color', 'backpacktraveler' ),
				'parent' => $second_level_row1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'   => 'mobile_dropdown_text_google_fonts',
				'type'   => 'fontsimple',
				'label'  => esc_html__( 'Font Family', 'backpacktraveler' ),
				'parent' => $second_level_row1
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'   => 'mobile_dropdown_text_font_size',
				'type'   => 'textsimple',
				'label'  => esc_html__( 'Font Size', 'backpacktraveler' ),
				'parent' => $second_level_row1,
				'args'   => array(
					'col_width' => 3,
					'suffix'    => 'px'
				)
			)
		);
		
		$second_level_row2 = backpacktraveler_mikado_add_admin_row(
			array(
				'parent' => $second_level_group,
				'name'   => 'second_level_row2'
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'   => 'mobile_dropdown_text_line_height',
				'type'   => 'textsimple',
				'label'  => esc_html__( 'Line Height', 'backpacktraveler' ),
				'parent' => $second_level_row2,
				'args'   => array(
					'col_width' => 3,
					'suffix'    => 'px'
				)
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'    => 'mobile_dropdown_text_text_transform',
				'type'    => 'selectsimple',
				'label'   => esc_html__( 'Text Transform', 'backpacktraveler' ),
				'parent'  => $second_level_row2,
				'options' => backpacktraveler_mikado_get_text_transform_array()
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'    => 'mobile_dropdown_text_font_style',
				'type'    => 'selectsimple',
				'label'   => esc_html__( 'Font Style', 'backpacktraveler' ),
				'parent'  => $second_level_row2,
				'options' => backpacktraveler_mikado_get_font_style_array()
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'    => 'mobile_dropdown_text_font_weight',
				'type'    => 'selectsimple',
				'label'   => esc_html__( 'Font Weight', 'backpacktraveler' ),
				'parent'  => $second_level_row2,
				'options' => backpacktraveler_mikado_get_font_weight_array()
			)
		);
		
		$second_level_row3 = backpacktraveler_mikado_add_admin_row(
			array(
				'parent' => $second_level_group,
				'name'   => 'second_level_row3'
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'textsimple',
				'name'          => 'mobile_dropdown_text_letter_spacing',
				'label'         => esc_html__( 'Letter Spacing', 'backpacktraveler' ),
				'default_value' => '',
				'parent'        => $second_level_row3,
				'args'          => array(
					'suffix' => 'px'
				)
			)
		);
		
		backpacktraveler_mikado_add_admin_section_title(
			array(
				'name'   => 'mobile_opener_panel',
				'parent' => $panel_mobile_header,
				'title'  => esc_html__( 'Mobile Menu Opener', 'backpacktraveler' )
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'        => 'mobile_menu_title',
				'type'        => 'text',
				'label'       => esc_html__( 'Mobile Navigation Title', 'backpacktraveler' ),
				'description' => esc_html__( 'Enter title for mobile menu navigation', 'backpacktraveler' ),
				'parent'      => $panel_mobile_header,
				'args'        => array(
					'col_width' => 3
				)
			)
		);

		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $panel_mobile_header,
				'type'          => 'select',
				'name'          => 'mobile_icon_source',
				'default_value' => 'icon_pack',
				'label'         => esc_html__( 'Select Mobile Navigation Icon Source', 'backpacktraveler' ),
				'description'   => esc_html__( 'Choose whether you would like to use icons from an icon pack or SVG icons', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_get_icon_sources_array()
			)
		);

		$mobile_icon_pack_container = backpacktraveler_mikado_add_admin_container(
			array(
				'parent'          => $panel_mobile_header,
				'name'            => 'mobile_icon_pack_container',
				'dependency' => array(
					'show' => array(
						'mobile_icon_source' => 'icon_pack'
					)
				)
			)
		);

		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $mobile_icon_pack_container,
				'type'          => 'select',
				'name'          => 'mobile_icon_pack',
				'default_value' => 'font_elegant',
				'label'         => esc_html__( 'Mobile Navigation Icon Pack', 'backpacktraveler' ),
				'description'   => esc_html__( 'Choose icon pack for mobile navigation icon', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_icon_collections()->getIconCollectionsExclude( array( 'linea_icons', 'dripicons', 'simple_line_icons' ) )
			)
		);

		$mobile_icon_svg_path_container = backpacktraveler_mikado_add_admin_container(
			array(
				'parent'          => $panel_mobile_header,
				'name'            => 'mobile_icon_svg_path_container',
				'dependency' => array(
					'show' => array(
						'mobile_icon_source' => 'svg_path'
					)
				)
			)
		);

		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'      => $mobile_icon_svg_path_container,
				'type'        => 'textarea',
				'name'        => 'mobile_icon_svg_path',
				'label'       => esc_html__( 'Mobile Navigation Icon SVG Path', 'backpacktraveler' ),
				'description' => esc_html__( 'Enter your mobile navigation icon SVG path here. Please remove version and id attributes from your SVG path because of HTML validation', 'backpacktraveler' ),
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'   => 'mobile_icon_color',
				'type'   => 'color',
				'label'  => esc_html__( 'Mobile Navigation Icon Color', 'backpacktraveler' ),
				'parent' => $panel_mobile_header
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'   => 'mobile_icon_hover_color',
				'type'   => 'color',
				'label'  => esc_html__( 'Mobile Navigation Icon Hover Color', 'backpacktraveler' ),
				'parent' => $panel_mobile_header
			)
		);
	}
	
	add_action( 'backpacktraveler_mikado_action_options_map', 'backpacktraveler_mikado_mobile_header_options_map', backpacktraveler_mikado_set_options_map_position( 'mobile-header' ) );
}