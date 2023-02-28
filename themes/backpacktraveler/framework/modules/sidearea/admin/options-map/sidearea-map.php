<?php

if ( ! function_exists( 'backpacktraveler_mikado_sidearea_options_map' ) ) {
	function backpacktraveler_mikado_sidearea_options_map() {

        backpacktraveler_mikado_add_admin_page(
            array(
                'slug'  => '_side_area_page',
                'title' => esc_html__('Side Area', 'backpacktraveler'),
                'icon'  => 'fa fa-indent'
            )
        );

        $side_area_panel = backpacktraveler_mikado_add_admin_panel(
            array(
                'title' => esc_html__('Side Area', 'backpacktraveler'),
                'name'  => 'side_area',
                'page'  => '_side_area_page'
            )
        );

        backpacktraveler_mikado_add_admin_field(
            array(
                'parent'        => $side_area_panel,
                'type'          => 'select',
                'name'          => 'side_area_type',
                'default_value' => 'side-menu-slide-from-right',
                'label'         => esc_html__('Side Area Type', 'backpacktraveler'),
                'description'   => esc_html__('Choose a type of Side Area', 'backpacktraveler'),
                'options'       => array(
                    'side-menu-slide-from-right'       => esc_html__('Slide from Right Over Content', 'backpacktraveler'),
                    'side-menu-slide-with-content'     => esc_html__('Slide from Right With Content', 'backpacktraveler'),
                    'side-area-uncovered-from-content' => esc_html__('Side Area Uncovered from Content', 'backpacktraveler'),
                ),
            )
        );

        backpacktraveler_mikado_add_admin_field(
            array(
                'parent'        => $side_area_panel,
                'type'          => 'text',
                'name'          => 'side_area_width',
                'default_value' => '',
                'label'         => esc_html__('Side Area Width', 'backpacktraveler'),
                'description'   => esc_html__('Enter a width for Side Area (px or %). Default width: 405px.', 'backpacktraveler'),
                'args'          => array(
                    'col_width' => 3,
                )
            )
        );

        $side_area_width_container = backpacktraveler_mikado_add_admin_container(
            array(
                'parent'     => $side_area_panel,
                'name'       => 'side_area_width_container',
                'dependency' => array(
                    'show' => array(
                        'side_area_type' => 'side-menu-slide-from-right',
                    )
                )
            )
        );

        backpacktraveler_mikado_add_admin_field(
            array(
                'parent'        => $side_area_width_container,
                'type'          => 'color',
                'name'          => 'side_area_content_overlay_color',
                'default_value' => '',
                'label'         => esc_html__('Content Overlay Background Color', 'backpacktraveler'),
                'description'   => esc_html__('Choose a background color for a content overlay', 'backpacktraveler'),
            )
        );

        backpacktraveler_mikado_add_admin_field(
            array(
                'parent'        => $side_area_width_container,
                'type'          => 'text',
                'name'          => 'side_area_content_overlay_opacity',
                'default_value' => '',
                'label'         => esc_html__('Content Overlay Background Transparency', 'backpacktraveler'),
                'description'   => esc_html__('Choose a transparency for the content overlay background color (0 = fully transparent, 1 = opaque)', 'backpacktraveler'),
                'args'          => array(
                    'col_width' => 3
                )
            )
        );

        backpacktraveler_mikado_add_admin_field(
            array(
                'parent'        => $side_area_panel,
                'type'          => 'select',
                'name'          => 'side_area_icon_source',
                'default_value' => 'icon_pack',
                'label'         => esc_html__('Select Side Area Icon Source', 'backpacktraveler'),
                'description'   => esc_html__('Choose whether you would like to use icons from an icon pack or SVG icons', 'backpacktraveler'),
                'options'       => backpacktraveler_mikado_get_icon_sources_array()
            )
        );

        $side_area_icon_pack_container = backpacktraveler_mikado_add_admin_container(
            array(
                'parent'     => $side_area_panel,
                'name'       => 'side_area_icon_pack_container',
                'dependency' => array(
                    'show' => array(
                        'side_area_icon_source' => 'icon_pack'
                    )
                )
            )
        );

        backpacktraveler_mikado_add_admin_field(
            array(
                'parent'        => $side_area_icon_pack_container,
                'type'          => 'select',
                'name'          => 'side_area_icon_pack',
                'default_value' => 'font_elegant',
                'label'         => esc_html__('Side Area Icon Pack', 'backpacktraveler'),
                'description'   => esc_html__('Choose icon pack for Side Area icon', 'backpacktraveler'),
                'options'       => backpacktraveler_mikado_icon_collections()->getIconCollectionsExclude(array('linea_icons', 'dripicons', 'simple_line_icons'))
            )
        );

        $side_area_svg_icons_container = backpacktraveler_mikado_add_admin_container(
            array(
                'parent'     => $side_area_panel,
                'name'       => 'side_area_svg_icons_container',
                'dependency' => array(
                    'show' => array(
                        'side_area_icon_source' => 'svg_path'
                    )
                )
            )
        );

        backpacktraveler_mikado_add_admin_field(
            array(
                'parent'      => $side_area_svg_icons_container,
                'type'        => 'textarea',
                'name'        => 'side_area_icon_svg_path',
                'label'       => esc_html__('Side Area Icon SVG Path', 'backpacktraveler'),
                'description' => esc_html__('Enter your Side Area icon SVG path here. Please remove version and id attributes from your SVG path because of HTML validation', 'backpacktraveler'),
            )
        );

        backpacktraveler_mikado_add_admin_field(
            array(
                'parent'      => $side_area_svg_icons_container,
                'type'        => 'textarea',
                'name'        => 'side_area_close_icon_svg_path',
                'label'       => esc_html__('Side Area Close Icon SVG Path', 'backpacktraveler'),
                'description' => esc_html__('Enter your Side Area close icon SVG path here. Please remove version and id attributes from your SVG path because of HTML validation', 'backpacktraveler'),
            )
        );

        $side_area_icon_style_group = backpacktraveler_mikado_add_admin_group(
            array(
                'parent'      => $side_area_panel,
                'name'        => 'side_area_icon_style_group',
                'title'       => esc_html__('Side Area Icon Style', 'backpacktraveler'),
                'description' => esc_html__('Define styles for Side Area icon', 'backpacktraveler')
            )
        );

        $side_area_icon_style_row1 = backpacktraveler_mikado_add_admin_row(
            array(
                'parent' => $side_area_icon_style_group,
                'name'   => 'side_area_icon_style_row1'
            )
        );

        backpacktraveler_mikado_add_admin_field(
            array(
                'parent' => $side_area_icon_style_row1,
                'type'   => 'colorsimple',
                'name'   => 'side_area_icon_color',
                'label'  => esc_html__('Color', 'backpacktraveler')
            )
        );

        backpacktraveler_mikado_add_admin_field(
            array(
                'parent' => $side_area_icon_style_row1,
                'type'   => 'colorsimple',
                'name'   => 'side_area_icon_hover_color',
                'label'  => esc_html__('Hover Color', 'backpacktraveler')
            )
        );

        $side_area_icon_style_row2 = backpacktraveler_mikado_add_admin_row(
            array(
                'parent' => $side_area_icon_style_group,
                'name'   => 'side_area_icon_style_row2',
                'next'   => true
            )
        );

        backpacktraveler_mikado_add_admin_field(
            array(
                'parent' => $side_area_icon_style_row2,
                'type'   => 'colorsimple',
                'name'   => 'side_area_close_icon_color',
                'label'  => esc_html__('Close Icon Color', 'backpacktraveler')
            )
        );

        backpacktraveler_mikado_add_admin_field(
            array(
                'parent' => $side_area_icon_style_row2,
                'type'   => 'colorsimple',
                'name'   => 'side_area_close_icon_hover_color',
                'label'  => esc_html__('Close Icon Hover Color', 'backpacktraveler')
            )
        );

        backpacktraveler_mikado_add_admin_field(
            array(
                'parent'      => $side_area_panel,
                'type'        => 'color',
                'name'        => 'side_area_background_color',
                'label'       => esc_html__('Background Color', 'backpacktraveler'),
                'description' => esc_html__('Choose a background color for Side Area', 'backpacktraveler')
            )
        );

        backpacktraveler_mikado_add_admin_field(
            array(
                'parent'      => $side_area_panel,
                'type'        => 'text',
                'name'        => 'side_area_padding',
                'label'       => esc_html__('Padding', 'backpacktraveler'),
                'description' => esc_html__('Define padding for Side Area in format top right bottom left', 'backpacktraveler'),
                'args'        => array(
                    'col_width' => 3
                )
            )
        );

        backpacktraveler_mikado_add_admin_field(
            array(
                'parent'        => $side_area_panel,
                'type'          => 'selectblank',
                'name'          => 'side_area_aligment',
                'default_value' => '',
                'label'         => esc_html__('Text Alignment', 'backpacktraveler'),
                'description'   => esc_html__('Choose text alignment for side area', 'backpacktraveler'),
                'options'       => array(
                    ''       => esc_html__('Default', 'backpacktraveler'),
                    'left'   => esc_html__('Left', 'backpacktraveler'),
                    'center' => esc_html__('Center', 'backpacktraveler'),
                    'right'  => esc_html__('Right', 'backpacktraveler')
                )
            )
        );
    }

    add_action('backpacktraveler_mikado_action_options_map', 'backpacktraveler_mikado_sidearea_options_map', backpacktraveler_mikado_set_options_map_position( 'sidearea' ) );
}