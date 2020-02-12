<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );

    wp_register_script( 'jquery3.4.1', 'https://code.jquery.com/jquery-3.4.1.slim.min.js' );
    wp_add_inline_script( 'jquery3.4.1', 'var jQuery3_4_1 = $.noConflict(true);' );
    wp_enqueue_script( 'plugin-javascript', plugins_url( 'js.js', __FILE__ ), array( 'jquery3.4.1' ) );
}


// Redirect to home page after login

add_action('wp_logout','auto_redirect_after_logout');

function auto_redirect_after_logout(){

  wp_redirect( home_url() );
  exit();

}


// * Redirect to my-account after login.
// *
// * @param $redirect
// * @param $user
// *
// * @return false|string

function iconic_login_redirect( $redirect, $user ) {
$redirect_page_id = url_to_postid( $redirect );

return home_url( '/my-account/' );
}

add_filter( 'woocommerce_login_redirect', 'iconic_login_redirect', 10, 2 );



 // * Redirect to /jobs after registration.
 // *
 // * @param $redirect
 // *
 // * @return string
 // *

function iconic_register_redirect( $redirect ) {
    return home_url( '/jobs/' );
}
 
add_filter( 'woocommerce_registration_redirect', 'iconic_register_redirect' );