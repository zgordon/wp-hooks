<?php 

remove_filter( 'wp_title', 'wptexturize' );
add_filter( 'wp_title', 'wptexturize', 20 );

?>