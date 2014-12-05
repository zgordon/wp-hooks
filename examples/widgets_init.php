<?php 

function create_my_widget() {
 
    register_sidebar(array(
        'name' => __( 'My Sidebar', 'mytheme' ),    
        'id' => 'my_sidebar',
        'description' => __( 'The one and only', 'mytheme' ),
    ));
 
}

add_action( 'widgets_init', 'create_my_widget' ); 


?>