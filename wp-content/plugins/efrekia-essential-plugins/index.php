<?php
/** 

* @package Efrekia

*/
/* 

Plugin Name: Efrekia Essentials
Plugin URI: https://rahatulahsan.com/ 
Description: It helps to activate all custom post types created for theme. 
Version: 1.0
Author: Rahatul Ahsan
Author URI: https://automattic.com/wordpress-plugins/ 
License: GPLv2 or later 
Text Domain: efrekia-essential-plugins

*/


// Custom Post Types
function efrekia_custom_posts(){
    
    // custom posts for sliders
    register_post_type('sliders', array(
        'labels' => array(
            'name' => __('Sliders', 'efrekia'),
            'singular_name' => __('Slides', 'efrekia'),
            'add_new_item' => __('Add New Slide', 'efrekia'),
            'edit_item' => __('Edit Slide', 'efrekia'),
            'new_item' => __('New Slide', 'efrekia'),
            'new_items' => __('New Slides', 'efrekia'),
            
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-images-alt2'
    ));

    // custom posts for services
    register_post_type('services', array(
        'labels' => array(
            'name' => __('Services', 'efrekia'),
            'singular_name' => __('Service', 'efrekia'),
            'add_new_item' => __('Add New Service', 'efrekia'),
            'edit_item' => __('Edit Service', 'efrekia'),
            'new_item' => __('New Service', 'efrekia'),
            'new_items' => __('New Services', 'efrekia'),
            
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'editor', 'custom-fields'),
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-editor-paste-word'
    ));

    // custom posts for Counter
    register_post_type('counters', array(
        'labels' => array(
            'name' => __('Counters', 'efrekia'),
            'singular_name' => __('Counter', 'efrekia'),
            'add_new_item' => __('Add New Counter', 'efrekia'),
            'edit_item' => __('Edit Counter', 'efrekia'),
            'new_item' => __('New Counter', 'efrekia'),
            'new_items' => __('New Counters', 'efrekia'),
            
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'custom-fields'),
        'menu_icon' => 'dashicons-image-filter'
    ));



    // custom posts for Team
    register_post_type('teams', array(
        'labels' => array(
            'name' => __('Teams', 'efrekia'),
            'singular_name' => __('Team', 'efrekia'),
            'add_new_item' => __('Add New Team Member', 'efrekia'),
            'edit_item' => __('Edit Team Member', 'efrekia'),
            'new_item' => __('New Team Member', 'efrekia'),
            'new_items' => __('New Team Members', 'efrekia'),
            
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-businessperson'
    ));

    // custom posts for Testimonial
    register_post_type('testimonials', array(
        'labels' => array(
            'name' => __('Testimonials', 'efrekia'),
            'singular_name' => __('Testimonial', 'efrekia'),
            'add_new_item' => __('Add New Testimonial', 'efrekia'),
            'edit_item' => __('Edit Testimonial', 'efrekia'),
            'new_item' => __('New Testimonial', 'efrekia'),
            'new_items' => __('New Testimonials', 'efrekia'),
            
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-admin-comments'
    ));

    // custom posts for Gallery
    register_post_type('gallery', array(
        'labels' => array(
            'name' => __('Galleries', 'efrekia'),
            'singular_name' => __('Gallery', 'efrekia'),
            'add_new_item' => __('Add New Gallery', 'efrekia'),
            'edit_item' => __('Edit Gallery', 'efrekia'),
            'new_item' => __('New Gallery', 'efrekia'),
            'new_items' => __('New Gallery', 'efrekia'),
            
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-admin-comments'
    ));

    // custom posts for Portfolio
    register_post_type('portfolio', array(
        'labels' => array(
            'name' => __('Portfolios', 'efrekia'),
            'singular_name' => __('Portfolio', 'efrekia'),
            'add_new_item' => __('Add New Portfolio', 'efrekia'),
            'edit_item' => __('Edit Portfolio', 'efrekia'),
            'new_item' => __('New Portfolio', 'efrekia'),
            'new_items' => __('New Portfolios', 'efrekia'),
            
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'editor','thumbnail', 'custom-fields'),
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-format-gallery',
    ));
    
    // Register Taxonomy for Portfolio Post Type
    register_taxonomy( 'portfolio-cat', 'portfolio', array(
        'labels' => array(
            'name' => __('Categories', 'efrekia'),
            'singular_name' => __('Category', 'efrekia')
        ),
        'rewrite' => array(
            'slug' => 'portfolio',
            'with_front' => false,
            'hierarchical' => true
        ),
        'hierarchical' => true,
        'show_admin_column' => true

    ) );


}

add_action('init', 'efrekia_custom_posts');