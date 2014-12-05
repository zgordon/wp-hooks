<?php 

function register_my_menus() {
  register_nav_menus(
    array(
      'footer_menu' => __( 'Footer Menu', 'mytheme' )      
    )
  );
}
add_action( 'init', 'register_my_menus' );

//add_theme_support( 'menus' );
//add_action( 'after_theme_setup', 'register_my_menus' );

?>