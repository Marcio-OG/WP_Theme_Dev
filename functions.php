<?php

//Load all scripts and styles
function load_scripts()
{
    //JS
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.1.1', true);

    //CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css', array(), '5.1.1', 'all');
    wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'load_scripts');


//Theme configuration function
function wptheme_config()
{
    //Register menu
    register_nav_menus(
        array(
            'my_main_menu' => 'Main Menu',
            'footer_menu' => 'Footer Menu'
        )
    );

    $args = array(
        'height' => 225,
        'width' => 1920
    );

    add_theme_support('custom-header', $args);
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('video', 'image'));
    add_theme_support('title-tag');
    
}
add_action('after_setup_theme', 'wptheme_config', 0);

add_action('widgets_init', 'wptheme_sidebars');
function wptheme_sidebars()
{
    register_sidebar(
        array(
            'name' => 'HomePage Sidebar',
            'id' => 'sidebar-1',
            'description' => 'Sidebar to be used on HomePage',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'sidebar-2',
            'description' => 'Sidebar to be used on Blog Page',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Services 1',
            'id' => 'services-1',
            'description' => 'First Service Area',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Services 2',
            'id' => 'services-2',
            'description' => 'Second Service Area',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Services 3',
            'id' => 'services-3',
            'description' => 'Third Service Area',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
}
