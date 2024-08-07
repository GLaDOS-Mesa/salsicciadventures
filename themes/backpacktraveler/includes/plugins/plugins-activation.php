<?php

if ( ! function_exists( 'backpacktraveler_mikado_register_required_plugins' ) ) {
	/**
	 * Registers theme required and optional plugins. Hooks to tgmpa_register hook
	 */
	function backpacktraveler_mikado_register_required_plugins() {
		$plugins = array(
			array(
				'name'               => esc_html__( 'WPBakery Visual Composer', 'backpacktraveler' ),
				'slug'               => 'js_composer',
				'source'             => get_template_directory() . '/includes/plugins/js_composer.zip',
				'version'            => '7.6',
				'required'           => false,
				'force_activation'   => false,
				'force_deactivation' => false
			),
            array(
                'name'               => esc_html__( 'Elementor', 'backpacktraveler' ),
                'slug'               => 'elementor',
                'required'           => true,
				'force_activation'   => false,
				'force_deactivation' => false
            ),
			array(
				'name'               => esc_html__( 'Revolution Slider', 'backpacktraveler' ),
				'slug'               => 'revslider',
				'source'             => get_template_directory() . '/includes/plugins/revslider.zip',
				'version'            => '6.7.10',
				'required'           => true,
				'force_activation'   => false,
				'force_deactivation' => false
			),
			array(
				'name'               => esc_html__( 'BackpackTraveler Core', 'backpacktraveler' ),
				'slug'               => 'backpacktraveler-core',
				'source'             => get_template_directory() . '/includes/plugins/backpacktraveler-core.zip',
				'version'            => '1.8',
				'required'           => true,
				'force_activation'   => false,
				'force_deactivation' => false
			),
			array(
				'name'               => esc_html__( 'BackpackTraveler Instagram Feed', 'backpacktraveler' ),
				'slug'               => 'backpacktraveler-instagram-feed',
				'source'             => get_template_directory() . '/includes/plugins/backpacktraveler-instagram-feed.zip',
				'version'            => '2.1.3',
				'required'           => true,
				'force_activation'   => false,
				'force_deactivation' => false
			),
			array(
				'name'     => esc_html__( 'Custom Twitter Feeds', 'backpacktraveler' ),
				'slug'     => 'custom-twitter-feeds',
				'required' => false,
			),
			array(
				'name'     => esc_html__( 'Qi Addons for Elementor', 'backpacktraveler' ),
				'slug'     => 'qi-addons-for-elementor',
				'required'           => true,
				'force_activation'   => false,
				'force_deactivation' => false,
			),
			array(
				'name'     => esc_html__( 'QODE Wishlist for WooCommerce', 'backpacktraveler' ),
				'slug'     => 'qode-wishlist-for-woocommerce',
				'required'           => true,
				'force_activation'   => false,
				'force_deactivation' => false,
			),
			array(
				'name'     => esc_html__( 'QODE Quick View for WooCommerce', 'backpacktraveler' ),
				'slug'     => 'qode-quick-view-for-woocommerce',
				'required'           => true,
				'force_activation'   => false,
				'force_deactivation' => false,
			),
			array(
				'name'     => esc_html__( 'WooCommerce plugin', 'backpacktraveler' ),
				'slug'     => 'woocommerce',
				'required' => false
			),
			array(
				'name'     => esc_html__( 'Contact Form 7', 'backpacktraveler' ),
				'slug'     => 'contact-form-7',
				'required' => false
			),
            array(
                'name'     => esc_html__( 'Envato Market', 'backpacktraveler' ),
                'slug'     => 'envato-market',
                'source'   => 'https://envato.github.io/wp-envato-market/dist/envato-market.zip',
                'required' => false
            )
		);
		
		$config = array(
			'domain'       => 'backpacktraveler',
			'default_path' => '',
			'parent_slug'  => 'themes.php',
			'capability'   => 'edit_theme_options',
			'menu'         => 'install-required-plugins',
			'has_notices'  => true,
			'is_automatic' => false,
			'message'      => '',
			'strings'      => array(
				'page_title'                      => esc_html__( 'Install Required Plugins', 'backpacktraveler' ),
				'menu_title'                      => esc_html__( 'Install Plugins', 'backpacktraveler' ),
				'installing'                      => esc_html__( 'Installing Plugin: %s', 'backpacktraveler' ),
				'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'backpacktraveler' ),
				'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'backpacktraveler' ),
				'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'backpacktraveler' ),
				'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'backpacktraveler' ),
				'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'backpacktraveler' ),
				'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'backpacktraveler' ),
				'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'backpacktraveler' ),
				'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'backpacktraveler' ),
				'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'backpacktraveler' ),
				'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'backpacktraveler' ),
				'activate_link'                   => _n_noop( 'Activate installed plugin', 'Activate installed plugins', 'backpacktraveler' ),
				'return'                          => esc_html__( 'Return to Required Plugins Installer', 'backpacktraveler' ),
				'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'backpacktraveler' ),
				'complete'                        => esc_html__( 'All plugins installed and activated successfully. %s', 'backpacktraveler' ),
				'nag_type'                        => 'updated'
			)
		);
		
		tgmpa( $plugins, $config );
	}
	
	add_action( 'tgmpa_register', 'backpacktraveler_mikado_register_required_plugins' );
}