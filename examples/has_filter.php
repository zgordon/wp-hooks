<?php 

if ( has_filter( 'the_content', 'custom_plugin_code' ) ) {
	remove_filter( 'the_content', 'custom_plugin_code' );
	add_filter( 'the_content', 'my_content_code' );
}

?>