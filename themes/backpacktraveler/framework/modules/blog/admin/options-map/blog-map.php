<?php

if ( ! function_exists( 'backpacktraveler_mikado_get_blog_list_types_options' ) ) {
	function backpacktraveler_mikado_get_blog_list_types_options() {
		$blog_list_type_options = apply_filters( 'backpacktraveler_mikado_filter_blog_list_type_global_option', $blog_list_type_options = array() );
		
		return $blog_list_type_options;
	}
}

if ( ! function_exists( 'backpacktraveler_mikado_blog_options_map' ) ) {
	function backpacktraveler_mikado_blog_options_map() {
		$blog_list_type_options = backpacktraveler_mikado_get_blog_list_types_options();
		
		backpacktraveler_mikado_add_admin_page(
			array(
				'slug'  => '_blog_page',
				'title' => esc_html__( 'Blog', 'backpacktraveler' ),
				'icon'  => 'fa fa-files-o'
			)
		);
		
		/**
		 * Blog Lists
		 */
		$panel_blog_lists = backpacktraveler_mikado_add_admin_panel(
			array(
				'page'  => '_blog_page',
				'name'  => 'panel_blog_lists',
				'title' => esc_html__( 'Blog Lists', 'backpacktraveler' )
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'        => 'blog_list_grid_space',
				'type'        => 'select',
				'label'       => esc_html__( 'Grid Layout Space', 'backpacktraveler' ),
				'description' => esc_html__( 'Choose a space between content layout and sidebar layout for blog post lists. Default value is large', 'backpacktraveler' ),
				'options'     => backpacktraveler_mikado_get_space_between_items_array( true ),
				'parent'      => $panel_blog_lists
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'          => 'blog_list_type',
				'type'          => 'select',
				'label'         => esc_html__( 'Blog Layout for Archive Pages', 'backpacktraveler' ),
				'description'   => esc_html__( 'Choose a default blog layout for archived blog post lists', 'backpacktraveler' ),
				'default_value' => 'standard',
				'parent'        => $panel_blog_lists,
				'options'       => $blog_list_type_options
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'          => 'archive_sidebar_layout',
				'type'          => 'select',
				'label'         => esc_html__( 'Sidebar Layout for Archive Pages', 'backpacktraveler' ),
				'description'   => esc_html__( 'Choose a sidebar layout for archived blog post lists', 'backpacktraveler' ),
				'default_value' => '',
				'parent'        => $panel_blog_lists,
                'options'       => backpacktraveler_mikado_get_custom_sidebars_options(),
			)
		);
		
		$backpacktraveler_custom_sidebars = backpacktraveler_mikado_get_custom_sidebars();
		if ( is_array( $backpacktraveler_custom_sidebars ) && count( $backpacktraveler_custom_sidebars ) > 0 ) {
			backpacktraveler_mikado_add_admin_field(
				array(
					'name'        => 'archive_custom_sidebar_area',
					'type'        => 'selectblank',
					'label'       => esc_html__( 'Sidebar to Display for Archive Pages', 'backpacktraveler' ),
					'description' => esc_html__( 'Choose a sidebar to display on archived blog post lists. Default sidebar is "Sidebar Page"', 'backpacktraveler' ),
					'parent'      => $panel_blog_lists,
					'options'     => backpacktraveler_mikado_get_custom_sidebars(),
					'args'        => array(
						'select2' => true
					)
				)
			);
		}
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'          => 'blog_masonry_layout',
				'type'          => 'select',
				'label'         => esc_html__( 'Masonry - Layout', 'backpacktraveler' ),
				'default_value' => 'full-width',
				'description'   => esc_html__( 'Set masonry layout. Default is in grid.', 'backpacktraveler' ),
				'parent'        => $panel_blog_lists,
				'options'       => array(
					'in-grid'    => esc_html__( 'In Grid', 'backpacktraveler' ),
					'full-width' => esc_html__( 'Full Width', 'backpacktraveler' )
				)
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'          => 'blog_masonry_number_of_columns',
				'type'          => 'select',
				'label'         => esc_html__( 'Masonry - Number of Columns', 'backpacktraveler' ),
				'default_value' => 'four',
				'description'   => esc_html__( 'Set number of columns for your masonry blog lists. Default value is 4 columns', 'backpacktraveler' ),
				'parent'        => $panel_blog_lists,
				'options'       => backpacktraveler_mikado_get_number_of_columns_array( false, array( 'one', 'six' ) )
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'          => 'blog_masonry_space_between_items',
				'type'          => 'select',
				'label'         => esc_html__( 'Masonry - Space Between Items', 'backpacktraveler' ),
				'description'   => esc_html__( 'Set space size between posts for your masonry blog lists. Default value is normal', 'backpacktraveler' ),
				'default_value' => 'small',
				'options'       => backpacktraveler_mikado_get_space_between_items_array(),
				'parent'        => $panel_blog_lists
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'          => 'blog_list_featured_image_proportion',
				'type'          => 'select',
				'label'         => esc_html__( 'Masonry - Featured Image Proportion', 'backpacktraveler' ),
				'default_value' => 'fixed',
				'description'   => esc_html__( 'Choose type of proportions you want to use for featured images on masonry blog lists', 'backpacktraveler' ),
				'parent'        => $panel_blog_lists,
				'options'       => array(
					'fixed'    => esc_html__( 'Fixed', 'backpacktraveler' ),
					'original' => esc_html__( 'Original', 'backpacktraveler' )
				)
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'          => 'blog_pagination_type',
				'type'          => 'select',
				'label'         => esc_html__( 'Pagination Type', 'backpacktraveler' ),
				'description'   => esc_html__( 'Choose a pagination layout for Blog Lists', 'backpacktraveler' ),
				'parent'        => $panel_blog_lists,
				'default_value' => 'standard',
				'options'       => array(
					'standard'        => esc_html__( 'Standard', 'backpacktraveler' ),
					'load-more'       => esc_html__( 'Load More', 'backpacktraveler' ),
					'infinite-scroll' => esc_html__( 'Infinite Scroll', 'backpacktraveler' ),
					'no-pagination'   => esc_html__( 'No Pagination', 'backpacktraveler' )
				)
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'text',
				'name'          => 'number_of_chars',
				'default_value' => '40',
				'label'         => esc_html__( 'Number of Words in Excerpt', 'backpacktraveler' ),
				'description'   => esc_html__( 'Enter a number of words in excerpt (article summary). Default value is 40', 'backpacktraveler' ),
				'parent'        => $panel_blog_lists,
				'args'          => array(
					'col_width' => 3
				)
			)
		);

		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'show_tags_area_blog',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Enable Blog Tags on Standard List', 'backpacktraveler' ),
				'description'   => esc_html__( 'Enabling this option will show tags on standard blog list', 'backpacktraveler' ),
				'parent'        => $panel_blog_lists
			)
		);
		
		/**
		 * Blog Single
		 */
		$panel_blog_single = backpacktraveler_mikado_add_admin_panel(
			array(
				'page'  => '_blog_page',
				'name'  => 'panel_blog_single',
				'title' => esc_html__( 'Blog Single', 'backpacktraveler' )
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'        => 'blog_single_grid_space',
				'type'        => 'select',
				'label'       => esc_html__( 'Grid Layout Space', 'backpacktraveler' ),
				'description' => esc_html__( 'Choose a space between content layout and sidebar layout for Blog Single pages. Default value is large', 'backpacktraveler' ),
				'options'     => backpacktraveler_mikado_get_space_between_items_array( true ),
				'parent'      => $panel_blog_single
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'          => 'blog_single_sidebar_layout',
				'type'          => 'select',
				'label'         => esc_html__( 'Sidebar Layout', 'backpacktraveler' ),
				'description'   => esc_html__( 'Choose a sidebar layout for Blog Single pages', 'backpacktraveler' ),
				'default_value' => '',
				'parent'        => $panel_blog_single,
                'options'       => backpacktraveler_mikado_get_custom_sidebars_options()
			)
		);
		
		if ( is_array( $backpacktraveler_custom_sidebars ) && count( $backpacktraveler_custom_sidebars ) > 0 ) {
			backpacktraveler_mikado_add_admin_field(
				array(
					'name'        => 'blog_single_custom_sidebar_area',
					'type'        => 'selectblank',
					'label'       => esc_html__( 'Sidebar to Display', 'backpacktraveler' ),
					'description' => esc_html__( 'Choose a sidebar to display on Blog Single pages. Default sidebar is "Sidebar"', 'backpacktraveler' ),
					'parent'      => $panel_blog_single,
					'options'     => backpacktraveler_mikado_get_custom_sidebars(),
					'args'        => array(
						'select2' => true
					)
				)
			);
		}
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'show_title_area_blog',
				'default_value' => '',
				'label'         => esc_html__( 'Show Title Area', 'backpacktraveler' ),
				'description'   => esc_html__( 'Enabling this option will show title area on single post pages', 'backpacktraveler' ),
				'parent'        => $panel_blog_single,
				'options'       => backpacktraveler_mikado_get_yes_no_select_array(),
				'args'          => array(
					'col_width' => 3
				)
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'          => 'blog_single_title_in_title_area',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Show Post Title in Title Area', 'backpacktraveler' ),
				'description'   => esc_html__( 'Enabling this option will show post title in title area on single post pages', 'backpacktraveler' ),
				'parent'        => $panel_blog_single,
				'dependency' => array(
					'hide' => array(
						'show_title_area_blog' => 'no'
					)
				)
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'          => 'blog_single_related_posts',
				'type'          => 'yesno',
				'label'         => esc_html__( 'Show Related Posts', 'backpacktraveler' ),
				'description'   => esc_html__( 'Enabling this option will show related posts on single post pages', 'backpacktraveler' ),
				'parent'        => $panel_blog_single,
				'default_value' => 'no'
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'          => 'blog_single_comments',
				'type'          => 'yesno',
				'label'         => esc_html__( 'Show Comments Form', 'backpacktraveler' ),
				'description'   => esc_html__( 'Enabling this option will show comments form on single post pages', 'backpacktraveler' ),
				'parent'        => $panel_blog_single,
				'default_value' => 'yes'
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'blog_single_navigation',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Enable Prev/Next Single Post Navigation Links', 'backpacktraveler' ),
				'description'   => esc_html__( 'Enable navigation links through the blog posts (left and right arrows will appear)', 'backpacktraveler' ),
				'parent'        => $panel_blog_single
			)
		);
		
		$blog_single_navigation_container = backpacktraveler_mikado_add_admin_container(
			array(
				'name'            => 'mkdf_blog_single_navigation_container',
				'parent'          => $panel_blog_single,
				'dependency' => array(
					'show' => array(
						'blog_single_navigation' => 'yes'
					)
				)
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'blog_navigation_through_same_category',
				'default_value' => 'no',
				'label'         => esc_html__( 'Enable Navigation Only in Current Category', 'backpacktraveler' ),
				'description'   => esc_html__( 'Limit your navigation only through current category', 'backpacktraveler' ),
				'parent'        => $blog_single_navigation_container,
				'args'          => array(
					'col_width' => 3
				)
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'blog_author_info',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Show Author Info Box', 'backpacktraveler' ),
				'description'   => esc_html__( 'Enabling this option will display author name and descriptions on single post pages. Author biographic info field in Users section must contain some data', 'backpacktraveler' ),
				'parent'        => $panel_blog_single
			)
		);
		
		$blog_single_author_info_container = backpacktraveler_mikado_add_admin_container(
			array(
				'name'            => 'mkdf_blog_single_author_info_container',
				'parent'          => $panel_blog_single,
				'dependency' => array(
					'show' => array(
						'blog_author_info' => 'yes'
					)
				)
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'blog_author_info_email',
				'default_value' => 'no',
				'label'         => esc_html__( 'Show Author Email', 'backpacktraveler' ),
				'description'   => esc_html__( 'Enabling this option will show author email', 'backpacktraveler' ),
				'parent'        => $blog_single_author_info_container,
				'args'          => array(
					'col_width' => 3
				)
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'blog_single_author_social',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Show Author Social Icons', 'backpacktraveler' ),
				'description'   => esc_html__( 'Enabling this option will show author social icons on single post pages', 'backpacktraveler' ),
				'parent'        => $blog_single_author_info_container,
				'args'          => array(
					'col_width' => 3
				)
			)
		);
		
		do_action( 'backpacktraveler_mikado_action_blog_single_options_map', $panel_blog_single );
	}
	
	add_action( 'backpacktraveler_mikado_action_options_map', 'backpacktraveler_mikado_blog_options_map', backpacktraveler_mikado_set_options_map_position( 'blog' ) );
}