<?php

/**
 * Force Visual Composer to initialize as "built into the theme". This will hide certain tabs under the Settings->Visual Composer page
 */
if ( function_exists( 'vc_set_as_theme' ) ) {
	vc_set_as_theme( true );
}

/**
 * Change path for overridden templates
 */
if ( function_exists( 'vc_set_shortcodes_templates_dir' ) ) {
	$dir = MIKADO_ROOT_DIR . '/vc-templates';
	vc_set_shortcodes_templates_dir( $dir );
}

if ( ! function_exists( 'backpacktraveler_mikado_configure_visual_composer_frontend_editor' ) ) {
	/**
	 * Configuration for Visual Composer FrontEnd Editor
	 * Hooks on vc_after_init action
	 */
	function backpacktraveler_mikado_configure_visual_composer_frontend_editor() {
		/**
		 * Remove frontend editor
		 */
		if ( function_exists( 'vc_disable_frontend' ) ) {
			vc_disable_frontend();
		}
	}
	
	add_action( 'vc_after_init', 'backpacktraveler_mikado_configure_visual_composer_frontend_editor' );
}

if ( ! function_exists( 'backpacktraveler_mikado_vc_row_map' ) ) {
	/**
	 * Map VC Row shortcode
	 * Hooks on vc_after_init action
	 */
	function backpacktraveler_mikado_vc_row_map() {
		
		/******* VC Row shortcode - begin *******/
		
		vc_add_param( 'vc_row',
			array(
				'type'       => 'dropdown',
				'param_name' => 'row_content_width',
				'heading'    => esc_html__( 'Mikado Row Content Width', 'backpacktraveler' ),
				'value'      => array(
					esc_html__( 'Full Width', 'backpacktraveler' ) => 'full-width',
					esc_html__( 'In Grid', 'backpacktraveler' )    => 'grid'
				),
				'group'      => esc_html__( 'Mikado Settings', 'backpacktraveler' )
			)
		);
		
		vc_add_param( 'vc_row',
			array(
				'type'        => 'textfield',
				'param_name'  => 'anchor',
				'heading'     => esc_html__( 'Mikado Anchor ID', 'backpacktraveler' ),
				'description' => esc_html__( 'For example "home"', 'backpacktraveler' ),
				'group'       => esc_html__( 'Mikado Settings', 'backpacktraveler' )
			)
		);
		
		vc_add_param( 'vc_row',
			array(
				'type'       => 'colorpicker',
				'param_name' => 'simple_background_color',
				'heading'    => esc_html__( 'Mikado Background Color', 'backpacktraveler' ),
				'group'      => esc_html__( 'Mikado Settings', 'backpacktraveler' )
			)
		);
		
		vc_add_param( 'vc_row',
			array(
				'type'       => 'attach_image',
				'param_name' => 'simple_background_image',
				'heading'    => esc_html__( 'Mikado Background Image', 'backpacktraveler' ),
				'group'      => esc_html__( 'Mikado Settings', 'backpacktraveler' )
			)
		);
		
		vc_add_param( 'vc_row',
			array(
				'type'        => 'textfield',
				'param_name'  => 'background_image_position',
				'heading'     => esc_html__( 'Mikado Background Position', 'backpacktraveler' ),
				'description' => esc_html__( 'Set the starting position of a background image, default value is top left', 'backpacktraveler' ),
				'dependency'  => array( 'element' => 'simple_background_image', 'not_empty' => true ),
				'group'       => esc_html__( 'Mikado Settings', 'backpacktraveler' )
			)
		);
		
		vc_add_param( 'vc_row',
			array(
				'type'        => 'dropdown',
				'param_name'  => 'disable_background_image',
				'heading'     => esc_html__( 'Mikado Disable Background Image', 'backpacktraveler' ),
				'value'       => array(
					esc_html__( 'Never', 'backpacktraveler' )        => '',
					esc_html__( 'Below 1280px', 'backpacktraveler' ) => '1280',
					esc_html__( 'Below 1024px', 'backpacktraveler' ) => '1024',
					esc_html__( 'Below 768px', 'backpacktraveler' )  => '768',
					esc_html__( 'Below 680px', 'backpacktraveler' )  => '680',
					esc_html__( 'Below 480px', 'backpacktraveler' )  => '480'
				),
				'save_always' => true,
				'description' => esc_html__( 'Choose on which stage you hide row background image', 'backpacktraveler' ),
				'dependency'  => array( 'element' => 'simple_background_image', 'not_empty' => true ),
				'group'       => esc_html__( 'Mikado Settings', 'backpacktraveler' )
			)
		);
		
		vc_add_param( 'vc_row',
			array(
				'type'       => 'attach_image',
				'param_name' => 'parallax_background_image',
				'heading'    => esc_html__( 'Mikado Parallax Background Image', 'backpacktraveler' ),
				'group'      => esc_html__( 'Mikado Settings', 'backpacktraveler' )
			)
		);
		
		vc_add_param( 'vc_row',
			array(
				'type'        => 'textfield',
				'param_name'  => 'parallax_bg_speed',
				'heading'     => esc_html__( 'Mikado Parallax Speed', 'backpacktraveler' ),
				'description' => esc_html__( 'Set your parallax speed. Default value is 1.', 'backpacktraveler' ),
				'dependency'  => array( 'element' => 'parallax_background_image', 'not_empty' => true ),
				'group'       => esc_html__( 'Mikado Settings', 'backpacktraveler' )
			)
		);
		
		vc_add_param( 'vc_row',
			array(
				'type'       => 'textfield',
				'param_name' => 'parallax_bg_height',
				'heading'    => esc_html__( 'Mikado Parallax Section Height (px)', 'backpacktraveler' ),
				'dependency' => array( 'element' => 'parallax_background_image', 'not_empty' => true ),
				'group'      => esc_html__( 'Mikado Settings', 'backpacktraveler' )
			)
		);
		
		vc_add_param( 'vc_row',
			array(
				'type'       => 'dropdown',
				'param_name' => 'content_text_aligment',
				'heading'    => esc_html__( 'Mikado Content Aligment', 'backpacktraveler' ),
				'value'      => array(
					esc_html__( 'Default', 'backpacktraveler' ) => '',
					esc_html__( 'Left', 'backpacktraveler' )    => 'left',
					esc_html__( 'Center', 'backpacktraveler' )  => 'center',
					esc_html__( 'Right', 'backpacktraveler' )   => 'right'
				),
				'group'      => esc_html__( 'Mikado Settings', 'backpacktraveler' )
			)
		);

		do_action( 'backpacktraveler_mikado_action_additional_vc_row_params' );
		
		/******* VC Row shortcode - end *******/
		
		/******* VC Row Inner shortcode - begin *******/
		
		vc_add_param( 'vc_row_inner',
			array(
				'type'       => 'dropdown',
				'param_name' => 'row_content_width',
				'heading'    => esc_html__( 'Mikado Row Content Width', 'backpacktraveler' ),
				'value'      => array(
					esc_html__( 'Full Width', 'backpacktraveler' ) => 'full-width',
					esc_html__( 'In Grid', 'backpacktraveler' )    => 'grid'
				),
				'group'      => esc_html__( 'Mikado Settings', 'backpacktraveler' )
			)
		);
		
		vc_add_param( 'vc_row_inner',
			array(
				'type'       => 'colorpicker',
				'param_name' => 'simple_background_color',
				'heading'    => esc_html__( 'Mikado Background Color', 'backpacktraveler' ),
				'group'      => esc_html__( 'Mikado Settings', 'backpacktraveler' )
			)
		);
		
		vc_add_param( 'vc_row_inner',
			array(
				'type'       => 'attach_image',
				'param_name' => 'simple_background_image',
				'heading'    => esc_html__( 'Mikado Background Image', 'backpacktraveler' ),
				'group'      => esc_html__( 'Mikado Settings', 'backpacktraveler' )
			)
		);
		
		vc_add_param( 'vc_row_inner',
			array(
				'type'        => 'textfield',
				'param_name'  => 'background_image_position',
				'heading'     => esc_html__( 'Mikado Background Position', 'backpacktraveler' ),
				'description' => esc_html__( 'Set the starting position of a background image, default value is top left', 'backpacktraveler' ),
				'dependency'  => array( 'element' => 'simple_background_image', 'not_empty' => true ),
				'group'       => esc_html__( 'Mikado Settings', 'backpacktraveler' )
			)
		);
		
		vc_add_param( 'vc_row_inner',
			array(
				'type'        => 'dropdown',
				'param_name'  => 'disable_background_image',
				'heading'     => esc_html__( 'Mikado Disable Background Image', 'backpacktraveler' ),
				'value'       => array(
					esc_html__( 'Never', 'backpacktraveler' )        => '',
					esc_html__( 'Below 1280px', 'backpacktraveler' ) => '1280',
					esc_html__( 'Below 1024px', 'backpacktraveler' ) => '1024',
					esc_html__( 'Below 768px', 'backpacktraveler' )  => '768',
					esc_html__( 'Below 680px', 'backpacktraveler' )  => '680',
					esc_html__( 'Below 480px', 'backpacktraveler' )  => '480'
				),
				'save_always' => true,
				'description' => esc_html__( 'Choose on which stage you hide row background image', 'backpacktraveler' ),
				'dependency'  => array( 'element' => 'simple_background_image', 'not_empty' => true ),
				'group'       => esc_html__( 'Mikado Settings', 'backpacktraveler' )
			)
		);
		
		vc_add_param( 'vc_row_inner',
			array(
				'type'       => 'dropdown',
				'param_name' => 'content_text_aligment',
				'heading'    => esc_html__( 'Mikado Content Aligment', 'backpacktraveler' ),
				'value'      => array(
					esc_html__( 'Default', 'backpacktraveler' ) => '',
					esc_html__( 'Left', 'backpacktraveler' )    => 'left',
					esc_html__( 'Center', 'backpacktraveler' )  => 'center',
					esc_html__( 'Right', 'backpacktraveler' )   => 'right'
				),
				'group'      => esc_html__( 'Mikado Settings', 'backpacktraveler' )
			)
		);
		
		/******* VC Row Inner shortcode - end *******/
		
		/******* VC Revolution Slider shortcode - begin *******/
		
		if ( backpacktraveler_mikado_revolution_slider_installed() ) {
			
			vc_add_param( 'rev_slider_vc',
				array(
					'type'        => 'dropdown',
					'param_name'  => 'enable_paspartu',
					'heading'     => esc_html__( 'Mikado Enable Passepartout', 'backpacktraveler' ),
					'value'       => array_flip( backpacktraveler_mikado_get_yes_no_select_array( false ) ),
					'save_always' => true,
					'group'       => esc_html__( 'Mikado Settings', 'backpacktraveler' )
				)
			);
			
			vc_add_param( 'rev_slider_vc',
				array(
					'type'        => 'dropdown',
					'param_name'  => 'paspartu_size',
					'heading'     => esc_html__( 'Mikado Passepartout Size', 'backpacktraveler' ),
					'value'       => array(
						esc_html__( 'Tiny', 'backpacktraveler' )   => 'tiny',
						esc_html__( 'Small', 'backpacktraveler' )  => 'small',
						esc_html__( 'Normal', 'backpacktraveler' ) => 'normal',
						esc_html__( 'Large', 'backpacktraveler' )  => 'large'
					),
					'save_always' => true,
					'dependency'  => array( 'element' => 'enable_paspartu', 'value' => array( 'yes' ) ),
					'group'       => esc_html__( 'Mikado Settings', 'backpacktraveler' )
				)
			);
			
			vc_add_param( 'rev_slider_vc',
				array(
					'type'        => 'dropdown',
					'param_name'  => 'disable_side_paspartu',
					'heading'     => esc_html__( 'Mikado Disable Side Passepartout', 'backpacktraveler' ),
					'value'       => array_flip( backpacktraveler_mikado_get_yes_no_select_array( false ) ),
					'save_always' => true,
					'dependency'  => array( 'element' => 'enable_paspartu', 'value' => array( 'yes' ) ),
					'group'       => esc_html__( 'Mikado Settings', 'backpacktraveler' )
				)
			);
			
			vc_add_param( 'rev_slider_vc',
				array(
					'type'        => 'dropdown',
					'param_name'  => 'disable_top_paspartu',
					'heading'     => esc_html__( 'Mikado Disable Top Passepartout', 'backpacktraveler' ),
					'value'       => array_flip( backpacktraveler_mikado_get_yes_no_select_array( false ) ),
					'save_always' => true,
					'dependency'  => array( 'element' => 'enable_paspartu', 'value' => array( 'yes' ) ),
					'group'       => esc_html__( 'Mikado Settings', 'backpacktraveler' )
				)
			);
		}
		
		/******* VC Revolution Slider shortcode - end *******/
	}
	
	add_action( 'vc_after_init', 'backpacktraveler_mikado_vc_row_map' );
}