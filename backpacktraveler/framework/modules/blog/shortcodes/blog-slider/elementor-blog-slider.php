<?php

class BackpackTravelerMikadoElementorBlogSlider extends \Elementor\Widget_Base {

    public function get_name() {
        return 'mkdf_blog_slider';
    }

    public function get_title() {
        return esc_html__( 'Blog Slider', 'backpacktraveler' );
    }

    public function get_icon() {
        return 'backpacktraveler-elementor-custom-icon backpacktraveler-elementor-blog-slider';
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
            'slider_type',
            [
                'label'   => esc_html__( 'Type', 'backpacktraveler' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'slider' => esc_html__( 'Slider', 'backpacktraveler' ),
                    'carousel'    => esc_html__( 'Carousel', 'backpacktraveler' ),
                    'carousel-centered'  => esc_html__( 'Carousel Centered', 'backpacktraveler' ),
                ],
                'default' => 'slider'
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
            'orderby',
            [
                'label'     => esc_html__( 'Order By', 'backpacktraveler' ),
                'type'      => \Elementor\Controls_Manager::SELECT,
                'options'   => backpacktraveler_mikado_get_query_order_by_array(),
                'default'   => 'date'
            ]
        );

        $this->add_control(
            'order',
            [
                'label'     => esc_html__( 'Order', 'backpacktraveler' ),
                'type'      => \Elementor\Controls_Manager::SELECT,
                'options'   => backpacktraveler_mikado_get_query_order_array(),
                'default'   => 'ASC'
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
            'post_info_category',
            [
                'label'   => esc_html__( 'Enable Post Info Category', 'backpacktraveler' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'options' => backpacktraveler_mikado_get_yes_no_select_array( false, true ),
                'default' => 'yes'
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
            'excerpt_length',
            [
                'label'       => esc_html__( 'Text Length', 'backpacktraveler' ),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'description' => esc_html__( 'Number of words', 'backpacktraveler' ),
                'default'     => '40'
            ]
        );

        $this->end_controls_section();
    }

    public function render() {
        $params = $this->get_settings_for_display();

        $default_atts = array(
            'slider_type'        => 'slider',
            'number_of_posts'    => '-1',
            'orderby'            => 'title',
            'order'              => 'ASC',
            'category'           => '',
            'image_size'         => 'full',
            'title_tag'          => 'h2',
            'title_transform'    => '',
            'post_info_author'   => 'no',
            'post_info_date'     => 'no',
            'post_info_category' => '',
            'post_info_share'    => '',
            'post_info_destination'=> 'yes',
            'excerpt_length'     => '',
        );
        $params = shortcode_atts( $default_atts, $params );

        $queryArray             = $this->generateBlogQueryArray( $params );
        $query_result           = new \WP_Query( $queryArray );
        $params['query_result'] = $query_result;

        $params['slider_type']    = ! empty( $params['slider_type'] ) ? $params['slider_type'] : $default_atts['slider_type'];
        $params['slider_classes'] = $this->getSliderClasses( $params );
        $params['slider_data']    = $this->getSliderData( $params );

        ob_start();

        backpacktraveler_mikado_get_module_template_part( 'shortcodes/blog-slider/holder', 'blog', '', $params );

        $html = ob_get_contents();

        ob_end_clean();

        echo backpacktraveler_mikado_get_module_part( $html );
    }

    public function generateBlogQueryArray( $params ) {
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

        return $queryArray;
    }

    public function getSliderClasses( $params ) {
        $holderClasses = array();

        $holderClasses[] = 'mkdf-bs-' . $params['slider_type'];

        return implode( ' ', $holderClasses );
    }

    private function getSliderData( $params ) {
        $type        = $params['slider_type'];
        $slider_data = array();

        if($type == 'carousel') {
            $slider_data['data-number-of-items']   = '5';
            $slider_data['data-slider-margin']     = '9';
            $slider_data['data-slider-padding']    = 'no';
            $slider_data['data-enable-navigation'] = 'yes';
        } else if ($type == 'carousel-centered') {
            $slider_data['data-number-of-items']   = '2';
            $slider_data['data-slider-margin']     = '30';
            $slider_data['data-enable-center']     = 'yes';
            $slider_data['data-enable-navigation'] = 'yes';
            $slider_data['data-enable-pagination'] = 'no';
        } else {
            $slider_data['data-number-of-items']   = '1';
            $slider_data['data-enable-pagination'] = 'no';
        }

        return $slider_data;
    }
}

\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new BackpackTravelerMikadoElementorBlogSlider() );