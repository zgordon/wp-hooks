<?php 

function example_callback( $string, $arg1 ) {


	return $string;

}
add_filter( 'example_filter', 'example_callback', 10, 2 );



echo $value = apply_filters( 'example_filter', 'default', $string, $arg1 );

// http://wpseek.com/function/apply_filters/

?>


