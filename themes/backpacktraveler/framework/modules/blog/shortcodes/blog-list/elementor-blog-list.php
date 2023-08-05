<?php

class BackpackTravelerMikadoElementorBlogList extends \Elementor\Widget_Base {

    public function get_name() {
        return 'mkdf_blog_list';
    }

    public function get_title() {
        return esc_html__( 'Blog List', 'backpacktraveler' );
    }

    public function get_icon() {
        return 'backpacktraveler-elementor-custom-icon backpacktraveler-elementor-blog-list';
    }

    public function get_categories() {
        return [ 'backpacktraveler' ];
    }

    protected function register_controls() {
        $this->start_controls_section(
            'general',
            [
                'label' => esc_html__( 'General', 'backpacktraveler' ),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'type',
            [
                'label'   => esc_html__( 'Type', 'backpacktraveler' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'standard' => esc_html__( 'Standard', 'backpacktraveler' ),
                    'alternating'    => esc_html__( 'Alternating', 'backpacktraveler' ),
                    'masonry'  => esc_html__( 'Masonry', 'backpacktraveler' ),
                    'custom'  => esc_html__( 'Custom', 'backpacktraveler' ),
                    'simple'   => esc_html__( 'Simple', 'backpacktraveler' ),
                    'minimal'  => esc_html__( 'Minimal', 'backpacktraveler' )
                ],
                'default' => 'standard'
            ]
        );

        $this->add_control(
            'number_of_posts',
            [
                'label'   => esc_html__( 'Number of Posts', 'backpacktraveler' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => '-1'
            ]
        );

        $this->add_control(
            'number_of_columns',
            [
                'label'     => esc_html__( 'Number of Columns', 'backpacktraveler' ),
                'type'      => \Elementor\Controls_Manager::SELECT,
                'options'   => backpacktraveler_mikado_get_number_of_columns_array( true ),
                'condition' => [
                    'type' => array( 'standard', 'custom', 'masonry', 'alternating' )
                ],
                'default'   => 'three'
            ]
        );

        $this->add_control(
            'space_between_items',
            [
                'label'     => esc_html__( 'Space Between Items', 'backpacktraveler' ),
                'type'      => \Elementor\Controls_Manager::SELECT,
                'options'   => backpacktraveler_mikado_get_space_between_items_array(),
                'condition' => [
                    'type' => array( 'standard', 'custom', 'masonry', 'alternating' )
                ],
                'default'   => 'large'
            ]
        );

        $this->add_control(
            'orderby',
            [
                'label'   => esc_html__( 'Order By', 'backpacktraveler' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'options' => backpacktraveler_mikado_get_query_order_by_array(),
                'default' => 'title'
            ]
        );

        $this->add_control(
            'order',
            [
                'label'   => esc_html__( 'Order', 'backpacktraveler' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'options' => backpacktraveler_mikado_get_query_order_array(),
                'default' => 'ASC'
            ]
        );

        $this->add_control(
            'category',
            [
                'label'       => esc_html__( 'Category', 'backpacktraveler' ),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'description' => esc_html__( 'Enter one category slug (leave empty for showing all categories)', 'backpacktraveler' )
            ]
        );

        $this->add_control(
            'image_size',
            [
                'label'     => esc_html__( 'Image Size', 'backpacktraveler' ),
                'type'      => \Elementor\Controls_Manager::SELECT,
                'options'   => [
                    'full'                       => esc_html__( 'Original', 'backpacktraveler' ),
                    'backpacktraveler_mikado_image_square'    => esc_html__( 'Square', 'backpacktraveler' ),
                    'backpacktraveler_mikado_image_landscape' => esc_html__( 'Landscape', 'backpacktraveler' ),
                    'backpacktraveler_mikado_image_portrait'  => esc_html__( 'Portrait', 'backpacktraveler' ),
                    'thumbnail'                  => esc_html__( 'Thumbnail', 'backpacktraveler' ),
                    'medium'                     => esc_html__( 'Medium', 'backpacktraveler' ),
                    'large'                      => esc_html__( 'Large', 'backpacktraveler' ),
                ],
                'condition' => [
                    'type' => array( 'standard', 'custom', 'masonry' )
                ],
                'default'   => 'full'
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'post_info',
            [
                'label' => esc_html__( 'Post Info', 'backpacktraveler' ),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'title_tag',
            [
                'label'   => esc_html__( 'Title Tag', 'backpacktraveler' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'options' => backpacktraveler_mikado_get_title_tag( true ),
                'default' => 'h4'
            ]
        );

        $this->add_control(
            'title_transform',
            [
                'label'   => esc_html__( 'Title Text Transform', 'backpacktraveler' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'options' => backpacktraveler_mikado_get_text_transform_array( true )
            ]
        );

        $this->add_control(
            'content_align',
            [
                'label'   => esc_html__( 'Content Alignment', 'backpacktraveler' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'left-alignment' => esc_html__( 'Left', 'backpacktraveler' ),
                    'center-alignment' => esc_html__( 'Center', 'backpacktraveler' ),
                ],
                'default' => 'left-alignment',
                'condition' => [
                    'type' => array( 'custom', 'standard' )
                ]
            ]
        );

        $this->add_control(
            'content_padding_top',
            [
                'label'   => esc_html__( 'Content Top Padding', 'backpacktraveler' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'condition' => [
                    'type' => array( 'custom' )
                ]
            ]
        );

        $this->add_control(
            'excerpt_length',
            [
                'label'       => esc_html__( 'Text Length', 'backpacktraveler' ),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'description' => esc_html__( 'Number of words', 'backpacktraveler' ),
                'condition'   => [
                    'type' => array( 'standard', 'custom', 'masonry', 'simple', 'alternating' )
                ],
                'default'     => '40'
            ]
        );

        $this->add_control(
            'post_info_border',
            [
                'label'     => esc_html__( 'Enable Post Info Border', 'backpacktraveler' ),
                'type'      => \Elementor\Controls_Manager::SELECT,
                'options'   => backpacktraveler_mikado_get_yes_no_select_array( false, true ),
                'condition' => [
                    'type' => array( 'custom' )
                ],
            ]
        );

        $this->add_control(
            'post_info_image',
            [
                'label'     => esc_html__( 'Enable Post Info Image', 'backpacktraveler' ),
                'type'      => \Elementor\Controls_Manager::SELECT,
                'options'   => backpacktraveler_mikado_get_yes_no_select_array( false, true ),
                'condition' => [
                    'type' => array( 'standard', 'custom', 'masonry' )
                ],
                'default' => 'yes'
            ]
        );

        $this->add_control(
            'post_info_author',
            [
                'label'     => esc_html__( 'Enable Post Info Author', 'backpacktraveler' ),
                'type'      => \Elementor\Controls_Manager::SELECT,
                'options'   => backpacktraveler_mikado_get_yes_no_select_array( false, true ),
                'default'   => 'yes'
            ]
        );

        $this->add_control(
            'post_info_date',
            [
                'label'     => esc_html__( 'Enable Post Info Date', 'backpacktraveler' ),
                'type'      => \Elementor\Controls_Manager::SELECT,
                'options'   => backpacktraveler_mikado_get_yes_no_select_array( false, true ),
                'default'   => 'yes'
            ]
        );

        $this->add_control(
            'post_info_category',
            [
                'label'     => esc_html__( 'Enable Post Info Category', 'backpacktraveler' ),
                'type'      => \Elementor\Controls_Manager::SELECT,
                'options'   => backpacktraveler_mikado_get_yes_no_select_array( false, true ),
                'default'   => 'yes'
            ]
        );

        $this->add_control(
            'post_info_destination',
            [
                'label'     => esc_html__( 'Enable Post Info Destination', 'backpacktraveler' ),
                'type'      => \Elementor\Controls_Manager::SELECT,
                'options'   => backpacktraveler_mikado_get_yes_no_select_array( false, true ),
                'default'   => 'yes'
            ]
        );

        $this->add_control(
            'post_info_comments',
            [
                'label'     => esc_html__( 'Enable Post Info Comments', 'backpacktraveler' ),
                'type'      => \Elementor\Controls_Manager::SELECT,
                'options'   => backpacktraveler_mikado_get_yes_no_select_array( false ),
                'default'   => 'no'
            ]
        );

        $this->add_control(
            'post_info_like',
            [
                'label'     => esc_html__( 'Enable Post Info Like', 'backpacktraveler' ),
                'type'      => \Elementor\Controls_Manager::SELECT,
                'options'   => backpacktraveler_mikado_get_yes_no_select_array( false ),
                'default'   => 'no'
            ]
        );

        $this->add_control(
            'post_info_share',
            [
                'label'     => esc_html__( 'Enable Post Info Share', 'backpacktraveler' ),
                'type'      => \Elementor\Controls_Manager::SELECT,
                'options'   => backpacktraveler_mikado_get_yes_no_select_array( false ),
                'default'   => 'no'
            ]
        );

        $this->add_control(
            'post_info_read_more',
            [
                'label'     => esc_html__( 'Enable Post Info Read More', 'backpacktraveler' ),
                'type'      => \Elementor\Controls_Manager::SELECT,
                'options'   => backpacktraveler_mikado_get_yes_no_select_array( false ),
                'default'   => 'no',
                'condition' => [
                    'type' => 'custom'
                ]
            ]
        );

        $this->add_control(
            'pagination_type',
            [
                'label'   => esc_html__( 'Pagination Type', 'backpacktraveler' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'no-pagination'       => esc_html__( 'None', 'backpacktraveler' ),
                    'standard-shortcodes' => esc_html__( 'Standard', 'backpacktraveler' ),
                    'load-more'           => esc_html__( 'Load More', 'backpacktraveler' ),
                    'infinite-scroll'     => esc_html__( 'Infinite Scroll', 'backpacktraveler' ),
                ],
                'default' => 'no-pagination'
            ]
        );

        $this->end_controls_section();
    }

    public function render() {
        $params = $this->get_settings_for_display();

        $default_atts = array(
            'type'                  => 'standard',
            'number_of_posts'       => '-1',
            'number_of_columns'     => 'four',
            'space_between_items'   => 'normal',
            'category'              => '',
            'orderby'               => 'title',
            'order'                 => 'ASC',
            'image_size'            => 'full',
            'title_tag'             => 'h3',
            'title_transform'       => '',
            'excerpt_length'        => '40',
            'post_info_image'       => 'yes',
            'post_info_author'      => 'yes',
            'post_info_date'        => 'yes',
            'post_info_category'    => 'yes',
            'post_info_comments'    => 'no',
            'post_info_like'        => 'no',
            'post_info_share'       => 'no',
            'pagination_type'       => 'no-pagination',
            'post_info_destination' => 'yes',
            'content_align'         => 'center',
            'post_info_read_more'   => 'no',
            'post_info_border'      => 'no',
            'content_padding_top'   => '',
        );

        $params = shortcode_atts( $default_atts, $params );

        foreach ( $params as $key => $value ) {
        	if( empty( $params[$key] ) ){
        		$params[$key] = '';
	        }
        }

        $queryArray             = $this->generateQueryArray( $params );
        $query_result           = new \WP_Query( $queryArray );
        $params['query_result'] = $query_result;
        if( $params['type'] == 'alternating' ){
            $params['post_info_image'] = 'yes';
        }

        $params['holder_data']    = $this->getHolderData( $params );
        $params['holder_classes'] = $this->getHolderClasses( $params, $default_atts );
        $params['content_styles'] = $this->getContentStyles( $params );
        $params['module']         = 'list';

        $params['max_num_pages'] = $query_result->max_num_pages;
        $params['paged']         = isset( $query_result->query['paged'] ) ? $query_result->query['paged'] : 1;

        $params['this_object'] = $this;

        ob_start();

        backpacktraveler_mikado_get_module_template_part( 'shortcodes/blog-list/holder', 'blog', $params['type'], $params );

        $html = ob_get_contents();

        ob_end_clean();

        echo backpacktraveler_mikado_get_module_part( $html );
    }

    public function getHolderClasses( $params, $default_atts ) {
        $holderClasses = array();

        $holderClasses[] = ! empty( $params['type'] ) ? 'mkdf-bl-' . $params['type'] : 'mkdf-bl-' . $default_atts['type'];
        $holderClasses[] = ! empty( $params['number_of_columns'] ) ? 'mkdf-' . $params['number_of_columns'] . '-columns' : 'mkdf-' . $default_atts['number_of_columns'] . '-columns';
        $holderClasses[] = ! empty( $params['space_between_items'] ) ? 'mkdf-' . $params['space_between_items'] . '-space' : 'mkdf-' . $default_atts['space_between_items'] . '-space';
        $holderClasses[] = ! empty( $params['pagination_type'] ) ? 'mkdf-bl-pag-' . $params['pagination_type'] : 'mkdf-bl-pag-' . $default_atts['pagination_type'];
        $holderClasses[] = $params['content_align'] == 'left-alignment' ? 'mkdf-bl-left-alignment' : '';
        $holderClasses[] = $params['post_info_border'] == 'yes' ? 'mkdf-bl-has-border' : '';

        return implode( ' ', $holderClasses );
    }

    public function getContentStyles($params){
        $styles = array();

        if ( $params['content_padding_top'] !== '' ) {
            $styles[] = 'padding-top:' . $params['content_padding_top'] ;
        }

        return implode( '; ', $styles );
    }

    public function getHolderData( $params ) {
        $dataString = '';

        if ( get_query_var( 'paged' ) ) {
            $paged = get_query_var( 'paged' );
        } elseif ( get_query_var( 'page' ) ) {
            $paged = get_query_var( 'page' );
        } else {
            $paged = 1;
        }

        $query_result = $params['query_result'];

        $params['max_num_pages'] = $query_result->max_num_pages;

        if ( ! empty( $paged ) ) {
            $params['next-page'] = $paged + 1;
        }

        foreach ( $params as $key => $value ) {
            if ( $key !== 'query_result' && $value !== '' ) {
                $new_key = str_replace( '_', '-', $key );

                $dataString .= ' data-' . $new_key . '=' . esc_attr( str_replace( ' ', '', $value ) );
            }
        }

        return $dataString;
    }

    public function generateQueryArray( $params ) {
        $queryArray = array(
            'post_status'    => 'publish',
            'post_type'      => 'post',
            'orderby'        => $params['orderby'],
            'order'          => $params['order'],
            'posts_per_page' => $params['number_of_posts'],
            'post__not_in'   => get_option( 'sticky_posts' )
        );

        if ( ! empty( $params['category'] ) ) {
            $queryArray['category_name'] = $params['category'];
        }

        if ( ! empty( $params['next_page'] ) ) {
            $queryArray['paged'] = $params['next_page'];
        } else {
            $query_array['paged'] = 1;
        }

        return $queryArray;
    }

    public function getTitleStyles( $params ) {
        $styles = array();

        if ( ! empty( $params['title_transform'] ) ) {
            $styles[] = 'text-transform: ' . $params['title_transform'];
        }

        return implode( ';', $styles );
    }

    /**
     * Filter blog categories
     *
     * @param $query
     *
     * @return array
     */
    public function blogCategoryAutocompleteSuggester( $query ) {
        global $wpdb;
        $post_meta_infos       = $wpdb->get_results( $wpdb->prepare( "SELECT a.slug AS slug, a.name AS category_title
					FROM {$wpdb->terms} AS a
					LEFT JOIN ( SELECT term_id, taxonomy  FROM {$wpdb->term_taxonomy} ) AS b ON b.term_id = a.term_id
					WHERE b.taxonomy = 'category' AND a.name LIKE '%%%s%%'", stripslashes( $query ) ), ARRAY_A );

        $results = array();
        if ( is_array( $post_meta_infos ) && ! empty( $post_meta_infos ) ) {
            foreach ( $post_meta_infos as $value ) {
                $data          = array();
                $data['value'] = $value['slug'];
                $data['label'] = ( ( strlen( $value['category_title'] ) > 0 ) ? esc_html__( 'Category', 'backpacktraveler' ) . ': ' . $value['category_title'] : '' );
                $results[]     = $data;
            }
        }

        return $results;
    }

    /**
     * Find blog category by slug
     * @since 4.4
     *
     * @param $query
     *
     * @return bool|array
     */
    public function blogCategoryAutocompleteRender( $query ) {
        $query = trim( $query['value'] ); // get value from requested
        if ( ! empty( $query ) ) {
            // get portfolio category
            $category = get_term_by( 'slug', $query, 'category' );
            if ( is_object( $category ) ) {

                $category_slug = $category->slug;
                $category_title = $category->name;

                $category_title_display = '';
                if ( ! empty( $category_title ) ) {
                    $category_title_display = esc_html__( 'Category', 'backpacktraveler' ) . ': ' . $category_title;
                }

                $data          = array();
                $data['value'] = $category_slug;
                $data['label'] = $category_title_display;

                return ! empty( $data ) ? $data : false;
            }

            return false;
        }

        return false;
    }
}

backpacktraveler_mikado_register_new_elementor_widget( new BackpackTravelerMikadoElementorBlogList() );
