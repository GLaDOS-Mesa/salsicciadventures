<?php

if ( class_exists( 'BackpackTravelerCoreClassWidget' ) ) {
    class BackpackTravelerMikadoClassSeparatorWidget extends BackpackTravelerCoreClassWidget {
        public function __construct() {
            parent::__construct(
                'mkdf_separator_widget',
                esc_html__( 'BackpackTraveler Separator Widget', 'backpacktraveler' ),
                array( 'description' => esc_html__( 'Add a separator element to your widget areas', 'backpacktraveler' ) )
            );

            $this->setParams();
        }

        protected function setParams() {
            $this->params = array(
                array(
                    'type'    => 'dropdown',
                    'name'    => 'type',
                    'title'   => esc_html__( 'Type', 'backpacktraveler' ),
                    'options' => array(
                        'normal'     => esc_html__( 'Normal', 'backpacktraveler' ),
                        'full-width' => esc_html__( 'Full Width', 'backpacktraveler' )
                    )
                ),
                array(
                    'type'    => 'dropdown',
                    'name'    => 'position',
                    'title'   => esc_html__( 'Position', 'backpacktraveler' ),
                    'options' => array(
                        'center' => esc_html__( 'Center', 'backpacktraveler' ),
                        'left'   => esc_html__( 'Left', 'backpacktraveler' ),
                        'right'  => esc_html__( 'Right', 'backpacktraveler' )
                    )
                ),
                array(
                    'type'    => 'dropdown',
                    'name'    => 'border_style',
                    'title'   => esc_html__( 'Style', 'backpacktraveler' ),
                    'options' => array(
                        'solid'  => esc_html__( 'Solid', 'backpacktraveler' ),
                        'dashed' => esc_html__( 'Dashed', 'backpacktraveler' ),
                        'dotted' => esc_html__( 'Dotted', 'backpacktraveler' )
                    )
                ),
                array(
                    'type'  => 'colorpicker',
                    'name'  => 'color',
                    'title' => esc_html__( 'Color', 'backpacktraveler' )
                ),
                array(
                    'type'  => 'textfield',
                    'name'  => 'width',
                    'title' => esc_html__( 'Width (px or %)', 'backpacktraveler' )
                ),
                array(
                    'type'  => 'textfield',
                    'name'  => 'thickness',
                    'title' => esc_html__( 'Thickness (px)', 'backpacktraveler' )
                ),
                array(
                    'type'  => 'textfield',
                    'name'  => 'top_margin',
                    'title' => esc_html__( 'Top Margin (px or %)', 'backpacktraveler' )
                ),
                array(
                    'type'  => 'textfield',
                    'name'  => 'bottom_margin',
                    'title' => esc_html__( 'Bottom Margin (px or %)', 'backpacktraveler' )
                )
            );
        }

        public function widget( $args, $instance ) {
            if ( ! is_array( $instance ) ) {
                $instance = array();
            }

            //prepare variables
            $params = '';

            //is instance empty?
            if ( is_array( $instance ) && count( $instance ) ) {
                //generate shortcode params
                foreach ( $instance as $key => $value ) {
                    $params .= " $key='$value' ";
                }
            }

            echo '<div class="widget mkdf-separator-widget">';
            echo do_shortcode( "[mkdf_separator $params]" ); // XSS OK
            echo '</div>';
        }
    }
}