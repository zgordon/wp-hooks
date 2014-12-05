<?php 

add_filter( 'excerpt_length', 'excerpt_length_example' );
 
function excerpt_length_example( $words ) {
    return 15;
}


// http://code.tutsplus.com/tutorials/50-filters-of-wordpress-filters-31-40--cms-21297

?>