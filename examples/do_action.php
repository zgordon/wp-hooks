<?php 

function custom_footer() {
    do_action('my_footer');
}

function custom_footer_text() {
	echo "Custom footer text";
}
add_action( 'my_footer', 'custom_footer_text', 1);


// http://wpengineer.com/1302/define-your-own-wordpress-hooks/

?>


<?php custom_footer(); ?>

