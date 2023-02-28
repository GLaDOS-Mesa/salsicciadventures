<?php

if ( ! function_exists( 'backpacktraveler_mikado_logo_options_map' ) ) {
	function backpacktraveler_mikado_logo_options_map() {
		
		$panel_logo = backpacktraveler_mikado_add_admin_panel(
			array(
				'page'  => '',
				'name'  => 'panel_logo',
				'title' => esc_html__( 'Branding', 'backpacktraveler' )
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'parent'        => $panel_logo,
				'type'          => 'yesno',
				'name'          => 'hide_logo',
				'default_value' => 'no',
				'label'         => esc_html__( 'Hide Logo', 'backpacktraveler' ),
				'description'   => esc_html__( 'Enabling this option will hide logo image', 'backpacktraveler' )
			)
		);
		
		$hide_logo_container = backpacktraveler_mikado_add_admin_container(
			array(
				'parent'          => $panel_logo,
				'name'            => 'hide_logo_container',
				'dependency' => array(
					'hide' => array(
						'hide_logo'  => 'yes'
					)
				)
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'          => 'logo_image',
				'type'          => 'image',
				'default_value' => MIKADO_ASSETS_ROOT . "/img/logo.png",
				'label'         => esc_html__( 'Logo Image - Default', 'backpacktraveler' ),
				'parent'        => $hide_logo_container
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'          => 'logo_image_dark',
				'type'          => 'image',
				'default_value' => MIKADO_ASSETS_ROOT . "/img/logo.png",
				'label'         => esc_html__( 'Logo Image - Dark', 'backpacktraveler' ),
				'parent'        => $hide_logo_container
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'          => 'logo_image_light',
				'type'          => 'image',
				'default_value' => MIKADO_ASSETS_ROOT . "/img/logo_white.png",
				'label'         => esc_html__( 'Logo Image - Light', 'backpacktraveler' ),
				'parent'        => $hide_logo_container
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'          => 'logo_image_sticky',
				'type'          => 'image',
				'default_value' => MIKADO_ASSETS_ROOT . "/img/logo.png",
				'label'         => esc_html__( 'Logo Image - Sticky', 'backpacktraveler' ),
				'parent'        => $hide_logo_container
			)
		);
		
		backpacktraveler_mikado_add_admin_field(
			array(
				'name'          => 'logo_image_mobile',
				'type'          => 'image',
				'default_value' => MIKADO_ASSETS_ROOT . "/img/logo.png",
				'label'         => esc_html__( 'Logo Image - Mobile', 'backpacktraveler' ),
				'parent'        => $hide_logo_container
			)
		);
	}
	
	add_action( 'backpacktraveler_mikado_add_general_options_map_first', 'backpacktraveler_mikado_logo_options_map');
}