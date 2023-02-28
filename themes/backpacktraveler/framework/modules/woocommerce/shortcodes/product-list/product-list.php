<?php

namespace BackpackTravelerCore\CPT\Shortcodes\ProductList;

use BackpackTravelerCore\Lib;

class ProductList implements Lib\ShortcodeInterface {
	private $base;
	
	function __construct() {
		$this->base = 'mkdf_product_list';
		
		add_action( 'vc_before_init', array( $this, 'vcMap' ) );
	}
	
	public function getBase() {
		return $this->base;
	}
	
	public function vcMap() {
		if ( function_exists( 'vc_map' ) ) {
			vc_map(
				array(
					'name'                      => esc_html__( 'Product List', 'backpacktraveler' ),
					'base'                      => $this->base,
					'icon'                      => 'icon-wpb-product-list extended-custom-icon',
					'category'                  => esc_html__( 'by BACKPACKTRAVELER', 'backpacktraveler' ),
					'allowed_container_element' => 'vc_row',
					'params'                    => array(
						array(
							'type'        => 'dropdown',
							'param_name'  => 'type',
							'heading'     => esc_html__( 'Type', 'backpacktraveler' ),
							'value'       => array(
								esc_html__( 'Standard', 'backpacktraveler' ) => 'standard',
								esc_html__( 'Masonry', 'backpacktraveler' )  => 'masonry'
							),
							'admin_label' => true
						),
						array(
							'type'        => 'dropdown',
							'param_name'  => 'info_position',
							'heading'     => esc_html__( 'Product Info Position', 'backpacktraveler' ),
							'value'       => array(
								esc_html__( 'Info On Image Hover', 'backpacktraveler' ) => 'info-on-image',
								esc_html__( 'Info Below Image', 'backpacktraveler' )    => 'info-below-image'
							),
							'save_always' => true
						),
						array(
							'type'       => 'textfield',
							'param_name' => 'number_of_posts',
							'heading'    => esc_html__( 'Number of Products', 'backpacktraveler' )
						),
						array(
							'type'        => 'dropdown',
							'param_name'  => 'number_of_columns',
							'heading'     => esc_html__( 'Number of Columns', 'backpacktraveler' ),
							'value'       => array_flip( backpacktraveler_mikado_get_number_of_columns_array( true ) ),
							'save_always' => true
						),
						array(
							'type'        => 'dropdown',
							'param_name'  => 'space_between_items',
							'heading'     => esc_html__( 'Space Between Items', 'backpacktraveler' ),
							'value'       => array_flip( backpacktraveler_mikado_get_space_between_items_array() ),
							'save_always' => true
						),
						array(
							'type'        => 'dropdown',
							'param_name'  => 'orderby',
							'heading'     => esc_html__( 'Order By', 'backpacktraveler' ),
							'value'       => array_flip( backpacktraveler_mikado_get_query_order_by_array( false, array( 'on-sale' => esc_html__( 'On Sale', 'backpacktraveler' ) ) ) ),
							'save_always' => true
						),
						array(
							'type'        => 'dropdown',
							'param_name'  => 'order',
							'heading'     => esc_html__( 'Order', 'backpacktraveler' ),
							'value'       => array_flip( backpacktraveler_mikado_get_query_order_array() ),
							'save_always' => true
						),
						array(
							'type'        => 'dropdown',
							'param_name'  => 'taxonomy_to_display',
							'heading'     => esc_html__( 'Choose Sorting Taxonomy', 'backpacktraveler' ),
							'value'       => array(
								esc_html__( 'Category', 'backpacktraveler' ) => 'category',
								esc_html__( 'Tag', 'backpacktraveler' )      => 'tag',
								esc_html__( 'Id', 'backpacktraveler' )       => 'id'
							),
							'save_always' => true,
							'description' => esc_html__( 'If you would like to display only certain products, this is where you can select the criteria by which you would like to choose which products to display', 'backpacktraveler' )
						),
						array(
							'type'        => 'textfield',
							'param_name'  => 'taxonomy_values',
							'heading'     => esc_html__( 'Enter Taxonomy Values', 'backpacktraveler' ),
							'description' => esc_html__( 'Separate values (category slugs, tags, or post IDs) with a comma', 'backpacktraveler' )
						),
						array(
							'type'       => 'dropdown',
							'param_name' => 'image_size',
							'heading'    => esc_html__( 'Image Proportions', 'backpacktraveler' ),
							'value'      => array(
								esc_html__( 'Default', 'backpacktraveler' )        => '',
								esc_html__( 'Original', 'backpacktraveler' )       => 'full',
								esc_html__( 'Square', 'backpacktraveler' )         => 'square',
								esc_html__( 'Landscape', 'backpacktraveler' )      => 'landscape',
								esc_html__( 'Portrait', 'backpacktraveler' )       => 'portrait',
								esc_html__( 'Medium', 'backpacktraveler' )         => 'medium',
								esc_html__( 'Large', 'backpacktraveler' )          => 'large',
								esc_html__( 'Shop Single', 'backpacktraveler' )    => 'woocommerce_single',
								esc_html__( 'Shop Thumbnail', 'backpacktraveler' ) => 'woocommerce_thumbnail'
							),
							'save_always' => true
						),
						array(
							'type'       => 'dropdown',
							'param_name' => 'display_title',
							'heading'    => esc_html__( 'Display Title', 'backpacktraveler' ),
							'value'      => array_flip( backpacktraveler_mikado_get_yes_no_select_array( false, true ) ),
							'group'      => esc_html__( 'Product Info', 'backpacktraveler' ),
							'dependency' => array( 'element' => 'info_position', 'value'   => array( 'info-below-image' ) )
						),
						array(
							'type'       => 'dropdown',
							'param_name' => 'title_tag',
							'heading'    => esc_html__( 'Title Tag', 'backpacktraveler' ),
							'value'      => array_flip( backpacktraveler_mikado_get_title_tag( true ) ),
							'dependency' => array( 'element' => 'display_title', 'value' => array( 'yes' ) ),
							'group'      => esc_html__( 'Product Info Style', 'backpacktraveler' )
						),
						array(
							'type'       => 'dropdown',
							'param_name' => 'title_transform',
							'heading'    => esc_html__( 'Title Text Transform', 'backpacktraveler' ),
							'value'      => array_flip( backpacktraveler_mikado_get_text_transform_array( true ) ),
							'dependency' => array( 'element' => 'display_title', 'value' => array( 'yes' ) ),
							'group'      => esc_html__( 'Product Info Style', 'backpacktraveler' )
						),
						array(
							'type'       => 'dropdown',
							'param_name' => 'display_category',
							'heading'    => esc_html__( 'Display Category', 'backpacktraveler' ),
							'value'      => array_flip( backpacktraveler_mikado_get_yes_no_select_array( false ) ),
							'group'      => esc_html__( 'Product Info', 'backpacktraveler' ),
							'dependency' => array( 'element' => 'info_position', 'value'   => array( 'info-below-image' ) )
						),
						array(
							'type'       => 'dropdown',
							'param_name' => 'display_excerpt',
							'heading'    => esc_html__( 'Display Excerpt', 'backpacktraveler' ),
							'value'      => array_flip( backpacktraveler_mikado_get_yes_no_select_array( false ) ),
							'group'      => esc_html__( 'Product Info', 'backpacktraveler' ),
							'dependency' => array( 'element' => 'info_position', 'value'   => array( 'info-below-image' ) )
						),
						array(
							'type'        => 'textfield',
							'param_name'  => 'excerpt_length',
							'heading'     => esc_html__( 'Excerpt Length', 'backpacktraveler' ),
							'description' => esc_html__( 'Number of characters', 'backpacktraveler' ),
							'dependency'  => array( 'element' => 'display_excerpt', 'value' => array( 'yes' ) ),
							'group'       => esc_html__( 'Product Info Style', 'backpacktraveler' )
						),
						array(
							'type'       => 'dropdown',
							'param_name' => 'display_rating',
							'heading'    => esc_html__( 'Display Rating', 'backpacktraveler' ),
							'value'      => array_flip( backpacktraveler_mikado_get_yes_no_select_array( false, true ) ),
							'group'      => esc_html__( 'Product Info', 'backpacktraveler' ),
							'dependency' => array( 'element' => 'info_position', 'value'   => array( 'info-below-image' ) )
						),
						array(
							'type'       => 'dropdown',
							'param_name' => 'display_price',
							'heading'    => esc_html__( 'Display Price', 'backpacktraveler' ),
							'value'      => array_flip( backpacktraveler_mikado_get_yes_no_select_array( false, true ) ),
							'group'      => esc_html__( 'Product Info', 'backpacktraveler' ),
							'dependency' => array( 'element' => 'info_position', 'value'   => array( 'info-below-image' ) )
						),
						array(
							'type'       => 'dropdown',
							'param_name' => 'display_button',
							'heading'    => esc_html__( 'Display Button', 'backpacktraveler' ),
							'value'      => array_flip( backpacktraveler_mikado_get_yes_no_select_array( false, true ) ),
							'group'      => esc_html__( 'Product Info', 'backpacktraveler' ),
							'dependency' => array( 'element' => 'info_position', 'value'   => array( 'info-below-image' ) )
						),
						array(
							'type'       => 'dropdown',
							'param_name' => 'button_skin',
							'heading'    => esc_html__( 'Button Skin', 'backpacktraveler' ),
							'value'      => array(
								esc_html__( 'Default', 'backpacktraveler' ) => 'default',
								esc_html__( 'Light', 'backpacktraveler' )   => 'light',
								esc_html__( 'Dark', 'backpacktraveler' )    => 'dark'
							),
							'dependency' => array( 'element' => 'display_button', 'value' => array( 'yes' ) ),
							'group'      => esc_html__( 'Product Info Style', 'backpacktraveler' )
						),
						array(
							'type'       => 'colorpicker',
							'param_name' => 'shader_background_color',
							'heading'    => esc_html__( 'Shader Background Color', 'backpacktraveler' ),
							'group'      => esc_html__( 'Product Info Style', 'backpacktraveler' ),
							'dependency' => array( 'element' => 'info_position', 'value'   => array( 'info-below-image' ) )
						),
						array(
							'type'       => 'dropdown',
							'param_name' => 'info_bottom_text_align',
							'heading'    => esc_html__( 'Product Info Text Alignment', 'backpacktraveler' ),
							'value'      => array(
								esc_html__( 'Default', 'backpacktraveler' ) => '',
								esc_html__( 'Left', 'backpacktraveler' )    => 'left',
								esc_html__( 'Center', 'backpacktraveler' )  => 'center',
								esc_html__( 'Right', 'backpacktraveler' )   => 'right'
							),
							'dependency' => array( 'element' => 'info_position', 'value'   => array( 'info-below-image' ) ),
							'group'      => esc_html__( 'Product Info Style', 'backpacktraveler' )
						),
						array(
							'type'       => 'textfield',
							'param_name' => 'info_bottom_margin',
							'heading'    => esc_html__( 'Product Info Bottom Margin (px)', 'backpacktraveler' ),
							'dependency' => array( 'element' => 'info_position', 'value'   => array( 'info-below-image' ) ),
							'group'      => esc_html__( 'Product Info Style', 'backpacktraveler' )
						)
					)
				)
			);
		}
	}
	
