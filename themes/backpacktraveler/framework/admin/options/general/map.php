<?php

if ( ! function_exists( 'backpacktraveler_mikado_general_options_map' ) ) {
	/**
	 * General options page
	 */
	function backpacktraveler_mikado_general_options_map() {
		
		backpacktraveler_mikado_add_admin_page(
			array(
				'slug'  => '',
				'title' => esc_html__( 'General', 'backpacktraveler' ),
				'icon'  => 'fa fa-institution'
			)
		);

        do_action('backpacktraveler_mikado_add_general_options_map_first');
		
		$panel_design_style = backpacktraveler_mikado_add_admin_panel(
			array(
				'page'  => '',
				'name'  => 'panel_design_style',
				'title' => esc_html__( 'Appearance', 'backpacktraveler' )
			)
		);

		backpacktraveler_mikado_add_admin_field(
			array(
				'name'          => 'enable_google_fonts',
				'type'          => 'yesno',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Enable Google Fonts', 'backpacktraveler' ),
				'parent'        => $panel_design_style
			)
		);

		$google_fonts_container = backpacktraveler_mikado_add_admin_container(
			array(
				'parent'          => $panel_design_style,
				'name'            => 'google_fonts_container',
				'dependency' => array(
					'hide' => array(
						'enable_google_fonts'  => 'no'
					)
				)
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'          => 'google_fonts',
				'type'          => 'font',
				'default_value' => '-1',
				'label'         => esc_html__( 'Google Font Family', 'backpacktraveler' ),
				'description'   => esc_html__( 'Choose a default Google font for your site', 'backpacktraveler' ),
				'parent'        => $google_fonts_container
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'          => 'additional_google_fonts',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Additional Google Fonts', 'backpacktraveler' ),
				'parent'        => $google_fonts_container
			)
		);
		
		$additional_google_fonts_container = backpacktraveler_mikado_add_admin_container(
			array(
				'parent'          => $google_fonts_container,
				'name'            => 'additional_google_fonts_container',
				'dependency' => array(
					'show' => array(
						'additional_google_fonts'  => 'yes'
					)
				)
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'          => 'additional_google_font1',
				'type'          => 'font',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'backpacktraveler' ),
				'description'   => esc_html__( 'Choose additional Google font for your site', 'backpacktraveler' ),
				'parent'        => $additional_google_fonts_container
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'          => 'additional_google_font2',
				'type'          => 'font',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'backpacktraveler' ),
				'description'   => esc_html__( 'Choose additional Google font for your site', 'backpacktraveler' ),
				'parent'        => $additional_google_fonts_container
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'          => 'additional_google_font3',
				'type'          => 'font',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'backpacktraveler' ),
				'description'   => esc_html__( 'Choose additional Google font for your site', 'backpacktraveler' ),
				'parent'        => $additional_google_fonts_container
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'          => 'additional_google_font4',
				'type'          => 'font',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'backpacktraveler' ),
				'description'   => esc_html__( 'Choose additional Google font for your site', 'backpacktraveler' ),
				'parent'        => $additional_google_fonts_container
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'          => 'additional_google_font5',
				'type'          => 'font',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'backpacktraveler' ),
				'description'   => esc_html__( 'Choose additional Google font for your site', 'backpacktraveler' ),
				'parent'        => $additional_google_fonts_container
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'          => 'google_font_weight',
				'type'          => 'checkboxgroup',
				'default_value' => '',
				'label'         => esc_html__( 'Google Fonts Style & Weight', 'backpacktraveler' ),
				'description'   => esc_html__( 'Choose a default Google font weights for your site. Impact on page load time', 'backpacktraveler' ),
				'parent'        => $google_fonts_container,
				'options'       => array(
					'100'  => esc_html__( '100 Thin', 'backpacktraveler' ),
					'100i' => esc_html__( '100 Thin Italic', 'backpacktraveler' ),
					'200'  => esc_html__( '200 Extra-Light', 'backpacktraveler' ),
					'200i' => esc_html__( '200 Extra-Light Italic', 'backpacktraveler' ),
					'300'  => esc_html__( '300 Light', 'backpacktraveler' ),
					'300i' => esc_html__( '300 Light Italic', 'backpacktraveler' ),
					'400'  => esc_html__( '400 Regular', 'backpacktraveler' ),
					'400i' => esc_html__( '400 Regular Italic', 'backpacktraveler' ),
					'500'  => esc_html__( '500 Medium', 'backpacktraveler' ),
					'500i' => esc_html__( '500 Medium Italic', 'backpacktraveler' ),
					'600'  => esc_html__( '600 Semi-Bold', 'backpacktraveler' ),
					'600i' => esc_html__( '600 Semi-Bold Italic', 'backpacktraveler' ),
					'700'  => esc_html__( '700 Bold', 'backpacktraveler' ),
					'700i' => esc_html__( '700 Bold Italic', 'backpacktraveler' ),
					'800'  => esc_html__( '800 Extra-Bold', 'backpacktraveler' ),
					'800i' => esc_html__( '800 Extra-Bold Italic', 'backpacktraveler' ),
					'900'  => esc_html__( '900 Ultra-Bold', 'backpacktraveler' ),
					'900i' => esc_html__( '900 Ultra-Bold Italic', 'backpacktraveler' )
				)
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'          => 'google_font_subset',
				'type'          => 'checkboxgroup',
				'default_value' => '',
				'label'         => esc_html__( 'Google Fonts Subset', 'backpacktraveler' ),
				'description'   => esc_html__( 'Choose a default Google font subsets for your site', 'backpacktraveler' ),
				'parent'        => $google_fonts_container,
				'options'       => array(
					'latin'        => esc_html__( 'Latin', 'backpacktraveler' ),
					'latin-ext'    => esc_html__( 'Latin Extended', 'backpacktraveler' ),
					'cyrillic'     => esc_html__( 'Cyrillic', 'backpacktraveler' ),
					'cyrillic-ext' => esc_html__( 'Cyrillic Extended', 'backpacktraveler' ),
					'greek'        => esc_html__( 'Greek', 'backpacktraveler' ),
					'greek-ext'    => esc_html__( 'Greek Extended', 'backpacktraveler' ),
					'vietnamese'   => esc_html__( 'Vietnamese', 'backpacktraveler' )
				)
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'        => 'first_color',
				'type'        => 'color',
				'label'       => esc_html__( 'First Main Color', 'backpacktraveler' ),
				'description' => esc_html__( 'Choose the most dominant theme color. Default color is #00bbb3', 'backpacktraveler' ),
				'parent'      => $panel_design_style
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'        => 'page_background_color',
				'type'        => 'color',
				'label'       => esc_html__( 'Page Background Color', 'backpacktraveler' ),
				'description' => esc_html__( 'Choose the background color for page content. Default color is #ffffff', 'backpacktraveler' ),
				'parent'      => $panel_design_style
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'        => 'page_background_image',
				'type'        => 'image',
				'label'       => esc_html__( 'Page Background Image', 'backpacktraveler' ),
				'description' => esc_html__( 'Choose the background image for page content', 'backpacktraveler' ),
				'parent'      => $panel_design_style
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'          => 'page_background_image_repeat',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Page Background Image Repeat', 'backpacktraveler' ),
				'description'   => esc_html__( 'Enabling this option will set the background image as a repeating pattern throughout the page, otherwise the image will appear as the cover background image', 'backpacktraveler' ),
				'parent'        => $panel_design_style
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'        => 'selection_color',
				'type'        => 'color',
				'label'       => esc_html__( 'Text Selection Color', 'backpacktraveler' ),
				'description' => esc_html__( 'Choose the color users see when selecting text', 'backpacktraveler' ),
				'parent'      => $panel_design_style
			)
		);
		
		/***************** Passepartout Layout - begin **********************/
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'          => 'boxed',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Boxed Layout', 'backpacktraveler' ),
				'parent'        => $panel_design_style
			)
		);
		
			$boxed_container = backpacktraveler_mikado_add_admin_container(
				array(
					'parent'          => $panel_design_style,
					'name'            => 'boxed_container',
					'dependency' => array(
						'show' => array(
							'boxed'  => 'yes'
						)
					)
				)
			);
		
				backpacktraveler_mikado_add_admin_field(
					array(
						'name'        => 'page_background_color_in_box',
						'type'        => 'color',
						'label'       => esc_html__( 'Page Background Color', 'backpacktraveler' ),
						'description' => esc_html__( 'Choose the page background color outside box', 'backpacktraveler' ),
						'parent'      => $boxed_container
					)
				);
				
				backpacktraveler_mikado_add_admin_field(
					array(
						'name'        => 'boxed_background_image',
						'type'        => 'image',
						'label'       => esc_html__( 'Background Image', 'backpacktraveler' ),
						'description' => esc_html__( 'Choose an image to be displayed in background', 'backpacktraveler' ),
						'parent'      => $boxed_container
					)
				);
				
				backpacktraveler_mikado_add_admin_field(
					array(
						'name'        => 'boxed_pattern_background_image',
						'type'        => 'image',
						'label'       => esc_html__( 'Background Pattern', 'backpacktraveler' ),
						'description' => esc_html__( 'Choose an image to be used as background pattern', 'backpacktraveler' ),
						'parent'      => $boxed_container
					)
				);
				
				backpacktraveler_mikado_add_admin_field(
					array(
						'name'          => 'boxed_background_image_attachment',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Background Image Attachment', 'backpacktraveler' ),
						'description'   => esc_html__( 'Choose background image attachment', 'backpacktraveler' ),
						'parent'        => $boxed_container,
						'options'       => array(
							''       => esc_html__( 'Default', 'backpacktraveler' ),
							'fixed'  => esc_html__( 'Fixed', 'backpacktraveler' ),
							'scroll' => esc_html__( 'Scroll', 'backpacktraveler' )
						)
					)
				);
		
		/***************** Boxed Layout - end **********************/
		
		/***************** Passepartout Layout - begin **********************/
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'          => 'paspartu',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Passepartout', 'backpacktraveler' ),
				'description'   => esc_html__( 'Enabling this option will display passepartout around site content', 'backpacktraveler' ),
				'parent'        => $panel_design_style
			)
		);
		
			$paspartu_container = backpacktraveler_mikado_add_admin_container(
				array(
					'parent'          => $panel_design_style,
					'name'            => 'paspartu_container',
					'dependency' => array(
						'show' => array(
							'paspartu'  => 'yes'
						)
					)
				)
			);
		
				backpacktraveler_mikado_add_admin_field(
					array(
						'name'        => 'paspartu_color',
						'type'        => 'color',
						'label'       => esc_html__( 'Passepartout Color', 'backpacktraveler' ),
						'description' => esc_html__( 'Choose passepartout color, default value is #ffffff', 'backpacktraveler' ),
						'parent'      => $paspartu_container
					)
				);
				
				backpacktraveler_mikado_add_admin_field(
					array(
						'name'        => 'paspartu_width',
						'type'        => 'text',
						'label'       => esc_html__( 'Passepartout Size', 'backpacktraveler' ),
						'description' => esc_html__( 'Enter size amount for passepartout', 'backpacktraveler' ),
						'parent'      => $paspartu_container,
						'args'        => array(
							'col_width' => 2,
							'suffix'    => 'px or %'
						)
					)
				);
		
				backpacktraveler_mikado_add_admin_field(
					array(
						'name'        => 'paspartu_responsive_width',
						'type'        => 'text',
						'label'       => esc_html__( 'Responsive Passepartout Size', 'backpacktraveler' ),
						'description' => esc_html__( 'Enter size amount for passepartout for smaller screens (tablets and mobiles view)', 'backpacktraveler' ),
						'parent'      => $paspartu_container,
						'args'        => array(
							'col_width' => 2,
							'suffix'    => 'px or %'
						)
					)
				);
				
				backpacktraveler_mikado_add_admin_field(
					array(
						'parent'        => $paspartu_container,
						'type'          => 'yesno',
						'default_value' => 'no',
						'name'          => 'disable_top_paspartu',
						'label'         => esc_html__( 'Disable Top Passepartout', 'backpacktraveler' )
					)
				);
		
				backpacktraveler_mikado_add_admin_field(
					array(
						'parent'        => $paspartu_container,
						'type'          => 'yesno',
						'default_value' => 'no',
						'name'          => 'enable_fixed_paspartu',
						'label'         => esc_html__( 'Enable Fixed Passepartout', 'backpacktraveler' ),
						'description' => esc_html__( 'Enabling this option will set fixed passepartout for your screens', 'backpacktraveler' )
					)
				);
		
		/***************** Passepartout Layout - end **********************/
		
		/***************** Content Layout - begin **********************/
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'          => 'initial_content_width',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Initial Width of Content', 'backpacktraveler' ),
				'description'   => esc_html__( 'Choose the initial width of content which is in grid (Applies to pages set to "Default Template" and rows set to "In Grid")', 'backpacktraveler' ),
				'parent'        => $panel_design_style,
				'options'       => array(
					'mkdf-grid-1100' => esc_html__( '1100px - default', 'backpacktraveler' ),
					'mkdf-grid-1300' => esc_html__( '1300px', 'backpacktraveler' ),
					'mkdf-grid-1200' => esc_html__( '1200px', 'backpacktraveler' ),
					'mkdf-grid-1000' => esc_html__( '1000px', 'backpacktraveler' ),
					'mkdf-grid-800'  => esc_html__( '800px', 'backpacktraveler' )
				)
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'          => 'preload_pattern_image',
				'type'          => 'image',
				'label'         => esc_html__( 'Preload Pattern Image', 'backpacktraveler' ),
				'description'   => esc_html__( 'Choose preload pattern image to be displayed until images are loaded', 'backpacktraveler' ),
				'parent'        => $panel_design_style
			)
		);
		
		/***************** Content Layout - end **********************/
		
		$panel_settings = backpacktraveler_mikado_add_admin_panel(
			array(
				'page'  => '',
				'name'  => 'panel_settings',
				'title' => esc_html__( 'Behavior', 'backpacktraveler' )
			)
		);
		
		/***************** Smooth Scroll Layout - begin **********************/
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'          => 'page_smooth_scroll',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Smooth Scroll', 'backpacktraveler' ),
				'description'   => esc_html__( 'Enabling this option will perform a smooth scrolling effect on every page (except on Mac and touch devices)', 'backpacktraveler' ),
				'parent'        => $panel_settings
			)
		);
		
		/***************** Smooth Scroll Layout - end **********************/
		
		/***************** Smooth Page Transitions Layout - begin **********************/
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'          => 'smooth_page_transitions',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Smooth Page Transitions', 'backpacktraveler' ),
				'description'   => esc_html__( 'Enabling this option will perform a smooth transition between pages when clicking on links', 'backpacktraveler' ),
				'parent'        => $panel_settings
			)
		);
		
			$page_transitions_container = backpacktraveler_mikado_add_admin_container(
				array(
					'parent'          => $panel_settings,
					'name'            => 'page_transitions_container',
					'dependency' => array(
						'show' => array(
							'smooth_page_transitions'  => 'yes'
						)
					)
				)
			);
		
				backpacktraveler_mikado_add_admin_field(
					array(
						'name'          => 'page_transition_preloader',
						'type'          => 'yesno',
						'default_value' => 'no',
						'label'         => esc_html__( 'Enable Preloading Animation', 'backpacktraveler' ),
						'description'   => esc_html__( 'Enabling this option will display an animated preloader while the page content is loading', 'backpacktraveler' ),
						'parent'        => $page_transitions_container
					)
				);
				
				$page_transition_preloader_container = backpacktraveler_mikado_add_admin_container(
					array(
						'parent'          => $page_transitions_container,
						'name'            => 'page_transition_preloader_container',
						'dependency' => array(
							'show' => array(
								'page_transition_preloader'  => 'yes'
							)
						)
					)
				);
				
					backpacktraveler_mikado_add_admin_field(
						array(
							'name'   => 'smooth_pt_bgnd_color',
							'type'   => 'color',
							'label'  => esc_html__( 'Page Loader Background Color', 'backpacktraveler' ),
							'parent' => $page_transition_preloader_container
						)
					);
					
					$group_pt_spinner_animation = backpacktraveler_mikado_add_admin_group(
						array(
							'name'        => 'group_pt_spinner_animation',
							'title'       => esc_html__( 'Loader Style', 'backpacktraveler' ),
							'description' => esc_html__( 'Define styles for loader spinner animation', 'backpacktraveler' ),
							'parent'      => $page_transition_preloader_container
						)
					);
					
					$row_pt_spinner_animation = backpacktraveler_mikado_add_admin_row(
						array(
							'name'   => 'row_pt_spinner_animation',
							'parent' => $group_pt_spinner_animation
						)
					);
					
					backpacktraveler_mikado_add_admin_field(
						array(
							'type'          => 'selectsimple',
							'name'          => 'smooth_pt_spinner_type',
							'default_value' => '',
							'label'         => esc_html__( 'Spinner Type', 'backpacktraveler' ),
							'parent'        => $row_pt_spinner_animation,
							'options'       => array(
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
					
					backpacktraveler_mikado_add_admin_field(
						array(
							'type'          => 'colorsimple',
							'name'          => 'smooth_pt_spinner_color',
							'default_value' => '',
							'label'         => esc_html__( 'Spinner Color', 'backpacktraveler' ),
							'parent'        => $row_pt_spinner_animation
						)
					);

                    backpacktraveler_mikado_add_admin_field(
                        array(
                            'type'          => 'textsimple',
                            'name'          => 'smooth_pt_spinner_main_text',
                            'default_value' => '',
                            'label'         => esc_html__( 'Spinner Main Text', 'backpacktraveler' ),
                            'parent'        => $row_pt_spinner_animation,
                            'dependency'	=> array(
                                'show' => array(
                                    'smooth_pt_spinner_type' => 'backpacktraveler'
                                )
                            )
                        )
                    );

                    backpacktraveler_mikado_add_admin_field(
                        array(
                            'type'          => 'textsimple',
                            'name'          => 'smooth_pt_spinner_small_text',
                            'default_value' => '',
                            'label'         => esc_html__( 'Spinner Small Text', 'backpacktraveler' ),
                            'parent'        => $row_pt_spinner_animation,
                            'dependency'	=> array(
                                'show' => array(
                                    'smooth_pt_spinner_type' => 'backpacktraveler'
                                )
                            )
                        )
                    );
					
					backpacktraveler_mikado_add_admin_field(
						array(
							'name'          => 'page_transition_fadeout',
							'type'          => 'yesno',
							'default_value' => 'no',
							'label'         => esc_html__( 'Enable Fade Out Animation', 'backpacktraveler' ),
							'description'   => esc_html__( 'Enabling this option will turn on fade out animation when leaving page', 'backpacktraveler' ),
							'parent'        => $page_transitions_container
						)
					);
		
		/***************** Smooth Page Transitions Layout - end **********************/
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'          => 'show_back_button',
				'type'          => 'yesno',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Show "Back To Top Button"', 'backpacktraveler' ),
				'description'   => esc_html__( 'Enabling this option will display a Back to Top button on every page', 'backpacktraveler' ),
				'parent'        => $panel_settings
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'          => 'responsiveness',
				'type'          => 'yesno',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Responsiveness', 'backpacktraveler' ),
				'description'   => esc_html__( 'Enabling this option will make all pages responsive', 'backpacktraveler' ),
				'parent'        => $panel_settings
			)
		);
		
		$panel_custom_code = backpacktraveler_mikado_add_admin_panel(
			array(
				'page'  => '',
				'name'  => 'panel_custom_code',
				'title' => esc_html__( 'Custom Code', 'backpacktraveler' )
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'        => 'custom_js',
				'type'        => 'textarea',
				'label'       => esc_html__( 'Custom JS', 'backpacktraveler' ),
				'description' => esc_html__( 'Enter your custom Javascript here', 'backpacktraveler' ),
				'parent'      => $panel_custom_code
			)
		);
		
		$panel_google_api = backpacktraveler_mikado_add_admin_panel(
			array(
				'page'  => '',
				'name'  => 'panel_google_api',
				'title' => esc_html__( 'Google API', 'backpacktraveler' )
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'        => 'google_maps_api_key',
				'type'        => 'text',
				'label'       => esc_html__( 'Google Maps Api Key', 'backpacktraveler' ),
				'description' => esc_html__( 'Insert your Google Maps API key here. For instructions on how to create a Google Maps API key, please refer to our to our documentation.', 'backpacktraveler' ),
				'parent'      => $panel_google_api
			)
		);
	}
	
	add_action( 'backpacktraveler_mikado_action_options_map', 'backpacktraveler_mikado_general_options_map', backpacktraveler_mikado_set_options_map_position( 'general' ) );
}

