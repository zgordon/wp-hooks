<?php 

// Only run the code if you are in the main Loop for a page or post
function only_run_in_main_loop( $query ) {
    if ( $query->is_main_query() ) {
    	// Run your code
    }
        
}
add_filter( 'the_content', 'only_run_in_main_loop' );

?>