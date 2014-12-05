<?php
 
add_filter( 'login_redirect', 'login_redirect_example', 10, 3 );
 
function login_redirect_example( $redirect_to, $request, $user ) {
    global $user;
    if ( isset( $user->roles ) && is_array( $user->roles ) ) {
        if ( in_array( 'subscriber', $user->roles ) ) {
            return home_url();
        } else {
            return $redirect_to;
            }
    }
    return;
}
 
// http://code.tutsplus.com/tutorials/50-filters-of-wordpress-filters-11-20--cms-21296

?>