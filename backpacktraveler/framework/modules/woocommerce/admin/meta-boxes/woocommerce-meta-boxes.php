<?php

if ( ! function_exists( 'backpacktraveler_mikado_map_woocommerce_meta' ) ) {
	function backpacktraveler_mikado_map_woocommerce_meta() {
		
		$woocommerce_meta_box = backpacktraveler_mikado_create_meta_box(
			array(
				'scope' => array( 'product' ),
				'title' => esc_html__( 'Product Meta', 'backpacktraveler' ),
				'name'  => 'woo_product_meta'
			)
		);
		
		backpacktraveler_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_product_featured_image_size',
				'type'        => 'select',
				'label'       => esc_html__( 'Dimensions for Product List Shortcode', 'backpacktraveler' ),
				'description' => esc_html__( 'Choose image layout when it appears in Mikado Product List - Masonry layout shortcode', 'backpacktraveler' ),
				'options'     => array(
					''                   => esc_html__( 'Default', 'backpacktraveler' ),
					'small'              => esc_html__( 'Small', 'backpacktraveler' ),
					'large-width'        => esc_html__( 'Large Width', 'backpacktraveler' ),
					'large-height'       => esc_html__( 'Large Height', 'backpacktraveler' ),
					'large-width-height' => esc_html__( 'Large Width Height', 'backpacktraveler' )
				),
				'parent'      => $woocommerce_meta_box
			)
		);
		
		backpacktraveler_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_show_title_area_woo_meta',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Show Title Area', 'backpacktraveler' ),
				'description'   => esc_html__( 'Disabling this option will turn off page title area', 'backpacktraveler' ),
				'options'       => backpacktraveler_mikado_get_yes_no_select_array(),
				'parent'        => $woocommerce_meta_box
			)
		);
		
		backpacktraveler_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_show_new_sign_woo_meta',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Show New Sign', 'backpacktraveler' ),
				'description'   => esc_html__( 'Enabling this option will show new sign mark on product', 'backpacktraveler' ),
				'parent'        => $woocommerce_meta_box
			)
		);
	}
	
	add_action( 'backpacktraveler_mikado_action_meta_boxes_map', 'backpacktraveler_mikado_map_woocommerce_meta', 99 );
}