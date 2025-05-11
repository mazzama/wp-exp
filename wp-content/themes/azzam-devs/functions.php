<?php

function azzamdevs_load_scripts()
{
    wp_enqueue_style('azzamdevs-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', array(), null);
    wp_enqueue_script('dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'azzamdevs_load_scripts');


function wpazzam_config()
{
    register_nav_menus(
        array(
            'azzamdevs_main_menu' => 'Main Menu',
            'azzamdevs_footer_menu' => 'Footer Menu'
        )
    );

    $arg = array(
        'height' => 225,
        'width' => 1920,
    );

    add_theme_support('custom-header', $arg);
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height' => 110,
        'width' => 200,
        'flex-height' => true,
        'flex-width' => true
    ));
}

add_action('after_setup_theme', 'wpazzam_config');

function azzamdevs_sidebars()
{
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar-blog',
        'description' => 'Sidebar for blog posts',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
    ));
    register_sidebar(array(
        'name' => 'Service 1',
        'id' => 'services-1',
        'description' => 'Sidebar for service 1',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
    ));
    register_sidebar(array(
        'name' => 'Service 2',
        'id' => 'services-2',
        'description' => 'Sidebar for service 2',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
    ));
    register_sidebar(array(
        'name' => 'Service 3',
        'id' => 'services-3',
        'description' => 'Sidebar for service 3',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
    ));
}

add_action('widgets_init', 'azzamdevs_sidebars');
