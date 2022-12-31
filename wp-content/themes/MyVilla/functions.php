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

function custom_paging()
{
    global $paged; // current page
    
    if(empty($paged)) $paged = 1;
    
    global $the_query;
    
    $pages = $the_query->max_num_pages;
    
    if (!$pages) {
        $pages = 1;
    }

    if ($pages != 1) {
        echo '<ul class="pagination custom-pagination pagination-lg">';

        //if($paged > 1) echo '<li><a href="'.get_pagenum_link($paged - 1).'" aria-label="Previous"> <span class="fa fa-angle-left"></span> Prev </a></li>';

        for ($page = 1; $page <= $pages; $page++) {
            $active = "";
            if ($page == $paged){
                $active = "active";
            }
            //echo  $page == $paged ? '<li class="active"><a href="#">'. $page. '</a></li>' : '<li><a href="'.get_pagenum_link($page).'">'. $page. '</a></li>';
            echo $page == $page ? '<li class="page-item '. $active .'"><a class="page-link" href="'.get_pagenum_link($page).'">'. $page. '</a></li>' : '  <a class="page-link " href="'.get_pagenum_link($page).'">'. $page. '</a></li>';
        }

        //if($paged < $pages) echo '<li><a href="'.get_pagenum_link($paged + 1).'" aria-label="Next">Next <span class="fa fa-angle-right"></span></a></li>';

        echo "</ul>\n";
    }
}

