<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( ! class_exists( 'BackpackTraveler_WooCommerce_Qode_Wishlist_For_WooCommerce' ) ) {
	class BackpackTraveler_WooCommerce_Qode_Wishlist_For_WooCommerce {
		private static $instance;

		public function __construct() {
			add_filter( 'qode_wishlist_for_woocommerce_filter_add_to_wishlist_behavior_default_value', array( $this, 'set_default_add_to_wishlist_behavior' ) );

			add_filter( 'qode_wishlist_for_woocommerce_filter_add_to_wishlist_type_default_value', array( $this, 'set_default_add_to_wishlist_type' ) );
			add_filter( 'qode_wishlist_for_woocommerce_filter_add_to_wishlist_loop_type_default_value', array( $this, 'set_default_add_to_wishlist_type' ) );

			add_filter( 'qode_wishlist_for_woocommerce_filter_button_loop_position_default_value', array( $this, 'set_default_button_loop_position' ) );
			add_filter( 'qode_wishlist_for_woocommerce_filter_add_to_wishlist_thumbnail_loop_position_default_value', array( $this, 'set_default_button_thumbnail_loop_position' ) );

			add_filter( 'qode_wishlist_for_woocommerce_filter_button_single_position_default_value', array( $this, 'set_default_button_loop_position' ) );
			add_filter( 'qode_wishlist_for_woocommerce_filter_add_to_wishlist_thumbnail_single_position_default_value', array( $this, 'set_default_button_thumbnail_loop_position' ) );

			add_filter( 'qode_wishlist_for_woocommerce_filter_show_table_title_default_value', array( $this, 'disable_wishlist_page_title' ) );
			add_filter( 'qode_wishlist_for_woocommerce_filter_enable_share_default_value', array( $this, 'disable_wishlist_page_social_share' ) );

			add_filter( 'qode_wishlist_for_woocommerce_filter_add_to_wishlist_wrapper_classes', array( $this, 'set_add_to_wishlist_theme_class' ) );
			add_filter( 'qode_wishlist_for_woocommerce_filter_wishlist_table_holder_classes', array( $this, 'set_add_to_wishlist_theme_class' ) );
		}

		/**
		 * @return BackpackTraveler_WooCommerce_Qode_Wishlist_For_WooCommerce
		 */
		public static function get_instance() {
			if ( is_null( self::$instance ) ) {
				self::$instance = new self();
			}

			return self::$instance;
		}

		public function set_default_add_to_wishlist_behavior() {
			return 'view';
		}

		public function set_default_add_to_wishlist_type() {
			return 'icon';
		}

		public function set_default_button_loop_position() {
			return 'on-thumbnail';
		}

		public function set_default_button_thumbnail_loop_position() {
			return 'top-right';
		}

		public function disable_wishlist_page_title() {
			return 'no';
		}

		public function disable_wishlist_page_social_share() {
			return 'no';
		}

		public function set_add_to_wishlist_theme_class( $classes ) {
			$classes[] = 'mkdf-backpacktraveler-theme';

			return $classes;
		}
	}

	BackpackTraveler_WooCommerce_Qode_Wishlist_For_WooCommerce::get_instance();
}