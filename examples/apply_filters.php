<?php 

// First create a function and hook it into new example hook
function example_callback( $string, $arg1 ) {
	return $string;
}
add_filter( 'example_filter', 'example_callback', 10, 2 );

// Then use apply_filters in your code when you want the filter to run
echo $value = apply_filters( 'example_filter', 'default_value', $string, $arg1 );

// From http://wpseek.com/function/apply_filters/
?>


