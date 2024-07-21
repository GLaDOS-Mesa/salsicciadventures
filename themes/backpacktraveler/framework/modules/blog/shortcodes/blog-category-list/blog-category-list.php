<?php
namespace BackpackTravelerCore\CPT\Shortcodes\BlogCategoryList;

use BackpackTravelerCore\Lib;

class BlogCategoryList implements Lib\ShortcodeInterface {
	private $base;
	
	function __construct() {
		$this->base = 'mkdf_blog_category_list';
		
		add_action( 'vc_before_init', array( $this, 'vcMap' ) );
	}
	
	public function getBase() {
		return $this->base;
	}
	
	public function vcMap() {
		if ( function_exists( 'vc_map' ) ) {
			vc_map( array(
					'name'     => esc_html__( 'Blog Category List', 'backpacktraveler' ),
					'base'     => $this->getBase(),
					'category' => esc_html__( 'by BACKPACKTRAVELER', 'backpacktraveler' ),
					'icon'     => 'icon-wpb-blog-category-list extended-custom-icon',
					'params'   => array(
						array(
							'type'        => 'dropdown',
							'param_name'  => 'number_of_columns',
							'heading'     => esc_html__( 'Number of Columns', 'backpacktraveler' ),
							'value'       => array_flip( backpacktraveler_mikado_get_number_of_columns_array( true, array( 'one' ) ) ),
							'description' => esc_html__( 'Default value is Three', 'backpacktraveler' ),
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
							'type'        => 'textfield',
							'param_name'  => 'number_of_items',
							'heading'     => esc_html__( 'Number of Items Per Page', 'backpacktraveler' ),
							'description' => esc_html__( 'Set number of items for your blog category list. Default value is 6', 'backpacktraveler' ),
							'value'       => '-1'
						),
						array(
							'type'        => 'dropdown',
							'param_name'  => 'orderby',
							'heading'     => esc_html__( 'Order By', 'backpacktraveler' ),
							'value'       => array_flip( backpacktraveler_mikado_get_query_order_by_array(false, array(), true) ),
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
							'param_name'  => 'image_proportions',
							'heading'     => esc_html__( 'Image Proportions', 'backpacktraveler' ),
							'value'       => array(
								esc_html__( 'Original', 'backpacktraveler' )  => 'full',
								esc_html__( 'Square', 'backpacktraveler' )    => 'square',
								esc_html__( 'Landscape', 'backpacktraveler' ) => 'landscape',
								esc_html__( 'Portrait', 'backpacktraveler' )  => 'portrait',
								esc_html__( 'Medium', 'backpacktraveler' )    => 'medium',
								esc_html__( 'Large', 'backpacktraveler' )     => 'large'
							),
							'description' => esc_html__( 'Set image proportions for your blog category list', 'backpacktraveler' )
						),
						array(
							'type'       => 'dropdown',
							'param_name' => 'title_tag',
							'heading'    => esc_html__( 'Title Tag', 'backpacktraveler' ),
							'value'      => array_flip( backpacktraveler_mikado_get_title_tag( true ) )
						)
					)
				)
			);
		}
	}
	
	public function render( $atts, $content = null ) {
		$args   = array(
			'number_of_columns'   => 'six',
			'space_between_items' => 'normal',
			'number_of_items'     => '6',
			'orderby'             => 'date',
			'order'               => 'ASC',
			'image_proportions'   => 'full',
			'title_tag'           => 'h4'
		);
		$params = shortcode_atts( $args, $atts );

        $query_array              = $this->getQueryArray( $params );
        $params['query_results']  = get_terms( $query_array );

		$params['holder_classes'] = $this->getHolderClasses( $params, $args );
		$params['image_size']     = $this->getImageSize( $params );
		$params['title_tag']      = ! empty( $params['title_tag'] ) ? $params['title_tag'] : $args['title_tag'];

		ob_start();

		backpacktraveler_mikado_get_module_template_part( 'shortcodes/blog-category-list/holder', 'blog', '', $params );

		$html = ob_get_contents();

		ob_end_clean();

		return $html;
	}

    public function getQueryArray( $params ) {
        $query_array = array(
            'taxonomy'   => 'category',
            'number'     => $params['number_of_items'],
            'orderby'    => $params['orderby'],
            'order'      => $params['order'],
            'hide_empty' => true
        );

        return $query_array;
    }

	public function generateQueryArray( $params ) {
		$queryArray = array(
			'post_status'    => 'publish',
			'post_type'      => 'post',
			'orderby'        => $params['orderby'],
			'order'          => $params['order'],
			'posts_per_page' => $params['number_of_items'],
			'post__not_in'   => get_option( 'sticky_posts' )
		);

		if ( ! empty( $params['category'] ) ) {
			$queryArray['category_name'] = $params['category'];
		}

		return $queryArray;
	}
	
	public function getHolderClasses( $params, $args ) {
		$classes = array();
		
		$classes[] = ! empty( $params['number_of_columns'] ) ? 'mkdf-' . $params['number_of_columns'] . '-columns' : 'mkdf-' . $args['number_of_columns'] . '-columns';
		$classes[] = ! empty( $params['space_between_items'] ) ? 'mkdf-' . $params['space_between_items'] . '-space' : 'mkdf-' . $args['space_between_items'] . '-space';
		
		return implode( ' ', $classes );
	}
	
	public function getImageSize( $params ) {
		$thumb_size = 'full';
		
		if ( ! empty( $params['image_proportions'] ) ) {
			$image_size = $params['image_proportions'];
			
			switch ( $image_size ) {
				case 'landscape':
					$thumb_size = 'backpacktraveler_mikado_image_landscape';
					break;
				case 'portrait':
					$thumb_size = 'backpacktraveler_mikado_image_portrait';
					break;
				case 'square':
					$thumb_size = 'backpacktraveler_mikado_image_square';
					break;
				case 'medium':
					$thumb_size = 'medium';
					break;
				case 'large':
					$thumb_size = 'large';
					break;
				case 'full':
					$thumb_size = 'full';
					break;
			}
		}
		
		return $thumb_size;
	}
}