	public function render( $atts, $content = null ) {
		$default_atts = array(
			'type'                    => 'standard',
			'info_position'           => 'info-on-image',
			'number_of_posts'         => '8',
			'number_of_columns'       => 'four',
			'space_between_items'     => 'normal',
			'orderby'                 => 'date',
			'order'                   => 'ASC',
			'taxonomy_to_display'     => 'category',
			'taxonomy_values'         => '',
			'image_size'              => 'full',
			'display_title'           => 'yes',
			'title_tag'               => 'h5',
			'title_transform'         => '',
			'display_category'        => 'no',
			'display_excerpt'         => 'no',
			'excerpt_length'          => '20',
			'display_rating'          => 'yes',
			'display_price'           => 'yes',
			'display_button'          => 'yes',
			'button_skin'             => 'default',
			'shader_background_color' => '',
			'info_bottom_text_align'  => '',
			'info_bottom_margin'      => ''
		);
		$params       = shortcode_atts( $default_atts, $atts );
		
		$params['class_name']     = 'pli';
		$params['type']           = ! empty( $params['type'] ) ? $params['type'] : $default_atts['type'];
		$params['info_position']  = ! empty( $params['info_position'] ) ? $params['info_position'] : $default_atts['info_position'];
		$params['title_tag']      = ! empty( $params['title_tag'] ) ? $params['title_tag'] : $default_atts['title_tag'];
		
		$additional_params                   = array();
		$additional_params['holder_classes'] = $this->getHolderClasses( $params, $default_atts );
		
		$queryArray                        = $this->generateProductQueryArray( $params );
		$query_result                      = new \WP_Query( $queryArray );
		$additional_params['query_result'] = $query_result;
		
		$params['this_object'] = $this;
		
		$html = backpacktraveler_mikado_get_woo_shortcode_module_template_part( 'templates/product-list', 'product-list', $params['type'], $params, $additional_params );
		
		return $html;
	}
	
