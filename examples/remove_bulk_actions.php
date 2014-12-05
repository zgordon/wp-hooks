<?php 

function my_custom_bulk_actions($actions){
    var_export( $actions ); 
    unset( $actions['delete'] );
    return $actions;
}
add_filter('bulk_actions-edit-post','__return_empty_array');


?>