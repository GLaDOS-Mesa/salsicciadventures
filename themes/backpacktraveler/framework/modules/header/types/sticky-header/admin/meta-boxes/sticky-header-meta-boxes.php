<?php

if ( ! function_exists( 'backpacktraveler_mikado_sticky_header_meta_boxes_options_map' ) ) {
	function backpacktraveler_mikado_sticky_header_meta_boxes_options_map( $header_meta_box ) {
		
		$sticky_amount_container = backpacktraveler_mikado_add_admin_container(
			array(
				'parent'          => $header_meta_box,
				'name'            => 'sticky_amount_container_meta_container',
				'dependency' => array(
					'hide' => array(
						'mkdf_header_behaviour_meta'  => array( '', 'no-behavior','fixed-on-scroll','sticky-header-on-scroll-up' )
					)
				)
			)
		);
		
		backpacktraveler_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_scroll_amount_for_sticky_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Scroll Amount for Sticky Header Appearance', 'backpacktraveler' ),
				'description' => esc_html__( 'Define scroll amount for sticky header appearance', 'backpacktraveler' ),
				'parent'      => $sticky_amount_container,
				'args'        => array(
					'col_width' => 2,
					'suffix'    => 'px'
				)
			)
		);
		
		$backpacktraveler_custom_sidebars = backpacktraveler_mikado_get_custom_sidebars();
		if ( is_array( $backpacktraveler_custom_sidebars ) && count( $backpacktraveler_custom_sidebars ) > 0 ) {
			backpacktraveler_mikado_create_meta_box_field(
				array(
					'name'        => 'mkdf_custom_sticky_menu_area_sidebar_meta',
					'type'        => 'selectblank',
					'label'       => esc_html__( 'Choose Custom Widget Area In Sticky Header Menu Area', 'backpacktraveler' ),
					'description' => esc_html__( 'Choose custom widget area to display in sticky header menu area"', 'backpacktraveler' ),
					'parent'      => $header_meta_box,
					'options'     => $backpacktraveler_custom_sidebars,
					'dependency' => array(
						'show' => array(
							'mkdf_header_behaviour_meta' => array( 'sticky-header-on-scroll-up', 'sticky-header-on-scroll-down-up' )
						)
					)
				)
			);
		}
	}
	
	add_action( 'backpacktraveler_mikado_action_additional_header_area_meta_boxes_map', 'backpacktraveler_mikado_sticky_header_meta_boxes_options_map', 8, 1 );
}