<?php

if ( ! function_exists( 'backpacktraveler_mikado_map_post_video_meta' ) ) {
	function backpacktraveler_mikado_map_post_video_meta() {
		$video_post_format_meta_box = backpacktraveler_mikado_create_meta_box(
			array(
				'scope' => array( 'post' ),
				'title' => esc_html__( 'Video Post Format', 'backpacktraveler' ),
				'name'  => 'post_format_video_meta'
			)
		);
		
		backpacktraveler_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_video_type_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Video Type', 'backpacktraveler' ),
				'description'   => esc_html__( 'Choose video type', 'backpacktraveler' ),
				'parent'        => $video_post_format_meta_box,
				'default_value' => 'social_networks',
				'options'       => array(
					'social_networks' => esc_html__( 'Video Service', 'backpacktraveler' ),
					'self'            => esc_html__( 'Self Hosted', 'backpacktraveler' )
				)
			)
		);
		
		$mkdf_video_embedded_container = backpacktraveler_mikado_add_admin_container(
			array(
				'parent' => $video_post_format_meta_box,
				'name'   => 'mkdf_video_embedded_container'
			)
		);
		
		backpacktraveler_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_post_video_link_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Video URL', 'backpacktraveler' ),
				'description' => esc_html__( 'Enter Video URL', 'backpacktraveler' ),
				'parent'      => $mkdf_video_embedded_container,
				'dependency' => array(
					'show' => array(
						'mkdf_video_type_meta' => 'social_networks'
					)
				)
			)
		);
		
		backpacktraveler_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_post_video_custom_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Video MP4', 'backpacktraveler' ),
				'description' => esc_html__( 'Enter video URL for MP4 format', 'backpacktraveler' ),
				'parent'      => $mkdf_video_embedded_container,
				'dependency' => array(
					'show' => array(
						'mkdf_video_type_meta' => 'self'
					)
				)
			)
		);
		
		backpacktraveler_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_post_video_image_meta',
				'type'        => 'image',
				'label'       => esc_html__( 'Video Image', 'backpacktraveler' ),
				'description' => esc_html__( 'Enter video image', 'backpacktraveler' ),
				'parent'      => $mkdf_video_embedded_container,
				'dependency' => array(
					'show' => array(
						'mkdf_video_type_meta' => 'self'
					)
				)
			)
		);
	}
	
	add_action( 'backpacktraveler_mikado_action_meta_boxes_map', 'backpacktraveler_mikado_map_post_video_meta', 22 );
}