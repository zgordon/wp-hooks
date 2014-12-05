<?php 

require_once('debug-hooks.php' );
add_action('admin_menu' , 'my_plugin_page');

function my_plugin_page() {

    add_options_page('My Page', 'My Page', 'manage_options', 'my_plugin', 'my_plugin_page');

}

add_action( 'admin_menu', 'register_my_custom_menu_page' );

function register_my_custom_menu_page(){
    add_menu_page( 'custom menu title', 'custom menu', 'manage_options', 'myplugin/myplugin-admin.php', '', 'dashicons-admin-site', 6 );
}
//require_once( 'examples/wp_filter.php' );



?>