<?php
 
add_filter( 'body_class', 'body_class_example' );
 
function body_class_example( $classes ) {
    if( is_single() ) {
        foreach( get_the_category( get_the_ID() ) as $category )
            $classes[] = 'cat-' . $category->category_nicename;
    }
    return $classes;
}
 
// Example source: https://codex.wordpress.org/Function_Reference/body_class#Add_Classes_By_Filters
// http://code.tutsplus.com/tutorials/50-filters-of-wordpress-the-first-10-filters--cms-21295

?>