<?php

function azzamdevs_load_scripts() {
    wp_enqueue_style('azzamdevs-style', get_stylesheet_uri(), array(), filemtime(get_template_directory(). '/style.css'), 'all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', array(), null);
    wp_enqueue_script('dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'azzamdevs_load_scripts');

register_nav_menus(
    array(
        'azzamdevs_main_menu' => 'Main Menu',
        'azzamdevs_footer_menu' => 'Footer Menu'
        // 'primary' => __('Primary Menu', 'azzamdevs'),
        // 'footer' => __('Footer Menu', 'azzamdevs'),
    )
);