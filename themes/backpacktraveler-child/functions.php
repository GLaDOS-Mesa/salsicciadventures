<?php


if (! function_exists( 'backpacktraveler_mikado_child_theme_enqueue_scripts' ) ) {
	/*** Child Theme Function  ***/

	function backpacktraveler_mikado_child_theme_enqueue_scripts()
	{

		$parent_style = 'backpacktraveler-mikado-default-style';

		wp_enqueue_style('backpacktraveler-mikado-child-style', get_stylesheet_directory_uri() . '/style.css', array($parent_style));
		wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/custom.js', '', true );
	}

	add_action('wp_enqueue_scripts', 'backpacktraveler_mikado_child_theme_enqueue_scripts');
}

// Activate WordPress Maintenance Mode
function wp_maintenance_mode() {
    if (!current_user_can('edit_themes') || !is_user_logged_in()) {
        wp_die('
        <p style="text-align:center">Under construction</p>
        ', "SalsicciAdventures", array("response" => 503));
    }
}
add_action('get_header', 'wp_maintenance_mode');