	private function getHolderClasses( $params, $default_atts ) {
		$holderClasses   = array();
		$holderClasses[] = ! empty( $params['type'] ) ? 'mkdf-' . $params['type'] . '-layout' : 'mkdf-' . $default_atts['type'] . '-layout';
		$holderClasses[] = ! empty( $params['number_of_columns'] ) ? 'mkdf-' . $params['number_of_columns'] . '-columns' : 'mkdf-' . $default_atts['number_of_columns'] . '-columns';
		$holderClasses[] = ! empty( $params['space_between_items'] ) ? 'mkdf-' . $params['space_between_items'] . '-space' : 'mkdf-' . $default_atts['space_between_items'] . '-space';
		$holderClasses[] = ! empty( $params['info_position'] ) ? 'mkdf-' . $params['info_position'] : 'mkdf-' . $default_atts['info_position'];
		
		return implode( ' ', $holderClasses );
	}
	
	private function generateProductQueryArray( $params ) {
		$queryArray = array(
			'post_status'         => 'publish',
			'post_type'           => 'product',
			'ignore_sticky_posts' => 1,
			'posts_per_page'      => $params['number_of_posts'],
			'orderby'             => $params['orderby'],
			'order'               => $params['order']
		);
		
		if ( $params['orderby'] === 'on-sale' ) {
			$queryArray['no_found_rows'] = 1;
			$queryArray['post__in']      = array_merge( array( 0 ), wc_get_product_ids_on_sale() );
		}
		
		if ( $params['taxonomy_to_display'] !== '' && $params['taxonomy_to_display'] === 'category' ) {
			$queryArray['product_cat'] = $params['taxonomy_values'];
		}
		
		if ( $params['taxonomy_to_display'] !== '' && $params['taxonomy_to_display'] === 'tag' ) {
			$queryArray['product_tag'] = $params['taxonomy_values'];
		}
		
		if ( $params['taxonomy_to_display'] !== '' && $params['taxonomy_to_display'] === 'id' ) {
			$idArray                = $params['taxonomy_values'];
			$ids                    = explode( ',', $idArray );
			$queryArray['post__in'] = $ids;
		}
		
		return $queryArray;
	}
	
