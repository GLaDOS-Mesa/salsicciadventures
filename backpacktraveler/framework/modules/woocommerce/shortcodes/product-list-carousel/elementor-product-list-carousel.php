<?php

class BackpackTravelerCoreElementorProductListCarousel extends \Elementor\Widget_Base {

    public function get_name() {
        return 'mkdf_product_list_carousel';
    }

    public function get_title() {
        return esc_html__( 'Product List - Carousel', 'backpacktraveler' );
    }

    public function get_icon() {
        return 'backpacktraveler-elementor-custom-icon backpacktraveler-elementor-product-list-carousel';
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
                    'simple'   => esc_html__( 'Simple', 'backpacktraveler' ),
                ],
                'default' => 'standard'
            ]
        );

        $this->add_control(
            'number_of_posts',
            [
                'label'   => esc_html__( 'Number of Products', 'backpacktraveler' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => '8'
            ]
        );

        $this->add_control(
            'space_between_items',
            [
                'label'     => esc_html__( 'Number of Columns', 'backpacktraveler' ),
                'type'      => \Elementor\Controls_Manager::SELECT,
                'options'   => backpacktraveler_mikado_get_space_between_items_array(),
                'condition' => [
                    'type' => array( 'standard' )
                ],
                'default'   => 'normal'
            ]
        );

        $this->add_control(
            'orderby',
            [
                'label'   => esc_html__( 'Order By', 'backpacktraveler' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'options' => backpacktraveler_mikado_get_query_order_by_array( false, array( 'on-sale' => esc_html__( 'On Sale', 'backpacktraveler' ) ) ),
                'default' => 'date'
            ]
        );

        $this->add_control(
            'order',
            [
                'label'   => esc_html__( 'Order', 'backpacktraveler' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'options' => backpacktraveler_mikado_get_query_order_array(),
                'order'   => 'ASC'
            ]
        );

        $this->add_control(
            'taxonomy_to_display',
            [
                'label'       => esc_html__( 'Choose Sorting Taxonomy', 'backpacktraveler' ),
                'type'        => \Elementor\Controls_Manager::SELECT,
                'options'     => [
                    'category' => esc_html__( 'Category', 'backpacktraveler' ),
                    'tag'      => esc_html__( 'Tag', 'backpacktraveler' ),
                    'id'       => esc_html__( 'Id', 'backpacktraveler' ),
                ],
                'default'     => 'category',
                'description' => esc_html__( 'If you would like to display only certain products, this is where you can select the criteria by which you would like to choose which products to display', 'backpacktraveler' )
            ]
        );

        $this->add_control(
            'taxonomy_values',
            [
                'label'       => esc_html__( 'Enter Taxonomy Values', 'backpacktraveler' ),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'description' => esc_html__( 'Separate values (category slugs, tags, or post IDs) with a comma', 'backpacktraveler' )
            ]
        );

        $this->add_control(
            'image_size',
            [
                'label'   => esc_html__( 'Image Proportions', 'backpacktraveler' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    ''                      => esc_html__( 'Default', 'backpacktraveler' ),
                    'full'                  => esc_html__( 'Original', 'backpacktraveler' ),
                    'square'                => esc_html__( 'Square', 'backpacktraveler' ),
                    'landscape'             => esc_html__( 'Landscape', 'backpacktraveler' ),
                    'portrait'              => esc_html__( 'Portrait', 'backpacktraveler' ),
                    'medium'                => esc_html__( 'Medium', 'backpacktraveler' ),
                    'large'                 => esc_html__( 'Large', 'backpacktraveler' ),
                    'woocommerce_single'    => esc_html__( 'Shop Single', 'backpacktraveler' ),
                    'woocommerce_thumbnail' => esc_html__( 'Shop Thumbnail', 'backpacktraveler' ),
                ],
                'default' => 'full'
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'slider_settings',
            [
                'label' => esc_html__( 'Slider Settings', 'backpacktraveler' ),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'number_of_visible_items',
            [
                'label'   => esc_html__( 'Number Of Visible Items', 'backpacktraveler' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    '1' => esc_html__( 'One', 'backpacktraveler' ),
                    '2' => esc_html__( 'Two', 'backpacktraveler' ),
                    '3' => esc_html__( 'Three', 'backpacktraveler' ),
                    '4' => esc_html__( 'Four', 'backpacktraveler' ),
                    '5' => esc_html__( 'Five', 'backpacktraveler' ),
                    '6' => esc_html__( 'Six', 'backpacktraveler' ),
                ],
                'default' => '1'
            ]
        );

        $this->add_control(
            'slider_loop',
            [
                'label'   => esc_html__( 'Enable Slider Loop', 'backpacktraveler' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'options' => backpacktraveler_mikado_get_yes_no_select_array( false, true ),
                'default' => 'yes'
            ]
        );

        $this->add_control(
            'slider_autoplay',
            [
                'label'   => esc_html__( 'Enable Slider Autoplay', 'backpacktraveler' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'options' => backpacktraveler_mikado_get_yes_no_select_array( false, true ),
                'default' => 'yes'
            ]
        );

        $this->add_control(
            'slider_speed',
            [
                'label'       => esc_html__( 'Slide Duration', 'backpacktraveler' ),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'description' => esc_html__( 'Default value is 5000 (ms)', 'backpacktraveler' ),
                'default'     => '5000'
            ]
        );

        $this->add_control(
            'slider_speed_animation',
            [
                'label'       => esc_html__( 'Slide Animation Duration', 'backpacktraveler' ),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'description' => esc_html__( 'Speed of slide animation in milliseconds. Default value is 600.', 'backpacktraveler' ),
                'default'     => '600'
            ]
        );

        $this->add_control(
            'slider_navigation',
            [
                'label'   => esc_html__( 'Enable Slider Navigation Arrows', 'backpacktraveler' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'options' => backpacktraveler_mikado_get_yes_no_select_array( false, true ),
                'default' => 'yes'
            ]
        );

        $this->add_control(
            'slider_navigation_skin',
            [
                'label'     => esc_html__( 'Slider Navigation Skin', 'backpacktraveler' ),
                'type'      => \Elementor\Controls_Manager::SELECT,
                'options'   => [
                    'default' => esc_html__( 'Default', 'backpacktraveler' ),
                    'light'   => esc_html__( 'Light', 'backpacktraveler' ),
                ],
                'condition' => [
                    'slider_navigation' => array( 'yes' )
                ],
                'default' => 'default'
            ]
        );

        $this->add_control(
            'slider_pagination',
            [
                'label'     => esc_html__( 'Enable Slider Pagination', 'backpacktraveler' ),
                'type'      => \Elementor\Controls_Manager::SELECT,
                'options'   => backpacktraveler_mikado_get_yes_no_select_array( false, true ),
                'condition' => [
                    'slider_navigation' => array( 'yes' )
                ],
                'default' => 'yes'
            ]
        );

        $this->add_control(
            'slider_pagination_skin',
            [
                'label'     => esc_html__( 'Slider Pagination Skin', 'backpacktraveler' ),
                'type'      => \Elementor\Controls_Manager::SELECT,
                'options'   => [
                    'default' => esc_html__( 'Default', 'backpacktraveler' ),
                    'light'   => esc_html__( 'Light', 'backpacktraveler' ),
                ],
                'condition' => [
                    'slider_pagination' => array( 'yes' )
                ],
                'default' => 'default'
            ]
        );

        $this->add_control(
            'slider_pagination_pos',
            [
                'label'     => esc_html__( 'Slider Pagination Position', 'backpacktraveler' ),
                'type'      => \Elementor\Controls_Manager::SELECT,
                'options'   => [
                    'below-slider'  => esc_html__( 'Below Carousel', 'backpacktraveler' ),
                    'inside-slider' => esc_html__( 'Inside Carousel', 'backpacktraveler' )
                ],
                'condition' => [
                    'slider_pagination' => array( 'yes' )
                ],
                'default'   => 'below-slider'
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'product_info',
            [
                'label' => esc_html__( 'Product Info', 'backpacktraveler' ),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'display_title',
            [
                'label'     => esc_html__( 'Display Title', 'backpacktraveler' ),
                'type'      => \Elementor\Controls_Manager::SELECT,
                'options'   => backpacktraveler_mikado_get_yes_no_select_array( false, true ),
                'default' => 'yes'
            ]
        );

        $this->add_control(
            'title_tag',
            [
                'label'     => esc_html__( 'Title Tag', 'backpacktraveler' ),
                'type'      => \Elementor\Controls_Manager::SELECT,
                'options'   => backpacktraveler_mikado_get_title_tag( true ),
                'condition' => [
                    'display_title' => array( 'yes' )
                ],
                'default'   => 'h4'
            ]
        );

        $this->add_control(
            'title_transform',
            [
                'label'     => esc_html__( 'Title Text Transform', 'backpacktraveler' ),
                'type'      => \Elementor\Controls_Manager::SELECT,
                'options'   => backpacktraveler_mikado_get_text_transform_array( true ),
                'condition' => [
                    'display_title' => array( 'yes' )
                ],
            ]
        );

        $this->add_control(
            'display_category',
            [
                'label'   => esc_html__( 'Display Category', 'backpacktraveler' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'options' => backpacktraveler_mikado_get_yes_no_select_array( false ),
                'default' => 'no'
            ]
        );

        $this->add_control(
            'display_excerpt',
            [
                'label'   => esc_html__( 'Display Excerpt', 'backpacktraveler' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'options' => backpacktraveler_mikado_get_yes_no_select_array( false ),
                'default' => 'no'
            ]
        );

        $this->add_control(
            'excerpt_length',
            [
                'label'       => esc_html__( 'Excerpt Length', 'backpacktraveler' ),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'description' => esc_html__( 'Number of characters', 'backpacktraveler' ),
                'condition'   => [
                    'display_excerpt' => array( 'yes' )
                ],
                'default'     => '20'
            ]
        );

        $this->add_control(
            'display_rating',
            [
                'label'   => esc_html__( 'Display Rating', 'backpacktraveler' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'options' => backpacktraveler_mikado_get_yes_no_select_array( false, true ),
                'default' => 'yes'
            ]
        );

        $this->add_control(
            'display_price',
            [
                'label'   => esc_html__( 'Display Price', 'backpacktraveler' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'options' => backpacktraveler_mikado_get_yes_no_select_array( false, true ),
                'default' => 'yes'
            ]
        );

        $this->add_control(
            'display_button',
            [
                'label'   => esc_html__( 'Display Button', 'backpacktraveler' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'options' => backpacktraveler_mikado_get_yes_no_select_array( false, true ),
                'default' => 'yes'
            ]
        );

        $this->add_control(
            'button_skin',
            [
                'label'     => esc_html__( 'Button Skin', 'backpacktraveler' ),
                'type'      => \Elementor\Controls_Manager::SELECT,
                'options'   => [
                    'default' => esc_html__( 'Default', 'backpacktraveler' ),
                    'light'   => esc_html__( 'Light', 'backpacktraveler' ),
                    'dark'    => esc_html__( 'Dark', 'backpacktraveler' ),
                ],
                'condition' => [
                    'display_button' => array( 'yes' )
                ],
                'default'   => 'default'
            ]
        );

        $this->add_control(
            'shader_background_color',
            [
                'label' => esc_html__( 'Shader Background Color', 'backpacktraveler' ),
                'type'  => \Elementor\Controls_Manager::COLOR
            ]
        );

        $this->end_controls_section();
    }

    public function render() {
        $params = $this->get_settings_for_display();

        $default_atts = array(
            'type'                    => 'standard',
            'number_of_posts'         => '8',
            'space_between_items'     => 'normal',
            'orderby'                 => 'date',
            'order'                   => 'ASC',
            'taxonomy_to_display'     => 'category',
            'taxonomy_values'         => '',
            'image_size'              => 'full',
            'number_of_visible_items' => '1',
            'slider_loop'             => 'yes',
            'slider_autoplay'         => 'yes',
            'slider_speed'            => '5000',
            'slider_speed_animation'  => '600',
            'slider_navigation'       => 'yes',
            'slider_navigation_skin'  => 'default',
            'slider_pagination'       => 'yes',
            'slider_pagination_skin'  => 'default',
            'slider_pagination_pos'   => 'bellow-slider',
            'display_title'           => 'yes',
            'title_tag'               => 'h4',
            'title_transform'         => '',
            'display_category'        => 'no',
            'display_excerpt'         => 'no',
            'excerpt_length'          => '20',
            'display_rating'          => 'yes',
            'display_price'           => 'yes',
            'display_button'          => 'yes',
            'button_skin'             => 'default',
            'shader_background_color' => ''
        );

        $params['class_name'] = 'plc';
        $params['type']       = ! empty( $params['type'] ) ? $params['type'] : $default_atts['type'];
        $params['title_tag']  = ! empty( $params['title_tag'] ) ? $params['title_tag'] : $default_atts['title_tag'];

        $additional_params                   = array();
        $additional_params['holder_classes'] = $this->getHolderClasses( $params, $default_atts );
        $additional_params['holder_data']    = $this->getProductListCarouselDataAttributes( $params );

        $queryArray                        = $this->generateProductQueryArray( $params );
        $query_result                      = new \WP_Query( $queryArray );
        $additional_params['query_result'] = $query_result;

        $params['this_object'] = $this;

        echo backpacktraveler_mikado_get_woo_shortcode_module_template_part( 'templates/product-list', 'product-list-carousel', $params['type'], $params, $additional_params );
    }

    private function getHolderClasses( $params, $default_atts ) {
        $holderClasses   = array();
        $holderClasses[] = ! empty( $params['type'] ) ? 'mkdf-' . $params['type'] . '-layout' : 'mkdf-' . $default_atts['type'] . '-layout';
        $holderClasses[] = ! empty( $params['space_between_items'] ) ? 'mkdf-' . $params['space_between_items'] . '-space' : 'mkdf-' . $default_atts['space_between_items'] . '-space';
        $holderClasses[] = $this->getCarouselClasses( $params, $default_atts );

        return implode( ' ', $holderClasses );
    }

    private function getCarouselClasses( $params ) {
        $carouselClasses   = array();
        $carouselClasses[] = ! empty( $params['slider_navigation_skin'] ) ? 'mkdf-plc-nav-' . $params['slider_navigation_skin'] . '-skin' : '';
        $carouselClasses[] = ! empty( $params['slider_pagination_pos'] ) ? 'mkdf-plc-pag-' . $params['slider_pagination_pos'] : '';
        $carouselClasses[] = ! empty( $params['slider_pagination_skin'] ) ? 'mkdf-plc-pag-' . $params['slider_pagination_skin'] . '-skin' : '';

        return implode( ' ', $carouselClasses );
    }

    private function getProductListCarouselDataAttributes( $params ) {
        $slider_data = array();

        $slider_data['data-number-of-items']        = ! empty( $params['number_of_visible_items'] ) && $params['type'] !== 'simple' ? $params['number_of_visible_items'] : '1';
        $slider_data['data-enable-loop']            = ! empty( $params['slider_loop'] ) ? $params['slider_loop'] : '';
        $slider_data['data-enable-autoplay']        = ! empty( $params['slider_autoplay'] ) ? $params['slider_autoplay'] : '';
        $slider_data['data-slider-speed']           = ! empty( $params['slider_speed'] ) ? $params['slider_speed'] : '5000';
        $slider_data['data-slider-speed-animation'] = ! empty( $params['slider_speed_animation'] ) ? $params['slider_speed_animation'] : '600';
        $slider_data['data-enable-navigation']      = ! empty( $params['slider_navigation'] ) ? $params['slider_navigation'] : '';
        $slider_data['data-enable-pagination']      = ! empty( $params['slider_pagination'] ) ? $params['slider_pagination'] : '';

        return $slider_data;
    }

    public function generateProductQueryArray( $params ) {
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
            $queryArray['orderby'] = 'post__in';
            $queryArray['post__in'] = $ids;
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

    public function getShaderStyles( $params ) {
        $styles = array();

        if ( ! empty( $params['shader_background_color'] ) ) {
            $styles[] = 'background-color: ' . $params['shader_background_color'];
        }

        return implode( ';', $styles );
    }
}

\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new BackpackTravelerCoreElementorProductListCarousel() );