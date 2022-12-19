<?php

@ini_set('display_errors', 'on');

function register_my_menus()
{
    register_nav_menus(
        array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );

add_theme_support( 'post-thumbnails' );
//add_theme_support( 'post-thumbnails', array( 'post' ) );          // Posts only
//add_theme_support( 'post-thumbnails', array( 'page' ) );          // Pages only
//add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) ); // Posts and Movies

add_theme_support( 'post-formats',  array( 'aside', 'gallery', 'quote', 'image', 'video' ) );

add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo', array(
    'height' => 480,
    'width'  => 720,
) );

/* global $wpdb;
$rows = $wpdb->get_row("SELECT * FROM sec_posts WHERE post_status = 'publish' AND post_type = 'post' ORDER BY comment_count DESC LIMIT 2");
$rows = $wpdb->get_col("SELECT post_title FROM sec_posts WHERE post_status = 'publish' AND post_type = 'post' ORDER BY comment_count DESC LIMIT 2");
//var_dump($wpdb->show_errors());
var_dump($rows); */
