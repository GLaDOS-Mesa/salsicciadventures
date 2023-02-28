<?php

if ( ! function_exists( 'backpacktraveler_mikado_get_hide_dep_for_full_screen_menu_options' ) ) {
	function backpacktraveler_mikado_get_hide_dep_for_full_screen_menu_options() {
		$hide_dep_options = apply_filters( 'backpacktraveler_mikado_filter_full_screen_menu_hide_global_option', $hide_dep_options = array() );
		
		return $hide_dep_options;
	}
}

if ( ! function_exists( 'backpacktraveler_mikado_fullscreen_menu_options_map' ) ) {
	function backpacktraveler_mikado_fullscreen_menu_options_map() {
		$hide_dep_options = backpacktraveler_mikado_get_hide_dep_for_full_screen_menu_options();
		
		$fullscreen_panel = backpacktraveler_mikado_add_admin_panel(
			array(
				'title'           => esc_html__( 'Full Screen Menu', 'backpacktraveler' ),
				'name'            => 'panel_fullscreen_menu',
				'page'            => '_header_page',
				'dependency' => array(
					'hide' => array(
						'header_options'  => $hide_dep_options
					)
				)
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $fullscreen_panel,
				'type'          => 'select',
				'name'          => 'fullscreen_menu_animation_style',
				'default_value' => 'fade-push-text-right',
				'label'         => esc_html__( 'Full Screen Menu Overlay Animation', 'backpacktraveler' ),
				'description'   => esc_html__( 'Choose animation type for full screen menu overlay', 'backpacktraveler' ),
				'options'       => array(
					'fade-push-text-right' => esc_html__( 'Fade Push Text Right', 'backpacktraveler' ),
					'fade-push-text-top'   => esc_html__( 'Fade Push Text Top', 'backpacktraveler' ),
					'fade-text-scaledown'  => esc_html__( 'Fade Text Scaledown', 'backpacktraveler' )
				)
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $fullscreen_panel,
				'type'          => 'yesno',
				'name'          => 'fullscreen_in_grid',
				'default_value' => 'no',
				'label'         => esc_html__( 'Full Screen Menu in Grid', 'backpacktraveler' ),
				'description'   => esc_html__( 'Enabling this option will put full screen menu content in grid', 'backpacktraveler' ),
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $fullscreen_panel,
				'type'          => 'selectblank',
				'name'          => 'fullscreen_alignment',
				'default_value' => '',
				'label'         => esc_html__( 'Full Screen Menu Alignment', 'backpacktraveler' ),
				'description'   => esc_html__( 'Choose alignment for full screen menu content', 'backpacktraveler' ),
				'options'       => array(
					''       => esc_html__( 'Default', 'backpacktraveler' ),
					'left'   => esc_html__( 'Left', 'backpacktraveler' ),
					'center' => esc_html__( 'Center', 'backpacktraveler' ),
					'right'  => esc_html__( 'Right', 'backpacktraveler' )
				)
			)
		);
		
		$background_group = backpacktraveler_mikado_add_admin_group(
			array(
				'parent'      => $fullscreen_panel,
				'name'        => 'background_group',
				'title'       => esc_html__( 'Background', 'backpacktraveler' ),
				'description' => esc_html__( 'Select a background color and transparency for full screen menu (0 = fully transparent, 1 = opaque)', 'backpacktraveler' )
			)
		);
		
		$background_group_row = backpacktraveler_mikado_add_admin_row(
			array(
				'parent' => $background_group,
				'name'   => 'background_group_row'
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent' => $background_group_row,
				'type'   => 'colorsimple',
				'name'   => 'fullscreen_menu_background_color',
				'label'  => esc_html__( 'Background Color', 'backpacktraveler' )
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent' => $background_group_row,
				'type'   => 'textsimple',
				'name'   => 'fullscreen_menu_background_transparency',
				'label'  => esc_html__( 'Background Transparency', 'backpacktraveler' )
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'      => $fullscreen_panel,
				'type'        => 'image',
				'name'        => 'fullscreen_menu_background_image',
				'label'       => esc_html__( 'Background Image', 'backpacktraveler' ),
				'description' => esc_html__( 'Choose a background image for full screen menu background', 'backpacktraveler' )
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'      => $fullscreen_panel,
				'type'        => 'image',
				'name'        => 'fullscreen_menu_pattern_image',
				'label'       => esc_html__( 'Pattern Background Image', 'backpacktraveler' ),
				'description' => esc_html__( 'Choose a pattern image for full screen menu background', 'backpacktraveler' )
			)
		);
		
		//1st level style group
		$first_level_style_group = backpacktraveler_mikado_add_admin_group(
			array(
				'parent'      => $fullscreen_panel,
				'name'        => 'first_level_style_group',
				'title'       => esc_html__( '1st Level Style', 'backpacktraveler' ),
				'description' => esc_html__( 'Define styles for 1st level in full screen menu', 'backpacktraveler' )
			)
		);
		
		$first_level_style_row1 = backpacktraveler_mikado_add_admin_row(
			array(
				'parent' => $first_level_style_group,
				'name'   => 'first_level_style_row1'
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $first_level_style_row1,
				'type'          => 'colorsimple',
				'name'          => 'fullscreen_menu_color',
				'default_value' => '',
				'label'         => esc_html__( 'Text Color', 'backpacktraveler' ),
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $first_level_style_row1,
				'type'          => 'colorsimple',
				'name'          => 'fullscreen_menu_hover_color',
				'default_value' => '',
				'label'         => esc_html__( 'Hover Text Color', 'backpacktraveler' ),
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $first_level_style_row1,
				'type'          => 'colorsimple',
				'name'          => 'fullscreen_menu_active_color',
				'default_value' => '',
				'label'         => esc_html__( 'Active Text Color', 'backpacktraveler' ),
			)
		);
		
		$first_level_style_row3 = backpacktraveler_mikado_add_admin_row(
			array(
				'parent' => $first_level_style_group,
				'name'   => 'first_level_style_row3'
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $first_level_style_row3,
				'type'          => 'fontsimple',
				'name'          => 'fullscreen_menu_google_fonts',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'backpacktraveler' ),
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $first_level_style_row3,
				'type'          => 'textsimple',
				'name'          => 'fullscreen_menu_font_size',
				'default_value' => '',
				'label'         => esc_html__( 'Font Size', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => 'px'
				)
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $first_level_style_row3,
				'type'          => 'textsimple',
				'name'          => 'fullscreen_menu_line_height',
				'default_value' => '',
				'label'         => esc_html__( 'Line Height', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => 'px'
				)
			)
		);
		
		$first_level_style_row4 = backpacktraveler_mikado_add_admin_row(
			array(
				'parent' => $first_level_style_group,
				'name'   => 'first_level_style_row4'
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $first_level_style_row4,
				'type'          => 'selectblanksimple',
				'name'          => 'fullscreen_menu_font_style',
				'default_value' => '',
				'label'         => esc_html__( 'Font Style', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_get_font_style_array()
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $first_level_style_row4,
				'type'          => 'selectblanksimple',
				'name'          => 'fullscreen_menu_font_weight',
				'default_value' => '',
				'label'         => esc_html__( 'Font Weight', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_get_font_weight_array()
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $first_level_style_row4,
				'type'          => 'textsimple',
				'name'          => 'fullscreen_menu_letter_spacing',
				'default_value' => '',
				'label'         => esc_html__( 'Lettert Spacing', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => 'px'
				)
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $first_level_style_row4,
				'type'          => 'selectblanksimple',
				'name'          => 'fullscreen_menu_text_transform',
				'default_value' => '',
				'label'         => esc_html__( 'Text Transform', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_get_text_transform_array()
			)
		);
		
		//2nd level style group
		$second_level_style_group = backpacktraveler_mikado_add_admin_group(
			array(
				'parent'      => $fullscreen_panel,
				'name'        => 'second_level_style_group',
				'title'       => esc_html__( '2nd Level Style', 'backpacktraveler' ),
				'description' => esc_html__( 'Define styles for 2nd level in full screen menu', 'backpacktraveler' )
			)
		);
		
		$second_level_style_row1 = backpacktraveler_mikado_add_admin_row(
			array(
				'parent' => $second_level_style_group,
				'name'   => 'second_level_style_row1'
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $second_level_style_row1,
				'type'          => 'colorsimple',
				'name'          => 'fullscreen_menu_color_2nd',
				'default_value' => '',
				'label'         => esc_html__( 'Text Color', 'backpacktraveler' ),
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $second_level_style_row1,
				'type'          => 'colorsimple',
				'name'          => 'fullscreen_menu_hover_color_2nd',
				'default_value' => '',
				'label'         => esc_html__( 'Hover/Active Text Color', 'backpacktraveler' ),
			)
		);
		
		$second_level_style_row2 = backpacktraveler_mikado_add_admin_row(
			array(
				'parent' => $second_level_style_group,
				'name'   => 'second_level_style_row2'
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $second_level_style_row2,
				'type'          => 'fontsimple',
				'name'          => 'fullscreen_menu_google_fonts_2nd',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'backpacktraveler' ),
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $second_level_style_row2,
				'type'          => 'textsimple',
				'name'          => 'fullscreen_menu_font_size_2nd',
				'default_value' => '',
				'label'         => esc_html__( 'Font Size', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => 'px'
				)
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $second_level_style_row2,
				'type'          => 'textsimple',
				'name'          => 'fullscreen_menu_line_height_2nd',
				'default_value' => '',
				'label'         => esc_html__( 'Line Height', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => 'px'
				)
			)
		);
		
		$second_level_style_row3 = backpacktraveler_mikado_add_admin_row(
			array(
				'parent' => $second_level_style_group,
				'name'   => 'second_level_style_row3'
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $second_level_style_row3,
				'type'          => 'selectblanksimple',
				'name'          => 'fullscreen_menu_font_style_2nd',
				'default_value' => '',
				'label'         => esc_html__( 'Font Style', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_get_font_style_array()
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $second_level_style_row3,
				'type'          => 'selectblanksimple',
				'name'          => 'fullscreen_menu_font_weight_2nd',
				'default_value' => '',
				'label'         => esc_html__( 'Font Weight', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_get_font_weight_array()
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $second_level_style_row3,
				'type'          => 'textsimple',
				'name'          => 'fullscreen_menu_letter_spacing_2nd',
				'default_value' => '',
				'label'         => esc_html__( 'Lettert Spacing', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => 'px'
				)
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $second_level_style_row3,
				'type'          => 'selectblanksimple',
				'name'          => 'fullscreen_menu_text_transform_2nd',
				'default_value' => '',
				'label'         => esc_html__( 'Text Transform', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_get_text_transform_array()
			)
		);
		
		$third_level_style_group = backpacktraveler_mikado_add_admin_group(
			array(
				'parent'      => $fullscreen_panel,
				'name'        => 'third_level_style_group',
				'title'       => esc_html__( '3rd Level Style', 'backpacktraveler' ),
				'description' => esc_html__( 'Define styles for 3rd level in full screen menu', 'backpacktraveler' )
			)
		);
		
		$third_level_style_row1 = backpacktraveler_mikado_add_admin_row(
			array(
				'parent' => $third_level_style_group,
				'name'   => 'third_level_style_row1'
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $third_level_style_row1,
				'type'          => 'colorsimple',
				'name'          => 'fullscreen_menu_color_3rd',
				'default_value' => '',
				'label'         => esc_html__( 'Text Color', 'backpacktraveler' ),
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $third_level_style_row1,
				'type'          => 'colorsimple',
				'name'          => 'fullscreen_menu_hover_color_3rd',
				'default_value' => '',
				'label'         => esc_html__( 'Hover/Active Text Color', 'backpacktraveler' ),
			)
		);
		
		$third_level_style_row2 = backpacktraveler_mikado_add_admin_row(
			array(
				'parent' => $third_level_style_group,
				'name'   => 'second_level_style_row2'
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $third_level_style_row2,
				'type'          => 'fontsimple',
				'name'          => 'fullscreen_menu_google_fonts_3rd',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'backpacktraveler' ),
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $third_level_style_row2,
				'type'          => 'textsimple',
				'name'          => 'fullscreen_menu_font_size_3rd',
				'default_value' => '',
				'label'         => esc_html__( 'Font Size', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => 'px'
				)
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $third_level_style_row2,
				'type'          => 'textsimple',
				'name'          => 'fullscreen_menu_line_height_3rd',
				'default_value' => '',
				'label'         => esc_html__( 'Line Height', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => 'px'
				)
			)
		);
		
		$third_level_style_row3 = backpacktraveler_mikado_add_admin_row(
			array(
				'parent' => $third_level_style_group,
				'name'   => 'second_level_style_row3'
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $third_level_style_row3,
				'type'          => 'selectblanksimple',
				'name'          => 'fullscreen_menu_font_style_3rd',
				'default_value' => '',
				'label'         => esc_html__( 'Font Style', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_get_font_style_array()
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $third_level_style_row3,
				'type'          => 'selectblanksimple',
				'name'          => 'fullscreen_menu_font_weight_3rd',
				'default_value' => '',
				'label'         => esc_html__( 'Font Weight', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_get_font_weight_array()
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $third_level_style_row3,
				'type'          => 'textsimple',
				'name'          => 'fullscreen_menu_letter_spacing_3rd',
				'default_value' => '',
				'label'         => esc_html__( 'Lettert Spacing', 'backpacktraveler' ),
				'args'          => array(
					'suffix' => 'px'
				)
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $third_level_style_row3,
				'type'          => 'selectblanksimple',
				'name'          => 'fullscreen_menu_text_transform_3rd',
				'default_value' => '',
				'label'         => esc_html__( 'Text Transform', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_get_text_transform_array()
			)
		);

		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $fullscreen_panel,
				'type'          => 'select',
				'name'          => 'fullscreen_menu_icon_source',
				'default_value' => 'icon_pack',
				'label'         => esc_html__( 'Select Full Screen Menu Icon Source', 'backpacktraveler' ),
				'description'   => esc_html__( 'Choose whether you would like to use icons from an icon pack or SVG icons', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_get_icon_sources_array()
			)
		);

		$fullscreen_menu_icon_pack_container = backpacktraveler_mikado_add_admin_container(
			array(
				'parent'          => $fullscreen_panel,
				'name'            => 'fullscreen_menu_icon_pack_container',
				'dependency' => array(
					'show' => array(
						'fullscreen_menu_icon_source' => 'icon_pack'
					)
				)
			)
		);

		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $fullscreen_menu_icon_pack_container,
				'type'          => 'select',
				'name'          => 'fullscreen_menu_icon_pack',
				'default_value' => 'font_elegant',
				'label'         => esc_html__( 'Full Screen Menu Icon Pack', 'backpacktraveler' ),
				'description'   => esc_html__( 'Choose icon pack for full screen menu icon', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_icon_collections()->getIconCollectionsExclude( array( 'linea_icons', 'dripicons', 'simple_line_icons' ) )
			)
		);

		$fullscreen_menu_icon_svg_path_container = backpacktraveler_mikado_add_admin_container(
			array(
				'parent'          => $fullscreen_panel,
				'name'            => 'fullscreen_menu_icon_svg_path_container',
				'dependency' => array(
					'show' => array(
						'fullscreen_menu_icon_source' => 'svg_path'
					)
				)
			)
		);

		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'      => $fullscreen_menu_icon_svg_path_container,
				'type'        => 'textarea',
				'name'        => 'fullscreen_menu_icon_svg_path',
				'label'       => esc_html__( 'Full Screen Menu Icon SVG Path', 'backpacktraveler' ),
				'description' => esc_html__( 'Enter your full screen menu icon SVG path here. Please remove version and id attributes from your SVG path because of HTML validation', 'backpacktraveler' ),
			)
		);

		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'      => $fullscreen_menu_icon_svg_path_container,
				'type'        => 'textarea',
				'name'        => 'fullscreen_menu_close_icon_svg_path',
				'label'       => esc_html__( 'Full Screen Menu Close Icon SVG Path', 'backpacktraveler' ),
				'description' => esc_html__( 'Enter your full screen menu close icon SVG path here. Please remove version and id attributes from your SVG path because of HTML validation', 'backpacktraveler' ),
			)
		);

		$icon_style_group = backpacktraveler_mikado_add_admin_group(
			array(
				'parent'      => $fullscreen_panel,
				'name'        => 'fullscreen_menu_icon_style_group',
				'title'       => esc_html__( 'Full Screen Menu Icon Style', 'backpacktraveler' ),
				'description' => esc_html__( 'Define styles for full screen menu icon', 'backpacktraveler' )
			)
		);
		
		$icon_colors_row1 = backpacktraveler_mikado_add_admin_row(
			array(
				'parent' => $icon_style_group,
				'name'   => 'icon_colors_row1'
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent' => $icon_colors_row1,
				'type'   => 'colorsimple',
				'name'   => 'fullscreen_menu_icon_color',
				'label'  => esc_html__( 'Color', 'backpacktraveler' ),
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent' => $icon_colors_row1,
				'type'   => 'colorsimple',
				'name'   => 'fullscreen_menu_icon_hover_color',
				'label'  => esc_html__( 'Hover Color', 'backpacktraveler' ),
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent' => $icon_colors_row1,
				'type'   => 'colorsimple',
				'name'   => 'fullscreen_menu_icon_mobile_color',
				'label'  => esc_html__( 'Mobile Color', 'backpacktraveler' ),
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent' => $icon_colors_row1,
				'type'   => 'colorsimple',
				'name'   => 'fullscreen_menu_icon_mobile_hover_color',
				'label'  => esc_html__( 'Mobile Hover Color', 'backpacktraveler' ),
			)
		);
	}
	
	add_action( 'backpacktraveler_mikado_action_additional_header_menu_area_options_map', 'backpacktraveler_mikado_fullscreen_menu_options_map' );
}