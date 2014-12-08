<?php

if ( has_action( 'init', 'custom_plugin_code' ) ) {
    remove_action( 'init', 'custom_plugin_code' );
    add_action( 'init', 'my_content_code' );
}

?>