if ( ! function_exists( 'backpacktraveler_mikado_page_general_style' ) ) {
	/**
	 * Function that prints page general inline styles
	 */
	function backpacktraveler_mikado_page_general_style( $style ) {
		$current_style = '';
		$page_id       = backpacktraveler_mikado_get_page_id();
		$class_prefix  = backpacktraveler_mikado_get_unique_page_class( $page_id );
		
		$boxed_background_style = array();
		
		$boxed_page_background_color = backpacktraveler_mikado_get_meta_field_intersect( 'page_background_color_in_box', $page_id );
		if ( ! empty( $boxed_page_background_color ) ) {
			$boxed_background_style['background-color'] = $boxed_page_background_color;
		}
		
		$boxed_page_background_image = backpacktraveler_mikado_get_meta_field_intersect( 'boxed_background_image', $page_id );
		if ( ! empty( $boxed_page_background_image ) ) {
			$boxed_background_style['background-image']    = 'url(' . esc_url( $boxed_page_background_image ) . ')';
			$boxed_background_style['background-position'] = 'center 0px';
			$boxed_background_style['background-repeat']   = 'no-repeat';
		}
		
		$boxed_page_background_pattern_image = backpacktraveler_mikado_get_meta_field_intersect( 'boxed_pattern_background_image', $page_id );
		if ( ! empty( $boxed_page_background_pattern_image ) ) {
			$boxed_background_style['background-image']    = 'url(' . esc_url( $boxed_page_background_pattern_image ) . ')';
			$boxed_background_style['background-position'] = '0px 0px';
			$boxed_background_style['background-repeat']   = 'repeat';
		}
		
		$boxed_page_background_attachment = backpacktraveler_mikado_get_meta_field_intersect( 'boxed_background_image_attachment', $page_id );
		if ( ! empty( $boxed_page_background_attachment ) ) {
			$boxed_background_style['background-attachment'] = $boxed_page_background_attachment;
		}
		
		$boxed_background_selector = $class_prefix . '.mkdf-boxed .mkdf-wrapper';
		
		if ( ! empty( $boxed_background_style ) ) {
			$current_style .= backpacktraveler_mikado_dynamic_css( $boxed_background_selector, $boxed_background_style );
		}
		
		$paspartu_style     = array();
		$paspartu_res_style = array();
		$paspartu_res_start = '@media only screen and (max-width: 1024px) {';
		$paspartu_res_end   = '}';
		
		$paspartu_header_selector                = array(
			'.mkdf-paspartu-enabled .mkdf-page-header .mkdf-fixed-wrapper.fixed',
			'.mkdf-paspartu-enabled .mkdf-sticky-header',
			'.mkdf-paspartu-enabled .mkdf-mobile-header.mobile-header-appear .mkdf-mobile-header-inner'
		);
		$paspartu_header_appear_selector         = array(
			'.mkdf-paspartu-enabled.mkdf-fixed-paspartu-enabled .mkdf-page-header .mkdf-fixed-wrapper.fixed',
			'.mkdf-paspartu-enabled.mkdf-fixed-paspartu-enabled .mkdf-sticky-header.header-appear',
			'.mkdf-paspartu-enabled.mkdf-fixed-paspartu-enabled .mkdf-mobile-header.mobile-header-appear .mkdf-mobile-header-inner'
		);
		
		$paspartu_header_style                   = array();
		$paspartu_header_appear_style            = array();
		$paspartu_header_responsive_style        = array();
		$paspartu_header_appear_responsive_style = array();
		
		$paspartu_color = backpacktraveler_mikado_get_meta_field_intersect( 'paspartu_color', $page_id );
		if ( ! empty( $paspartu_color ) ) {
			$paspartu_style['background-color'] = $paspartu_color;
		}
		
		$paspartu_width = backpacktraveler_mikado_get_meta_field_intersect( 'paspartu_width', $page_id );
		if ( $paspartu_width !== '' ) {
			if ( backpacktraveler_mikado_string_ends_with( $paspartu_width, '%' ) || backpacktraveler_mikado_string_ends_with( $paspartu_width, 'px' ) ) {
				$paspartu_style['padding'] = $paspartu_width;
				
				$paspartu_clean_width      = backpacktraveler_mikado_string_ends_with( $paspartu_width, '%' ) ? backpacktraveler_mikado_filter_suffix( $paspartu_width, '%' ) : backpacktraveler_mikado_filter_suffix( $paspartu_width, 'px' );
				$paspartu_clean_width_mark = backpacktraveler_mikado_string_ends_with( $paspartu_width, '%' ) ? '%' : 'px';
				
				$paspartu_header_style['left']              = $paspartu_width;
				$paspartu_header_style['width']             = 'calc(100% - ' . ( 2 * $paspartu_clean_width ) . $paspartu_clean_width_mark . ')';
				$paspartu_header_appear_style['margin-top'] = $paspartu_width;
			} else {
				$paspartu_style['padding'] = $paspartu_width . 'px';
				
				$paspartu_header_style['left']              = $paspartu_width . 'px';
				$paspartu_header_style['width']             = 'calc(100% - ' . ( 2 * $paspartu_width ) . 'px)';
				$paspartu_header_appear_style['margin-top'] = $paspartu_width . 'px';
			}
		}
		
		$paspartu_selector = $class_prefix . '.mkdf-paspartu-enabled .mkdf-wrapper';
		
		if ( ! empty( $paspartu_style ) ) {
			$current_style .= backpacktraveler_mikado_dynamic_css( $paspartu_selector, $paspartu_style );
		}
		
		if ( ! empty( $paspartu_header_style ) ) {
			$current_style .= backpacktraveler_mikado_dynamic_css( $paspartu_header_selector, $paspartu_header_style );
			$current_style .= backpacktraveler_mikado_dynamic_css( $paspartu_header_appear_selector, $paspartu_header_appear_style );
		}
		
		$paspartu_responsive_width = backpacktraveler_mikado_get_meta_field_intersect( 'paspartu_responsive_width', $page_id );
		if ( $paspartu_responsive_width !== '' ) {
			if ( backpacktraveler_mikado_string_ends_with( $paspartu_responsive_width, '%' ) || backpacktraveler_mikado_string_ends_with( $paspartu_responsive_width, 'px' ) ) {
				$paspartu_res_style['padding'] = $paspartu_responsive_width;
				
				$paspartu_clean_width      = backpacktraveler_mikado_string_ends_with( $paspartu_responsive_width, '%' ) ? backpacktraveler_mikado_filter_suffix( $paspartu_responsive_width, '%' ) : backpacktraveler_mikado_filter_suffix( $paspartu_responsive_width, 'px' );
				$paspartu_clean_width_mark = backpacktraveler_mikado_string_ends_with( $paspartu_responsive_width, '%' ) ? '%' : 'px';
				
				$paspartu_header_responsive_style['left']              = $paspartu_responsive_width;
				$paspartu_header_responsive_style['width']             = 'calc(100% - ' . ( 2 * $paspartu_clean_width ) . $paspartu_clean_width_mark . ')';
				$paspartu_header_appear_responsive_style['margin-top'] = $paspartu_responsive_width;
			} else {
				$paspartu_res_style['padding'] = $paspartu_responsive_width . 'px';
				
				$paspartu_header_responsive_style['left']              = $paspartu_responsive_width . 'px';
				$paspartu_header_responsive_style['width']             = 'calc(100% - ' . ( 2 * $paspartu_responsive_width ) . 'px)';
				$paspartu_header_appear_responsive_style['margin-top'] = $paspartu_responsive_width . 'px';
			}
		}
		
		if ( ! empty( $paspartu_res_style ) ) {
			$current_style .= $paspartu_res_start . backpacktraveler_mikado_dynamic_css( $paspartu_selector, $paspartu_res_style ) . $paspartu_res_end;
		}
		
		if ( ! empty( $paspartu_header_responsive_style ) ) {
			$current_style .= $paspartu_res_start . backpacktraveler_mikado_dynamic_css( $paspartu_header_selector, $paspartu_header_responsive_style ) . $paspartu_res_end;
			$current_style .= $paspartu_res_start . backpacktraveler_mikado_dynamic_css( $paspartu_header_appear_selector, $paspartu_header_appear_responsive_style ) . $paspartu_res_end;
		}
		
		$current_style = $current_style . $style;
		
		return $current_style;
	}
	
	add_filter( 'backpacktraveler_mikado_filter_add_page_custom_style', 'backpacktraveler_mikado_page_general_style' );
}