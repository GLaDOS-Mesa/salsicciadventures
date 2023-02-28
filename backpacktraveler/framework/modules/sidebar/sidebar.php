<?php

if ( ! function_exists( 'backpacktraveler_mikado_register_sidebars' ) ) {
	/**
	 * Function that registers theme's sidebars
	 */
	function backpacktraveler_mikado_register_sidebars() {
		
		register_sidebar(
			array(
				'id'            => 'sidebar',
				'name'          => esc_html__( 'Sidebar', 'backpacktraveler' ),
				'description'   => esc_html__( 'Default Sidebar area. In order to display this area you need to enable it through global theme options or on page meta box options.', 'backpacktraveler' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<div class="mkdf-widget-title-holder"><span class="mkdf-widget-title-before"></span><h6 class="mkdf-widget-title">',
				'after_title'   => '</h6></div>'
			)
		);
	}
	
	add_action( 'widgets_init', 'backpacktraveler_mikado_register_sidebars', 1 );
}

if ( ! function_exists( 'backpacktraveler_mikado_add_support_custom_sidebar' ) ) {
	/**
	 * Function that adds theme support for custom sidebars. It also creates BackpackTravelerMikadoClassSidebar object
	 */
	function backpacktraveler_mikado_add_support_custom_sidebar() {
		add_theme_support( 'BackpackTravelerMikadoClassSidebar' );
		
		if ( get_theme_support( 'BackpackTravelerMikadoClassSidebar' ) ) {
			new BackpackTravelerMikadoClassSidebar();
		}
	}
	
	add_action( 'after_setup_theme', 'backpacktraveler_mikado_add_support_custom_sidebar' );
}