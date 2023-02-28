<?php

if ( ! function_exists( 'backpacktraveler_mikado_footer_options_map' ) ) {
	function backpacktraveler_mikado_footer_options_map() {

		backpacktraveler_mikado_add_admin_page(
			array(
				'slug'  => '_footer_page',
				'title' => esc_html__( 'Footer', 'backpacktraveler' ),
				'icon'  => 'fa fa-sort-amount-asc'
			)
		);

		$footer_panel = backpacktraveler_mikado_add_admin_panel(
			array(
				'title' => esc_html__( 'Footer', 'backpacktraveler' ),
				'name'  => 'footer',
				'page'  => '_footer_page'
			)
		);

		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'footer_in_grid',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Footer in Grid', 'backpacktraveler' ),
				'description'   => esc_html__( 'Enabling this option will place Footer content in grid', 'backpacktraveler' ),
				'parent'        => $footer_panel
			)
		);

        backpacktraveler_mikado_add_admin_field(
            array(
                'type'          => 'yesno',
                'name'          => 'uncovering_footer',
                'default_value' => 'no',
                'label'         => esc_html__( 'Uncovering Footer', 'backpacktraveler' ),
                'description'   => esc_html__( 'Enabling this option will make Footer gradually appear on scroll', 'backpacktraveler' ),
                'parent'        => $footer_panel
            )
        );

		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'show_footer_top',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Show Footer Top', 'backpacktraveler' ),
				'description'   => esc_html__( 'Enabling this option will show Footer Top area', 'backpacktraveler' ),
				'parent'        => $footer_panel
			)
		);
		
		$show_footer_top_container = backpacktraveler_mikado_add_admin_container(
			array(
				'name'       => 'show_footer_top_container',
				'parent'     => $footer_panel,
				'dependency' => array(
					'show' => array(
						'show_footer_top' => 'yes'
					)
				)
			)
		);

		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'footer_top_columns',
				'parent'        => $show_footer_top_container,
				'default_value' => '3 3 3 3',
				'label'         => esc_html__( 'Footer Top Columns', 'backpacktraveler' ),
				'description'   => esc_html__( 'Choose number of columns for Footer Top area', 'backpacktraveler' ),
				'options'       => array(
					'12' => '1',
					'6 6' => '2',
					'4 4 4' => '3',
                    '3 3 6' => '3 (25% + 25% + 50%)',
					'3 3 3 3' => '4'
				)
			)
		);

		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'footer_top_columns_alignment',
				'default_value' => 'left',
				'label'         => esc_html__( 'Footer Top Columns Alignment', 'backpacktraveler' ),
				'description'   => esc_html__( 'Text Alignment in Footer Columns', 'backpacktraveler' ),
				'options'       => array(
					''       => esc_html__( 'Default', 'backpacktraveler' ),
					'left'   => esc_html__( 'Left', 'backpacktraveler' ),
					'center' => esc_html__( 'Center', 'backpacktraveler' ),
					'right'  => esc_html__( 'Right', 'backpacktraveler' )
				),
				'parent'        => $show_footer_top_container
			)
		);
		
		$footer_top_styles_group = backpacktraveler_mikado_add_admin_group(
			array(
				'name'        => 'footer_top_styles_group',
				'title'       => esc_html__( 'Footer Top Styles', 'backpacktraveler' ),
				'description' => esc_html__( 'Define style for footer top area', 'backpacktraveler' ),
				'parent'      => $show_footer_top_container
			)
		);
		
		$footer_top_styles_row_1 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'footer_top_styles_row_1',
				'parent' => $footer_top_styles_group
			)
		);
		
			backpacktraveler_mikado_add_admin_field(
				array(
					'name'   => 'footer_top_background_color',
					'type'   => 'colorsimple',
					'label'  => esc_html__( 'Background Color', 'backpacktraveler' ),
					'parent' => $footer_top_styles_row_1
				)
			);
			
			backpacktraveler_mikado_add_admin_field(
				array(
					'name'   => 'footer_top_border_color',
					'type'   => 'colorsimple',
					'label'  => esc_html__( 'Border Color', 'backpacktraveler' ),
					'parent' => $footer_top_styles_row_1
				)
			);
			
			backpacktraveler_mikado_add_admin_field(
				array(
					'name'   => 'footer_top_border_width',
					'type'   => 'textsimple',
					'label'  => esc_html__( 'Border Width', 'backpacktraveler' ),
					'parent' => $footer_top_styles_row_1,
					'args'   => array(
						'suffix' => 'px'
					)
				)
			);

		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'show_footer_bottom',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Show Footer Bottom', 'backpacktraveler' ),
				'description'   => esc_html__( 'Enabling this option will show Footer Bottom area', 'backpacktraveler' ),
				'parent'        => $footer_panel
			)
		);

		$show_footer_bottom_container = backpacktraveler_mikado_add_admin_container(
			array(
				'name'            => 'show_footer_bottom_container',
				'parent'          => $footer_panel,
				'dependency' => array(
					'show' => array(
						'show_footer_bottom'  => 'yes'
					)
				)
			)
		);

		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'footer_bottom_columns',
				'default_value' => '6 6',
				'label'         => esc_html__( 'Footer Bottom Columns', 'backpacktraveler' ),
				'description'   => esc_html__( 'Choose number of columns for Footer Bottom area', 'backpacktraveler' ),
				'options'       => array(
					'12' => '1',
					'6 6' => '2',
					'4 4 4' => '3'
				),
				'parent'        => $show_footer_bottom_container
			)
		);
		
		$footer_bottom_styles_group = backpacktraveler_mikado_add_admin_group(
			array(
				'name'        => 'footer_bottom_styles_group',
				'title'       => esc_html__( 'Footer Bottom Styles', 'backpacktraveler' ),
				'description' => esc_html__( 'Define style for footer bottom area', 'backpacktraveler' ),
				'parent'      => $show_footer_bottom_container
			)
		);
		
		$footer_bottom_styles_row_1 = backpacktraveler_mikado_add_admin_row(
			array(
				'name'   => 'footer_bottom_styles_row_1',
				'parent' => $footer_bottom_styles_group
			)
		);
		
			backpacktraveler_mikado_add_admin_field(
				array(
					'name'   => 'footer_bottom_background_color',
					'type'   => 'colorsimple',
					'label'  => esc_html__( 'Background Color', 'backpacktraveler' ),
					'parent' => $footer_bottom_styles_row_1
				)
			);
			
			backpacktraveler_mikado_add_admin_field(
				array(
					'name'   => 'footer_bottom_border_color',
					'type'   => 'colorsimple',
					'label'  => esc_html__( 'Border Color', 'backpacktraveler' ),
					'parent' => $footer_bottom_styles_row_1
				)
			);
			
			backpacktraveler_mikado_add_admin_field(
				array(
					'name'   => 'footer_bottom_border_width',
					'type'   => 'textsimple',
					'label'  => esc_html__( 'Border Width', 'backpacktraveler' ),
					'parent' => $footer_bottom_styles_row_1,
					'args'   => array(
						'suffix' => 'px'
					)
				)
			);
	}

	add_action( 'backpacktraveler_mikado_action_options_map', 'backpacktraveler_mikado_footer_options_map', backpacktraveler_mikado_set_options_map_position( 'footer' ) );
}