<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php
	/**
	 * backpacktraveler_mikado_action_header_meta hook
	 *
	 * @see backpacktraveler_mikado_header_meta() - hooked with 10
	 * @see backpacktraveler_mikado_user_scalable_meta - hooked with 10
	 * @see backpacktraveler_core_set_open_graph_meta - hooked with 10
	 */
	do_action( 'backpacktraveler_mikado_action_header_meta' );
	
	wp_head(); ?>
</head>
<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
	<?php 	// Hook to include default WordPress hooks after body tag open
	if ( function_exists( 'wp_body_open' ) ) {
		wp_body_open();
	} ?>
	<?php
	/**
	 * backpacktraveler_mikado_action_after_body_tag hook
	 *
	 * @see backpacktraveler_mikado_get_side_area() - hooked with 10
	 * @see backpacktraveler_mikado_smooth_page_transitions() - hooked with 10
	 */
	do_action( 'backpacktraveler_mikado_action_after_body_tag' ); ?>

    <div class="mkdf-wrapper">
        <div class="mkdf-wrapper-inner">
            <?php
            /**
             * backpacktraveler_mikado_action_after_wrapper_inner hook
             *
             * @see backpacktraveler_mikado_get_header() - hooked with 10
             * @see backpacktraveler_mikado_get_mobile_header() - hooked with 20
             * @see backpacktraveler_mikado_back_to_top_button() - hooked with 30
             * @see backpacktraveler_mikado_get_header_minimal_full_screen_menu() - hooked with 40
             * @see backpacktraveler_mikado_get_header_bottom_navigation() - hooked with 40
             */
            do_action( 'backpacktraveler_mikado_action_after_wrapper_inner' ); ?>
	        
            <div class="mkdf-content" <?php backpacktraveler_mikado_content_elem_style_attr(); ?>>
                <div class="mkdf-content-inner">