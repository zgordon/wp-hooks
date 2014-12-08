<?php 

// Check if filter exists then add custom code
if ( has_filter( 'custom_plugin_filter' ) ) {
	add_filter( 'custom_plugin_filter', 'my_custom_code' );
}

// Check if function is hooked into filter then replace it
if ( has_filter( 'the_content', 'custom_plugin_function' ) ) {
	remove_filter( 'the_content', 'custom_plugin_function' );
	add_filter( 'the_content', 'my_content_code' );
}

?>