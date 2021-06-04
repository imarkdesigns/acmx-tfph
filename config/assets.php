<?php
// ===
// Do not edit anything in this file unless you know what you're doing
// ===

// Assets Resources
add_action('wp_enqueue_scripts', function() {

    global $post;

    # UIKit 3
    $v = '3.6.22'; // UIKit Version(s)
    wp_enqueue_style( 'uikit', 'https://cdn.jsdelivr.net/npm/uikit@'.$v.'/dist/css/uikit.min.css' );
    wp_enqueue_script( 'uikit', 'https://cdn.jsdelivr.net/npm/uikit@'.$v.'/dist/js/uikit.min.js', ['jquery'], null, true );
    wp_enqueue_script( 'uikit-icons', 'https://cdn.jsdelivr.net/npm/uikit@'.$v.'/dist/js/uikit-icons.min.js', null, null, true );

    wp_enqueue_script( 'main', _scripts.'main.min.js', null, null, true );
    // wp_enqueue_script( 'icon', _scripts.'icons.js', null, null, true );

    // Additional CSS goes here
    // wp_enqueue_style( 'animate-css', 'https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css' );
    
    // Main CSS
    wp_enqueue_style( 'main', _styles.'main.min.css' );

    # Not Found
    if ( is_404() ) {

    }

    # Category
    elseif ( is_category([  ]) ) {

    }

    # Single | Singular
    elseif ( is_single() ) {

        switch ( $post->post_type ) {

        }
        wp_enqueue_style( 'page', _styles.$post.'.min.css' );
    }

    # Category | Tag
    elseif ( is_category() || is_archive() ) {

    }

    # Pages
    elseif ( is_page() ) {

        switch ( $post->ID ) {

            default:
                $page = 'home';
                break;

        }
        wp_enqueue_style( 'page', _styles.$page.'.min.css' );

    }

}, 100);

// Disable WordPress Script & Function
function unnecessary_scripts() {
    wp_dequeue_style('wp-block-library');
}
add_filter( 'wp_enqueue_scripts', 'unnecessary_scripts', PHP_INT_MAX );    