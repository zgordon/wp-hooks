<?php 

function my_init_function() {

    echo current_filter(); // 'init'
}
add_action( 'init', 'my_init_function' );

?>