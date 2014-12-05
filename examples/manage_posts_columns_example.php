<?php 

add_filter( 'manage_posts_columns', 'manage_posts_columns_example' );
 
function manage_posts_columns_example( $columns ) {
	
	// title, author, categories, tags, comments, date

	//if( $columns['title'] ) unset( $columns['title'] );
	unset( $columns['author'] );    
    unset( $columns['categories'] );
    unset( $columns['tags'] );
    unset( $columns['comments'] );
    unset( $columns['date'] );
    return $columns;
}


?>