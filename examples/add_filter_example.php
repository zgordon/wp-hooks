<?php 

// add_filter example hooking into the excerpt_length filter
function my_custom_excerpt_length( $length ) {

	return 140;

}
add_filter( 'excerpt_length', 'my_custom_excerpt_length', 999 );

?>