<?php 
// add_action example hooking into the wp_enqueue_scripts action
function add_google_font() {

	wp_enqueue_style( 'google_font', 'http://fonts.googleapis.com/css?family=Pacifico' );

}
add_action( 'wp_enqueue_scripts', 'add_google_font' );
?>