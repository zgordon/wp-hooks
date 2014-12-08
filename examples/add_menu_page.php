<?php

add_action( 'admin_menu' , 'my_plugin_page' );

function my_plugin_page() {

	add_options_page( 'My Page', 'My Page', 'manage_options', 'my_plugin', 'my_plugin_page' );

}

add_action( 'admin_menu', 'register_my_custom_menu_page' );

function register_my_custom_menu_page() {
	add_menu_page( 'custom menu title', 'custom menu', 'manage_options', 'myplugin/myplugin-admin.php', '', 'dashicons-admin-site', 6 );
}


// Positions for Core Menu Items
// http://codex.wordpress.org/Function_Reference/add_menu_page

// Dashicons
// https://developer.wordpress.org/resource/dashicons/

?>
