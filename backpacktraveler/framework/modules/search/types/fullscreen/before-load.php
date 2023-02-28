<?php

if ( ! function_exists( 'backpacktraveler_mikado_set_search_fullscreen_global_option' ) ) {
    /**
     * This function set search type value for search options map
     */
    function backpacktraveler_mikado_set_search_fullscreen_global_option( $search_type_options ) {
        $search_type_options['fullscreen'] = esc_html__( 'Fullscreen', 'backpacktraveler' );

        return $search_type_options;
    }

    add_filter( 'backpacktraveler_mikado_filter_search_type_global_option', 'backpacktraveler_mikado_set_search_fullscreen_global_option' );
}