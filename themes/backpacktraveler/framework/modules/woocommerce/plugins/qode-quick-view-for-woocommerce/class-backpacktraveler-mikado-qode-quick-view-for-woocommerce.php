<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( ! class_exists( 'BackpackTraveler_Qode_Quick_View_For_WooCommerce' ) ) {
	class BackpackTraveler_Qode_Quick_View_For_WooCommerce {
		private static $instance;

		public function __construct() {
			add_action( 'init', array( $this, 'init' ), 21 );
		}

		/**
		 * @return BackpackTraveler_Qode_Quick_View_For_WooCommerce
		 */
		public static function get_instance() {
			if ( is_null( self::$instance ) ) {
				self::$instance = new self();
			}

			return self::$instance;
		}

		public function init() {

			// Unset default templates modules.
			$this->unset_templates_modules();

			// Change default templates position.
			$this->change_templates_position();
		}

		public function unset_templates_modules() {
			//Override product title
			add_filter( 'qode_quick_view_for_woocommerce_filter_is_product_title_enabled', '__return_false' );
			add_action( 'qode_quick_view_for_woocommerce_action_product_summary', 'backpacktraveler_mikado_woocommerce_qode_quick_view_template_single_title', 5 );

			//Remove product meta
			add_filter( 'qode_quick_view_for_woocommerce_filter_is_product_meta_enabled', '__return_false', 30 );
		}

		public function change_templates_position() {
			// Remove qode quick view button button on shop page
			add_filter( 'qode_quick_view_for_woocommerce_filter_button_loop_position_default_value', array( $this, 'set_default_button_loop_position' ) );
			add_filter( 'qode_quick_view_for_woocommerce_filter_quick_view_button_label', '__return_false' );

			if ( class_exists( 'Qode_Quick_View_For_WooCommerce_Module' ) ) {
				$quick_view_object = Qode_Quick_View_For_WooCommerce_Module::get_instance();

				// Add qode quick view button shop archive pages
				add_action( 'backpacktraveler_mikado_action_before_pl_image', array( $quick_view_object, 'add_button' ), 10 );
			}
		}

		public function set_default_button_loop_position() {
			return 'shortcode'; // or empty, in order to remove default quick view button
		}
	}
}

if ( ! function_exists( 'archicon_core_init_quick_view_module' ) ) {
	/**
	 * Init main quick view module instance.
	 */
	function archicon_core_init_quick_view_module() {
		BackpackTraveler_Qode_Quick_View_For_WooCommerce::get_instance();
	}

	add_action( 'init', 'archicon_core_init_quick_view_module', 15 );
}