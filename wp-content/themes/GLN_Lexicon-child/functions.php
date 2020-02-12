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

add_filter( 'submit_job_form_login_url', 'wpjms_redirect_login_url' );
function wpjms_redirect_login_url() {
    return '/job-seekers/';
}