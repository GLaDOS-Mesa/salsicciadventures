<?php

class BackpackTravelerMikadoElementorBlogCategoryList extends \Elementor\Widget_Base {

    public function get_name() {
        return 'mkdf_blog_category_list';
    }

    public function get_title() {
        return esc_html__( 'Blog Category List', 'backpacktraveler' );
    }

    public function get_icon() {
        return 'backpacktraveler-elementor-custom-icon backpacktraveler-elementor-blog-category-list';
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
            'number_of_columns',
            [
                'label'     => esc_html__( 'Number of Columns', 'backpacktraveler' ),
                'type'      => \Elementor\Controls_Manager::SELECT,
                'options'   => backpacktraveler_mikado_get_number_of_columns_array( true ),
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
                    'type' => array( 'standard', 'boxed', 'masonry' )
                ],
                'default'   => 'large'
            ]
        );

        $this->add_control(
            'number_of_items',
            [
                'label'   => esc_html__( 'Number of Items Per Page', 'backpacktraveler' ),
                'description' => esc_html__( 'Set number of items for your blog category list. Default value is 6', 'backpacktraveler' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => '6'
            ]
        );

        $this->add_control(
            'orderby',
            [
                'label'   => esc_html__( 'Order By', 'backpacktraveler' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'options' => backpacktraveler_mikado_get_query_order_by_array(false, array(), true),
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
            'image_proportions',
            [
                'label'     => esc_html__( 'Image Proportions', 'backpacktraveler' ),
                'type'      => \Elementor\Controls_Manager::SELECT,
                'options'   => [
                    'full'                       => esc_html__( 'Original', 'backpacktraveler' ),
                    'square'    => esc_html__( 'Square', 'backpacktraveler' ),
                    'landscape' => esc_html__( 'Landscape', 'backpacktraveler' ),
                    'portrait'  => esc_html__( 'Portrait', 'backpacktraveler' ),
                    'medium'                  => esc_html__( 'Medium', 'backpacktraveler' ),
                    'large'                      => esc_html__( 'Large', 'backpacktraveler' ),
                ],
                'default'   => 'full'
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

        $this->end_controls_section();
    }

    public function render() {
        $params = $this->get_settings_for_display();

        $args   = array(
            'number_of_columns'   => 'six',
            'space_between_items' => 'normal',
            'number_of_items'     => '6',
            'orderby'             => 'date',
            'order'               => 'ASC',
            'image_proportions'   => 'full',
            'title_tag'           => 'h4'
        );
        $params = shortcode_atts( $args, $params );

        $query_array              = $this->getQueryArray( $params );
        $params['query_results']  = get_terms( $query_array );

        $params['holder_classes'] = $this->getHolderClasses( $params, $args );
        $params['image_size']     = $this->getImageSize( $params );
        $params['title_tag']      = ! empty( $params['title_tag'] ) ? $params['title_tag'] : $args['title_tag'];

        ob_start();

        backpacktraveler_mikado_get_module_template_part( 'shortcodes/blog-category-list/holder', 'blog', '', $params );

        $html = ob_get_contents();

        ob_end_clean();

        echo backpacktraveler_mikado_get_module_part( $html );
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

backpacktraveler_mikado_register_new_elementor_widget( new BackpackTravelerMikadoElementorBlogCategoryList() );