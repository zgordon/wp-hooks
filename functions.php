<?php 

//require_once('debug-hooks.php' );



function register_my_custom_menu_page(){
    add_menu_page( 'custom menu title', 'custom menu', 'manage_options', 'myplugin/myplugin-admin.php', '', 'dashicons-admin-site', 6 );
}
//require_once( 'examples/wp_filter.php' );



?>