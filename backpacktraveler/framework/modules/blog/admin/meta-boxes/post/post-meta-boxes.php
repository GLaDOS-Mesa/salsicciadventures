<?php

/*** Post Settings ***/

if ( ! function_exists( 'backpacktraveler_mikado_map_post_meta' ) ) {
	function backpacktraveler_mikado_map_post_meta() {
		
		$post_meta_box = backpacktraveler_mikado_create_meta_box(
			array(
				'scope' => array( 'post' ),
				'title' => esc_html__( 'Post', 'backpacktraveler' ),
				'name'  => 'post-meta'
			)
		);

        backpacktraveler_mikado_create_meta_box_field(
            array(
                'name'          => 'mkdf_enable_assign_destination_blog_meta',
                'type'          => 'select',
                'label'         => esc_html__( 'Assign Destination to this post?', 'backpacktraveler' ),
                'parent'        => $post_meta_box,
                'default_value' => 'yes',
                'options'       => backpacktraveler_mikado_get_yes_no_select_array(false, true)
            )
        );

        $assign_destionation_container = backpacktraveler_mikado_add_admin_container(
            array(
                'type'            => 'container',
                'name'            => 'post_assign_destination_container',
                'parent'          => $post_meta_box,
                'dependency' => array(
                    'show' => array(
                        'mkdf_enable_assign_destination_blog_meta'  => 'yes'
                    )
                )
            )
        );

        $all_destinations = array();
        $destination_args = array(
            'post_type' => 'destination-item',
            'posts_per_page' => '-1'
        );
        $destinations = get_posts($destination_args);
        foreach ( $destinations as $destination ) {
            $all_destinations[ $destination->ID ] = $destination->post_title;
        }

        backpacktraveler_mikado_create_meta_box_field(
            array(
                'name'        => 'mkdf_assign_destination_blog_meta',
                'type'        => 'select',
                'label'       => esc_html__( 'Assign Destination', 'backpacktraveler' ),
                'description' => esc_html__( 'Choose one of existing Destinations to assign to this post', 'backpacktraveler' ),
                'parent'      => $assign_destionation_container,
                'options'     => $all_destinations,
                'args'        => array(
                    'select2' => true
                ),
            )
        );

        backpacktraveler_mikado_create_meta_box_field(
            array(
                'name'          => 'mkdf_choose_type_blog_meta',
                'type'          => 'select',
                'default_value' => 'standard',
                'label'         => esc_html__( 'Blog Single Type', 'backpacktraveler' ),
                'description'   => esc_html__( 'Choose between one of two predefined types for blog single pages', 'backpacktraveler' ),
                'parent'        => $post_meta_box,
                'options'       => array(
                    'standard' => esc_html__('Standard', 'backpacktraveler'),
                    'centered' => esc_html__('Centered with Full Width Featured Image', 'backpacktraveler'),
                )
            )
        );

		backpacktraveler_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_featured_image_rounded_meta',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Show Rounded Featured Image', 'backpacktraveler' ),
				'description'   => esc_html__( 'Enabling this option will show rounded image on Custom blog lists and Masonry template', 'backpacktraveler' ),
				'parent'        => $post_meta_box,
				'options'       => backpacktraveler_mikado_get_yes_no_select_array(false,false)
			)
		);
		
		backpacktraveler_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_show_title_area_blog_meta',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Show Title Area', 'backpacktraveler' ),
				'description'   => esc_html__( 'Enabling this option will show title area on your single post page', 'backpacktraveler' ),
				'parent'        => $post_meta_box,
				'options'       => backpacktraveler_mikado_get_yes_no_select_array()
			)
		);
		
		backpacktraveler_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_blog_single_sidebar_layout_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Sidebar Layout', 'backpacktraveler' ),
				'description'   => esc_html__( 'Choose a sidebar layout for Blog single page', 'backpacktraveler' ),
				'default_value' => '',
				'parent'        => $post_meta_box,
                'options'       => backpacktraveler_mikado_get_custom_sidebars_options( true )
			)
		);
		
		$backpacktraveler_custom_sidebars = backpacktraveler_mikado_get_custom_sidebars();
		if ( count( $backpacktraveler_custom_sidebars ) > 0 ) {
			backpacktraveler_mikado_create_meta_box_field( array(
				'name'        => 'mkdf_blog_single_custom_sidebar_area_meta',
				'type'        => 'selectblank',
				'label'       => esc_html__( 'Sidebar to Display', 'backpacktraveler' ),
				'description' => esc_html__( 'Choose a sidebar to display on Blog single page. Default sidebar is "Sidebar"', 'backpacktraveler' ),
				'parent'      => $post_meta_box,
				'options'     => backpacktraveler_mikado_get_custom_sidebars(),
				'args' => array(
					'select2' => true
				)
			) );
		}
		
		backpacktraveler_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_blog_list_featured_image_meta',
				'type'        => 'image',
				'label'       => esc_html__( 'Blog List Image', 'backpacktraveler' ),
				'description' => esc_html__( 'Choose an Image for displaying in blog list. If not uploaded, featured image will be shown.', 'backpacktraveler' ),
				'parent'      => $post_meta_box
			)
		);

		do_action('backpacktraveler_mikado_action_blog_post_meta', $post_meta_box);
	}
	
	add_action( 'backpacktraveler_mikado_action_meta_boxes_map', 'backpacktraveler_mikado_map_post_meta', 20 );
}
