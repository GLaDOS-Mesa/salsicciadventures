<?php

if ( ! function_exists( 'backpacktraveler_mikado_sidebar_options_map' ) ) {
	function backpacktraveler_mikado_sidebar_options_map() {
		
		$sidebar_panel = backpacktraveler_mikado_add_admin_panel(
			array(
				'title' => esc_html__( 'Sidebar Area', 'backpacktraveler' ),
				'name'  => 'sidebar',
				'page'  => '_page_page'
			)
		);
		
		backpacktraveler_mikado_add_admin_field( array(
			'name'          => 'sidebar_layout',
			'type'          => 'select',
			'label'         => esc_html__( 'Sidebar Layout', 'backpacktraveler' ),
			'description'   => esc_html__( 'Choose a sidebar layout for pages', 'backpacktraveler' ),
			'parent'        => $sidebar_panel,
			'default_value' => 'no-sidebar',
            'options'       => backpacktraveler_mikado_get_custom_sidebars_options()
		) );
		
		$backpacktraveler_custom_sidebars = backpacktraveler_mikado_get_custom_sidebars();
		if ( is_array( $backpacktraveler_custom_sidebars ) && count( $backpacktraveler_custom_sidebars ) > 0 ) {
			backpacktraveler_mikado_add_admin_field( array(
				'name'        => 'custom_sidebar_area',
				'type'        => 'selectblank',
				'label'       => esc_html__( 'Sidebar to Display', 'backpacktraveler' ),
				'description' => esc_html__( 'Choose a sidebar to display on pages. Default sidebar is "Sidebar"', 'backpacktraveler' ),
				'parent'      => $sidebar_panel,
				'options'     => $backpacktraveler_custom_sidebars,
				'args'        => array(
					'select2' => true
				)
			) );
		}
	}
	
	add_action( 'backpacktraveler_mikado_action_options_map', 'backpacktraveler_mikado_sidebar_options_map', backpacktraveler_mikado_set_options_map_position( 'sidebar' ) );
}