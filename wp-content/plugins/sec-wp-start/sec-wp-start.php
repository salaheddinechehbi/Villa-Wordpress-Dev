<?php
/*
Plugin Name: SEC WP Start
Plugin URI: https://www.yourwebsite.com/
Description: Plugin to perform initial setup tasks.
Version: 1.0
Author: Your Name
Author URI: https://www.yourwebsite.com/
*/

// Delete post IDs 1 and 2
function sec_wp_start_delete_posts() {
    $post_ids = array(1, 2);
    foreach ($post_ids as $post_id) {
        wp_delete_post($post_id, true);
    }
}
register_activation_hook(__FILE__, 'sec_wp_start_delete_posts');

// Check for and delete Hello Dolly and Akismet plugins
function sec_wp_start_delete_plugins() {
    $plugins = array('hello.php', 'akismet/akismet.php');
    foreach ($plugins as $plugin) {
        if (is_plugin_active($plugin)) {
            deactivate_plugins($plugin);
            delete_plugins(array($plugin));
        } else {
            delete_plugins(array($plugin));
        }
    }
}
register_activation_hook(__FILE__, 'sec_wp_start_delete_plugins');

// Set permalink structure to post name
function sec_wp_start_set_permalink() {
    global $wp_rewrite;
    $wp_rewrite->set_permalink_structure('/%postname%/');
    $wp_rewrite->flush_rules();
}
register_activation_hook(__FILE__, 'sec_wp_start_set_permalink');
