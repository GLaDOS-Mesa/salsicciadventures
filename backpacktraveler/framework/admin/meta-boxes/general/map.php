<?php

if ( ! function_exists( 'backpacktraveler_mikado_map_general_meta' ) ) {
	function backpacktraveler_mikado_map_general_meta() {
		
		$general_meta_box = backpacktraveler_mikado_create_meta_box(
			array(
				'scope' => apply_filters( 'backpacktraveler_mikado_filter_set_scope_for_meta_boxes', array( 'page', 'post' ), 'general_meta' ),
				'title' => esc_html__( 'General', 'backpacktraveler' ),
				'name'  => 'general_meta'
			)
		);
		
		/***************** Slider Layout - begin **********************/
		
		backpacktraveler_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_page_slider_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Slider Shortcode', 'backpacktraveler' ),
				'description' => esc_html__( 'Paste your slider shortcode here', 'backpacktraveler' ),
				'parent'      => $general_meta_box
			)
		);
		
		/***************** Slider Layout - begin **********************/
		
		/***************** Content Layout - begin **********************/
		
		backpacktraveler_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_page_content_behind_header_meta',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Always put content behind header', 'backpacktraveler' ),
				'description'   => esc_html__( 'Enabling this option will put page content behind page header', 'backpacktraveler' ),
				'parent'        => $general_meta_box
			)
		);
		
		$mkdf_content_padding_group = backpacktraveler_mikado_add_admin_group(
			array(
				'name'        => 'content_padding_group',
				'title'       => esc_html__( 'Content Styles', 'backpacktraveler' ),
				'description' => esc_html__( 'Define styles for Content area', 'backpacktraveler' ),
				'parent'      => $general_meta_box
			)
		);
		
			$mkdf_content_padding_row = backpacktraveler_mikado_add_admin_row(
				array(
					'name'   => 'mkdf_content_padding_row',
					'parent' => $mkdf_content_padding_group
				)
			);
			
				backpacktraveler_mikado_create_meta_box_field(
					array(
						'name'        => 'mkdf_page_background_color_meta',
						'type'        => 'colorsimple',
						'label'       => esc_html__( 'Page Background Color', 'backpacktraveler' ),
						'parent'      => $mkdf_content_padding_row
					)
				);
				
				backpacktraveler_mikado_create_meta_box_field(
					array(
						'name'          => 'mkdf_page_background_image_meta',
						'type'          => 'imagesimple',
						'label'         => esc_html__( 'Page Background Image', 'backpacktraveler' ),
						'parent'        => $mkdf_content_padding_row
					)
				);
				
				backpacktraveler_mikado_create_meta_box_field(
					array(
						'name'          => 'mkdf_page_background_repeat_meta',
						'type'          => 'selectsimple',
						'default_value' => '',
						'label'         => esc_html__( 'Page Background Image Repeat', 'backpacktraveler' ),
						'options'       => backpacktraveler_mikado_get_yes_no_select_array(),
						'parent'        => $mkdf_content_padding_row
					)
				);
		
			$mkdf_content_padding_row_1 = backpacktraveler_mikado_add_admin_row(
				array(
					'name'   => 'mkdf_content_padding_row_1',
					'next'   => true,
					'parent' => $mkdf_content_padding_group
				)
			);
		
				backpacktraveler_mikado_create_meta_box_field(
					array(
						'name'   => 'mkdf_page_content_padding',
						'type'   => 'textsimple',
						'label'  => esc_html__( 'Content Padding (eg. 10px 5px 10px 5px)', 'backpacktraveler' ),
						'parent' => $mkdf_content_padding_row_1,
						'args'        => array(
							'col_width' => 4
						)
					)
				);
				
				backpacktraveler_mikado_create_meta_box_field(
					array(
						'name'    => 'mkdf_page_content_padding_mobile',
						'type'    => 'textsimple',
						'label'   => esc_html__( 'Content Padding for mobile (eg. 10px 5px 10px 5px)', 'backpacktraveler' ),
						'parent'  => $mkdf_content_padding_row_1,
						'args'        => array(
							'col_width' => 4
						)
					)
				);
		
		backpacktraveler_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_initial_content_width_meta',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Initial Width of Content', 'backpacktraveler' ),
				'description'   => esc_html__( 'Choose the initial width of content which is in grid (Applies to pages set to "Default Template" and rows set to "In Grid")', 'backpacktraveler' ),
				'parent'        => $general_meta_box,
				'options'       => array(
					''                => esc_html__( 'Default', 'backpacktraveler' ),
					'mkdf-grid-1300' => esc_html__( '1300px', 'backpacktraveler' ),
					'mkdf-grid-1200' => esc_html__( '1200px', 'backpacktraveler' ),
					'mkdf-grid-1100' => esc_html__( '1100px', 'backpacktraveler' ),
					'mkdf-grid-1000' => esc_html__( '1000px', 'backpacktraveler' ),
					'mkdf-grid-800'  => esc_html__( '800px', 'backpacktraveler' )
				)
			)
		);
		
		backpacktraveler_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_page_grid_space_meta',
				'type'        => 'select',
				'default_value' => '',
				'label'       => esc_html__( 'Grid Layout Space', 'backpacktraveler' ),
				'description' => esc_html__( 'Choose a space between content layout and sidebar layout for your page', 'backpacktraveler' ),
				'options'     => backpacktraveler_mikado_get_space_between_items_array( true ),
				'parent'      => $general_meta_box
			)
		);
		
		/***************** Content Layout - end **********************/
		
		/***************** Boxed Layout - begin **********************/
		
		backpacktraveler_mikado_create_meta_box_field(
			array(
				'name'    => 'mkdf_boxed_meta',
				'type'    => 'select',
				'label'   => esc_html__( 'Boxed Layout', 'backpacktraveler' ),
				'parent'  => $general_meta_box,
				'options' => backpacktraveler_mikado_get_yes_no_select_array()
			)
		);
		
			$boxed_container_meta = backpacktraveler_mikado_add_admin_container(
				array(
					'parent'          => $general_meta_box,
					'name'            => 'boxed_container_meta',
					'dependency' => array(
						'hide' => array(
							'mkdf_boxed_meta' => array( '', 'no' )
						)
					)
				)
			);
		
				backpacktraveler_mikado_create_meta_box_field(
					array(
						'name'        => 'mkdf_page_background_color_in_box_meta',
						'type'        => 'color',
						'label'       => esc_html__( 'Page Background Color', 'backpacktraveler' ),
						'description' => esc_html__( 'Choose the page background color outside box', 'backpacktraveler' ),
						'parent'      => $boxed_container_meta
					)
				);
				
				backpacktraveler_mikado_create_meta_box_field(
					array(
						'name'        => 'mkdf_boxed_background_image_meta',
						'type'        => 'image',
						'label'       => esc_html__( 'Background Image', 'backpacktraveler' ),
						'description' => esc_html__( 'Choose an image to be displayed in background', 'backpacktraveler' ),
						'parent'      => $boxed_container_meta
					)
				);
				
				backpacktraveler_mikado_create_meta_box_field(
					array(
						'name'        => 'mkdf_boxed_pattern_background_image_meta',
						'type'        => 'image',
						'label'       => esc_html__( 'Background Pattern', 'backpacktraveler' ),
						'description' => esc_html__( 'Choose an image to be used as background pattern', 'backpacktraveler' ),
						'parent'      => $boxed_container_meta
					)
				);
				
				backpacktraveler_mikado_create_meta_box_field(
					array(
						'name'          => 'mkdf_boxed_background_image_attachment_meta',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Background Image Attachment', 'backpacktraveler' ),
						'description'   => esc_html__( 'Choose background image attachment', 'backpacktraveler' ),
						'parent'        => $boxed_container_meta,
						'options'       => array(
							''       => esc_html__( 'Default', 'backpacktraveler' ),
							'fixed'  => esc_html__( 'Fixed', 'backpacktraveler' ),
							'scroll' => esc_html__( 'Scroll', 'backpacktraveler' )
						)
					)
				);
		
		/***************** Boxed Layout - end **********************/
		
		/***************** Passepartout Layout - begin **********************/
		
		backpacktraveler_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_paspartu_meta',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Passepartout', 'backpacktraveler' ),
				'description'   => esc_html__( 'Enabling this option will display passepartout around site content', 'backpacktraveler' ),
				'parent'        => $general_meta_box,
				'options'       => backpacktraveler_mikado_get_yes_no_select_array(),
			)
		);
		
			$paspartu_container_meta = backpacktraveler_mikado_add_admin_container(
				array(
					'parent'          => $general_meta_box,
					'name'            => 'mkdf_paspartu_container_meta',
					'dependency' => array(
						'hide' => array(
							'mkdf_paspartu_meta'  => array('','no')
						)
					)
				)
			);
		
				backpacktraveler_mikado_create_meta_box_field(
					array(
						'name'        => 'mkdf_paspartu_color_meta',
						'type'        => 'color',
						'label'       => esc_html__( 'Passepartout Color', 'backpacktraveler' ),
						'description' => esc_html__( 'Choose passepartout color, default value is #ffffff', 'backpacktraveler' ),
						'parent'      => $paspartu_container_meta
					)
				);
				
				backpacktraveler_mikado_create_meta_box_field(
					array(
						'name'        => 'mkdf_paspartu_width_meta',
						'type'        => 'text',
						'label'       => esc_html__( 'Passepartout Size', 'backpacktraveler' ),
						'description' => esc_html__( 'Enter size amount for passepartout', 'backpacktraveler' ),
						'parent'      => $paspartu_container_meta,
						'args'        => array(
							'col_width' => 2,
							'suffix'    => 'px or %'
						)
					)
				);
		
				backpacktraveler_mikado_create_meta_box_field(
					array(
						'name'        => 'mkdf_paspartu_responsive_width_meta',
						'type'        => 'text',
						'label'       => esc_html__( 'Responsive Passepartout Size', 'backpacktraveler' ),
						'description' => esc_html__( 'Enter size amount for passepartout for smaller screens (tablets and mobiles view)', 'backpacktraveler' ),
						'parent'      => $paspartu_container_meta,
						'args'        => array(
							'col_width' => 2,
							'suffix'    => 'px or %'
						)
					)
				);
				
				backpacktraveler_mikado_create_meta_box_field(
					array(
						'parent'        => $paspartu_container_meta,
						'type'          => 'select',
						'default_value' => '',
						'name'          => 'mkdf_disable_top_paspartu_meta',
						'label'         => esc_html__( 'Disable Top Passepartout', 'backpacktraveler' ),
						'options'       => backpacktraveler_mikado_get_yes_no_select_array(),
					)
				);
		
				backpacktraveler_mikado_create_meta_box_field(
					array(
						'parent'        => $paspartu_container_meta,
						'type'          => 'select',
						'default_value' => '',
						'name'          => 'mkdf_enable_fixed_paspartu_meta',
						'label'         => esc_html__( 'Enable Fixed Passepartout', 'backpacktraveler' ),
						'description'   => esc_html__( 'Enabling this option will set fixed passepartout for your screens', 'backpacktraveler' ),
						'options'       => backpacktraveler_mikado_get_yes_no_select_array(),
					)
				);
		
		/***************** Passepartout Layout - end **********************/
		
		/***************** Smooth Page Transitions Layout - begin **********************/
		
		backpacktraveler_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_smooth_page_transitions_meta',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Smooth Page Transitions', 'backpacktraveler' ),
				'description'   => esc_html__( 'Enabling this option will perform a smooth transition between pages when clicking on links', 'backpacktraveler' ),
				'parent'        => $general_meta_box,
				'options'       => backpacktraveler_mikado_get_yes_no_select_array()
			)
		);
		
			$page_transitions_container_meta = backpacktraveler_mikado_add_admin_container(
				array(
					'parent'     => $general_meta_box,
					'name'       => 'page_transitions_container_meta',
					'dependency' => array(
						'hide' => array(
							'mkdf_smooth_page_transitions_meta' => array( '', 'no' )
						)
					)
				)
			);
		
				backpacktraveler_mikado_create_meta_box_field(
					array(
						'name'        => 'mkdf_page_transition_preloader_meta',
						'type'        => 'select',
						'label'       => esc_html__( 'Enable Preloading Animation', 'backpacktraveler' ),
						'description' => esc_html__( 'Enabling this option will display an animated preloader while the page content is loading', 'backpacktraveler' ),
						'parent'      => $page_transitions_container_meta,
						'options'     => backpacktraveler_mikado_get_yes_no_select_array()
					)
				);
		
				$page_transition_preloader_container_meta = backpacktraveler_mikado_add_admin_container(
					array(
						'parent'     => $page_transitions_container_meta,
						'name'       => 'page_transition_preloader_container_meta',
						'dependency' => array(
							'hide' => array(
								'mkdf_page_transition_preloader_meta' => array( '', 'no' )
							)
						)
					)
				);
				
					backpacktraveler_mikado_create_meta_box_field(
						array(
							'name'   => 'mkdf_smooth_pt_bgnd_color_meta',
							'type'   => 'color',
							'label'  => esc_html__( 'Page Loader Background Color', 'backpacktraveler' ),
							'parent' => $page_transition_preloader_container_meta
						)
					);
					
					$group_pt_spinner_animation_meta = backpacktraveler_mikado_add_admin_group(
						array(
							'name'        => 'group_pt_spinner_animation_meta',
							'title'       => esc_html__( 'Loader Style', 'backpacktraveler' ),
							'description' => esc_html__( 'Define styles for loader spinner animation', 'backpacktraveler' ),
							'parent'      => $page_transition_preloader_container_meta
						)
					);
					
					$row_pt_spinner_animation_meta = backpacktraveler_mikado_add_admin_row(
						array(
							'name'   => 'row_pt_spinner_animation_meta',
							'parent' => $group_pt_spinner_animation_meta
						)
					);
					
					backpacktraveler_mikado_create_meta_box_field(
						array(
							'type'    => 'selectsimple',
							'name'    => 'mkdf_smooth_pt_spinner_type_meta',
							'label'   => esc_html__( 'Spinner Type', 'backpacktraveler' ),
							'parent'  => $row_pt_spinner_animation_meta,
							'options' => array(
								''                      => esc_html__( 'Default', 'backpacktraveler' ),
                                'backpacktraveler'		=> esc_html__( 'BackpackTraveler Loader', 'backpacktraveler' ),
								'rotate_circles'        => esc_html__( 'Rotate Circles', 'backpacktraveler' ),
								'pulse'                 => esc_html__( 'Pulse', 'backpacktraveler' ),
								'double_pulse'          => esc_html__( 'Double Pulse', 'backpacktraveler' ),
								'cube'                  => esc_html__( 'Cube', 'backpacktraveler' ),
								'rotating_cubes'        => esc_html__( 'Rotating Cubes', 'backpacktraveler' ),
								'stripes'               => esc_html__( 'Stripes', 'backpacktraveler' ),
								'wave'                  => esc_html__( 'Wave', 'backpacktraveler' ),
								'two_rotating_circles'  => esc_html__( '2 Rotating Circles', 'backpacktraveler' ),
								'five_rotating_circles' => esc_html__( '5 Rotating Circles', 'backpacktraveler' ),
								'atom'                  => esc_html__( 'Atom', 'backpacktraveler' ),
								'clock'                 => esc_html__( 'Clock', 'backpacktraveler' ),
								'mitosis'               => esc_html__( 'Mitosis', 'backpacktraveler' ),
								'lines'                 => esc_html__( 'Lines', 'backpacktraveler' ),
								'fussion'               => esc_html__( 'Fussion', 'backpacktraveler' ),
								'wave_circles'          => esc_html__( 'Wave Circles', 'backpacktraveler' ),
								'pulse_circles'         => esc_html__( 'Pulse Circles', 'backpacktraveler' )
							)
						)
					);
					
					backpacktraveler_mikado_create_meta_box_field(
						array(
							'type'   => 'colorsimple',
							'name'   => 'mkdf_smooth_pt_spinner_color_meta',
							'label'  => esc_html__( 'Spinner Color', 'backpacktraveler' ),
							'parent' => $row_pt_spinner_animation_meta
						)
					);

                    backpacktraveler_mikado_create_meta_box_field(
                        array(
                            'type'          => 'textsimple',
                            'name'          => 'mkdf_smooth_pt_spinner_main_text_meta',
                            'default_value' => '',
                            'label'         => esc_html__( 'Spinner Main Text', 'backpacktraveler' ),
                            'parent'        => $row_pt_spinner_animation_meta,
                            'dependency'	=> array(
                                'show' => array(
                                    'mkdf_smooth_pt_spinner_type_meta' => 'backpacktraveler'
                                )
                            )
                        )
                    );

                    backpacktraveler_mikado_create_meta_box_field(
                        array(
                            'type'          => 'textsimple',
                            'name'          => 'mkdf_smooth_pt_spinner_small_text_meta',
                            'default_value' => '',
                            'label'         => esc_html__( 'Spinner Small Text', 'backpacktraveler' ),
                            'parent'        => $row_pt_spinner_animation_meta,
                            'dependency'	=> array(
                                'show' => array(
                                    'mkdf_smooth_pt_spinner_type_meta' => 'backpacktraveler'
                                )
                            )
                        )
                    );
					
					backpacktraveler_mikado_create_meta_box_field(
						array(
							'name'        => 'mkdf_page_transition_fadeout_meta',
							'type'        => 'select',
							'label'       => esc_html__( 'Enable Fade Out Animation', 'backpacktraveler' ),
							'description' => esc_html__( 'Enabling this option will turn on fade out animation when leaving page', 'backpacktraveler' ),
							'options'     => backpacktraveler_mikado_get_yes_no_select_array(),
							'parent'      => $page_transitions_container_meta
						
						)
					);
		
		/***************** Smooth Page Transitions Layout - end **********************/
		
		/***************** Comments Layout - begin **********************/
		
		backpacktraveler_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_page_comments_meta',
				'type'        => 'select',
				'label'       => esc_html__( 'Show Comments', 'backpacktraveler' ),
				'description' => esc_html__( 'Enabling this option will show comments on your page', 'backpacktraveler' ),
				'parent'      => $general_meta_box,
				'options'     => backpacktraveler_mikado_get_yes_no_select_array()
			)
		);
		
		/***************** Comments Layout - end **********************/
	}
	
	add_action( 'backpacktraveler_mikado_action_meta_boxes_map', 'backpacktraveler_mikado_map_general_meta', 10 );
}