	public function getItemClasses( $params ) {
		$itemClasses = array();
		
		$image_size_meta = get_post_meta( get_the_ID(), 'mkdf_product_featured_image_size', true );
		
		if ( ! empty( $image_size_meta ) ) {
			$itemClasses[] = 'mkdf-fixed-masonry-item mkdf-masonry-size-' . $image_size_meta;
		}
		
		return implode( ' ', $itemClasses );
	}
	
	public function getTitleStyles( $params ) {
		$styles = array();
		
		if ( ! empty( $params['title_transform'] ) ) {
			$styles[] = 'text-transform: ' . $params['title_transform'];
		}
		
		return implode( ';', $styles );
	}
	
	public function getShaderStyles( $params ) {
		$styles = array();
		
		if ( ! empty( $params['shader_background_color'] ) ) {
			$styles[] = 'background-color: ' . $params['shader_background_color'];
		}
		
		return implode( ';', $styles );
	}
	
	public function getTextWrapperStyles( $params ) {
		$styles = array();
		
		if ( ! empty( $params['info_bottom_text_align'] ) ) {
			$styles[] = 'text-align: ' . $params['info_bottom_text_align'];
		}
		
		if ( $params['info_bottom_margin'] !== '' ) {
			$styles[] = 'margin-bottom: ' . backpacktraveler_mikado_filter_px( $params['info_bottom_margin'] ) . 'px';
		}
		
		return implode( ';', $styles );
	}
}