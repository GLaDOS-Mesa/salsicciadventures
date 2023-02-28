<?php

if ( ! function_exists( 'backpacktraveler_mikado_map_post_audio_meta' ) ) {
	function backpacktraveler_mikado_map_post_audio_meta() {
		$audio_post_format_meta_box = backpacktraveler_mikado_create_meta_box(
			array(
				'scope' => array( 'post' ),
				'title' => esc_html__( 'Audio Post Format', 'backpacktraveler' ),
				'name'  => 'post_format_audio_meta'
			)
		);
		
		backpacktraveler_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_audio_type_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Audio Type', 'backpacktraveler' ),
				'description'   => esc_html__( 'Choose audio type', 'backpacktraveler' ),
				'parent'        => $audio_post_format_meta_box,
				'default_value' => 'social_networks',
				'options'       => array(
					'social_networks' => esc_html__( 'Audio Service', 'backpacktraveler' ),
					'self'            => esc_html__( 'Self Hosted', 'backpacktraveler' )
				)
			)
		);
		
		$mkdf_audio_embedded_container = backpacktraveler_mikado_add_admin_container(
			array(
				'parent' => $audio_post_format_meta_box,
				'name'   => 'mkdf_audio_embedded_container'
			)
		);
		
		backpacktraveler_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_post_audio_link_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Audio URL', 'backpacktraveler' ),
				'description' => esc_html__( 'Enter audio URL', 'backpacktraveler' ),
				'parent'      => $mkdf_audio_embedded_container,
				'dependency' => array(
					'show' => array(
						'mkdf_audio_type_meta' => 'social_networks'
					)
				)
			)
		);
		
		backpacktraveler_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_post_audio_custom_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Audio Link', 'backpacktraveler' ),
				'description' => esc_html__( 'Enter audio link', 'backpacktraveler' ),
				'parent'      => $mkdf_audio_embedded_container,
				'dependency' => array(
					'show' => array(
						'mkdf_audio_type_meta' => 'self'
					)
				)
			)
		);
	}
	
	add_action( 'backpacktraveler_mikado_action_meta_boxes_map', 'backpacktraveler_mikado_map_post_audio_meta', 23 );
}