if ( ! function_exists( 'backpacktraveler_mikado_container_background_style' ) ) {
	/**
	 * Function that return container style
	 */
	function backpacktraveler_mikado_container_background_style( $style ) {
		$page_id      = backpacktraveler_mikado_get_page_id();
		$class_prefix = backpacktraveler_mikado_get_unique_page_class( $page_id, true );
		
		$container_selector = array(
			$class_prefix . ' .mkdf-content'
		);
		
		$container_class        = array();
		$page_background_color  = get_post_meta( $page_id, 'mkdf_page_background_color_meta', true );
		$page_background_image  = get_post_meta( $page_id, 'mkdf_page_background_image_meta', true );
		$page_background_repeat = get_post_meta( $page_id, 'mkdf_page_background_repeat_meta', true );
		
		if ( ! empty( $page_background_color ) ) {
			$container_class['background-color'] = $page_background_color;
		}
		
		if ( ! empty( $page_background_image ) ) {
			$container_class['background-image'] = 'url(' . esc_url( $page_background_image ) . ')';
			
			if ( $page_background_repeat === 'yes' ) {
				$container_class['background-repeat']   = 'repeat';
				$container_class['background-position'] = '0 0';
			} else {
				$container_class['background-repeat']   = 'no-repeat';
				$container_class['background-position'] = 'center 0';
				$container_class['background-size']     = 'cover';
			}
		}
		
		$current_style = backpacktraveler_mikado_dynamic_css( $container_selector, $container_class );
		$current_style = $current_style . $style;
		
		return $current_style;
	}
	
	add_filter( 'backpacktraveler_mikado_filter_add_page_custom_style', 'backpacktraveler_mikado_container_background_style' );
}