<?php

class BackpackTravelerCoreElementorProductList extends \Elementor\Widget_Base {

    public function get_name() {
        return 'mkdf_product_list';
    }

    public function get_title() {
        return esc_html__( 'Product List', 'backpacktraveler' );
    }

    public function get_icon() {
        return 'backpacktraveler-elementor-custom-icon backpacktraveler-elementor-product-list';
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
                    'masonry'  => esc_html__( 'Masonry', 'backpacktraveler' )
                ],
                'default' => 'standard'
            ]
        );

        $this->add_control(
            'info_position',
            [
                'label'   => esc_html__( 'Product Info Position', 'backpacktraveler' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'info-on-image'    => esc_html__( 'Info On Image Hover', 'backpacktraveler' ),
                    'info-below-image' => esc_html__( 'Info Below Image', 'backpacktraveler' )
                ],
                'default' => 'info-on-image'
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
            'number_of_columns',
            [
                'label'   => esc_html__( 'Number of Columns', 'backpacktraveler' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'options' => backpacktraveler_mikado_get_number_of_columns_array( true ),
                'default' => 'three'
            ]
        );

        $this->add_control(
            'space_between_items',
            [
                'label'   => esc_html__( 'Number of Columns', 'backpacktraveler' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'options' => backpacktraveler_mikado_get_space_between_items_array(),
                'default' => 'large'
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
                'order' => 'ASC'
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
            'product_info',
            [
                'label' => esc_html__( 'Product Info', 'backpacktraveler' ),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'display_title',
            [
                'label'   => esc_html__( 'Display Title', 'backpacktraveler' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'options' => backpacktraveler_mikado_get_yes_no_select_array( false, true ),
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
                'default' => 'h5'
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
                'default' => '20'
            ]
        );

        $this->add_control(
            'display_rating',
            [
                'label'   => esc_html__( 'Display Rating', 'backpacktraveler' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'options' => backpacktraveler_mikado_get_yes_no_select_array( false ),
                'default' => 'no'
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
                'default' => 'default'
            ]
        );

        $this->add_control(
            'shader_background_color',
            [
                'label' => esc_html__( 'Shader Background Color', 'backpacktraveler' ),
                'type'  => \Elementor\Controls_Manager::COLOR
            ]
        );

        $this->add_control(
            'info_bottom_text_align',
            [
                'label'     => esc_html__( 'Product Info Text Alignment', 'backpacktraveler' ),
                'type'      => \Elementor\Controls_Manager::SELECT,
                'options'   => [
                    'default' => esc_html__( 'Default', 'backpacktraveler' ),
                    'left'    => esc_html__( 'Left', 'backpacktraveler' ),
                    'center'  => esc_html__( 'Center', 'backpacktraveler' ),
                    'right'   => esc_html__( 'Right', 'backpacktraveler' ),
                ],
                'condition' => [
                    'info_position' => array( 'info-below-image' )
                ],
            ]
        );

        $this->add_control(
            'info_bottom_margin',
            [
                'label'     => esc_html__( 'Product Info Bottom Margin (px)', 'backpacktraveler' ),
                'type'      => \Elementor\Controls_Manager::TEXT,
                'condition' => [
                    'info_position' => array( 'info-below-image' )
                ],
            ]
        );

        $this->end_controls_section();
    }

    public function render() {
        $params = $this->get_settings_for_display();

        $default_atts = array(
            'type'                    => 'standard',
            'info_position'           => 'info-on-image',
            'number_of_posts'         => '8',
            'number_of_columns'       => 'three',
            'space_between_items'     => 'large',
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
            'display_rating'          => 'no',
            'display_price'           => 'yes',
            'display_button'          => 'yes',
            'button_skin'             => 'default',
            'shader_background_color' => '',
            'info_bottom_text_align'  => '',
            'info_bottom_margin'      => ''
        );

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

        echo backpacktraveler_mikado_get_woo_shortcode_module_template_part( 'templates/product-list', 'product-list', $params['type'], $params, $additional_params );
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
            $queryArray['orderby'] = 'post__in';
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

backpacktraveler_mikado_register_new_elementor_widget( new BackpackTravelerCoreElementorProductList() );