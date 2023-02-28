<?php

if ( ! function_exists( 'backpacktraveler_mikado_map_sidebar_meta' ) ) {
	function backpacktraveler_mikado_map_sidebar_meta() {
	    $scope = apply_filters( 'backpacktraveler_mikado_filter_set_scope_for_meta_boxes', array( 'page' ), 'sidebar_meta' );

        if (($key = array_search('destination-item', $scope)) !== false) {
            unset($scope[$key]);
        }

		$mkdf_sidebar_meta_box = backpacktraveler_mikado_create_meta_box(
			array(
				'scope' => $scope,
				'title' => esc_html__( 'Sidebar', 'backpacktraveler' ),
				'name'  => 'sidebar_meta'
			)
		);
		
		backpacktraveler_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_sidebar_layout_meta',
				'type'        => 'select',
				'label'       => esc_html__( 'Sidebar Layout', 'backpacktraveler' ),
				'description' => esc_html__( 'Choose the sidebar layout', 'backpacktraveler' ),
				'parent'      => $mkdf_sidebar_meta_box,
                'options'       => backpacktraveler_mikado_get_custom_sidebars_options( true )
			)
		);
		
		$mkdf_custom_sidebars = backpacktraveler_mikado_get_custom_sidebars();
		if ( count( $mkdf_custom_sidebars ) > 0 ) {
			backpacktraveler_mikado_create_meta_box_field(
				array(
					'name'        => 'mkdf_custom_sidebar_area_meta',
					'type'        => 'selectblank',
					'label'       => esc_html__( 'Choose Widget Area in Sidebar', 'backpacktraveler' ),
					'description' => esc_html__( 'Choose Custom Widget area to display in Sidebar"', 'backpacktraveler' ),
					'parent'      => $mkdf_sidebar_meta_box,
					'options'     => $mkdf_custom_sidebars,
					'args'        => array(
						'select2' => true
					)
				)
			);
		}
	}
	
	add_action( 'backpacktraveler_mikado_action_meta_boxes_map', 'backpacktraveler_mikado_map_sidebar_meta', 31 );
}