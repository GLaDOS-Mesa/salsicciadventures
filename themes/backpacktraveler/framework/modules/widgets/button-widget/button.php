<?php

if ( class_exists( 'BackpackTravelerCoreClassWidget' ) ) {
    class BackpackTravelerMikadoClassButtonWidget extends BackpackTravelerCoreClassWidget {
        public function __construct() {
            parent::__construct(
                'mkdf_button_widget',
                esc_html__( 'BackpackTraveler Button Widget', 'backpacktraveler' ),
                array( 'description' => esc_html__( 'Add button element to widget areas', 'backpacktraveler' ) )
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
                        'solid'   => esc_html__( 'Solid', 'backpacktraveler' ),
                        'outline' => esc_html__( 'Outline', 'backpacktraveler' ),
                        'simple'  => esc_html__( 'Simple', 'backpacktraveler' )
                    )
                ),
                array(
                    'type'        => 'dropdown',
                    'name'        => 'size',
                    'title'       => esc_html__( 'Size', 'backpacktraveler' ),
                    'options'     => array(
                        'small'  => esc_html__( 'Small', 'backpacktraveler' ),
                        'medium' => esc_html__( 'Medium', 'backpacktraveler' ),
                        'large'  => esc_html__( 'Large', 'backpacktraveler' ),
                        'huge'   => esc_html__( 'Huge', 'backpacktraveler' )
                    ),
                    'description' => esc_html__( 'This option is only available for solid and outline button type', 'backpacktraveler' )
                ),
                array(
                    'type'    => 'textfield',
                    'name'    => 'text',
                    'title'   => esc_html__( 'Text', 'backpacktraveler' ),
                    'default' => esc_html__( 'Button Text', 'backpacktraveler' )
                ),
                array(
                    'type'  => 'textfield',
                    'name'  => 'link',
                    'title' => esc_html__( 'Link', 'backpacktraveler' )
                ),
                array(
                    'type'    => 'dropdown',
                    'name'    => 'target',
                    'title'   => esc_html__( 'Link Target', 'backpacktraveler' ),
                    'options' => backpacktraveler_mikado_get_link_target_array()
                ),
                array(
                    'type'  => 'colorpicker',
                    'name'  => 'color',
                    'title' => esc_html__( 'Color', 'backpacktraveler' )
                ),
                array(
                    'type'  => 'colorpicker',
                    'name'  => 'hover_color',
                    'title' => esc_html__( 'Hover Color', 'backpacktraveler' )
                ),
                array(
                    'type'        => 'colorpicker',
                    'name'        => 'background_color',
                    'title'       => esc_html__( 'Background Color', 'backpacktraveler' ),
                    'description' => esc_html__( 'This option is only available for solid button type', 'backpacktraveler' )
                ),
                array(
                    'type'        => 'colorpicker',
                    'name'        => 'hover_background_color',
                    'title'       => esc_html__( 'Hover Background Color', 'backpacktraveler' ),
                    'description' => esc_html__( 'This option is only available for solid button type', 'backpacktraveler' )
                ),
                array(
                    'type'        => 'colorpicker',
                    'name'        => 'border_color',
                    'title'       => esc_html__( 'Border Color', 'backpacktraveler' ),
                    'description' => esc_html__( 'This option is only available for solid and outline button type', 'backpacktraveler' )
                ),
                array(
                    'type'        => 'colorpicker',
                    'name'        => 'hover_border_color',
                    'title'       => esc_html__( 'Hover Border Color', 'backpacktraveler' ),
                    'description' => esc_html__( 'This option is only available for solid and outline button type', 'backpacktraveler' )
                ),
                array(
                    'type'        => 'textfield',
                    'name'        => 'margin',
                    'title'       => esc_html__( 'Margin', 'backpacktraveler' ),
                    'description' => esc_html__( 'Insert margin in format: top right bottom left (e.g. 10px 5px 10px 5px)', 'backpacktraveler' )
                )
            );
        }

        public function widget( $args, $instance ) {
            $params = '';

            if ( ! is_array( $instance ) ) {
                $instance = array();
            }

            // Filter out all empty params
            $instance = array_filter( $instance, function ( $array_value ) {
                return trim( $array_value ) != '';
            } );

            // Default values
            if ( ! isset( $instance['text'] ) ) {
                $instance['text'] = 'Button Text';
            }

            // Generate shortcode params
            foreach ( $instance as $key => $value ) {
                $params .= " $key='$value' ";
            }

            echo '<div class="widget mkdf-button-widget">';
            echo do_shortcode( "[mkdf_button $params]" ); // XSS OK
            echo '</div>';
        }
    }
}