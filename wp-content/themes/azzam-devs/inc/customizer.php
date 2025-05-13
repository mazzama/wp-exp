<?php

function azzamdevs_customizer($wp_customize)
{
    // Copyright Section
    $wp_customize->add_section('sec_copyright', array(
        'title' => 'Copyright Settings',
        'description' => 'Customize the copyright text'
    ));

    $wp_customize->add_setting('sec_copyright', array(
        'type' => 'theme_mod',
        'default' => '© 2023 Azzam. All rights reserved.',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('sec_copyright', array(
        'label' => 'Copyright Text',
        'description' => 'Enter the copyright text you want to display in the footer.',
        'section' => 'sec_copyright',
        'settings' => 'sec_copyright',
        'type' => 'text',
    ));

    // Hero Section
    $wp_customize->add_section('sec_hero', array(
        'title' => 'Hero Section',
        'description' => 'Customize the hero section'
    ));

    $wp_customize->add_setting('set_hero_title', array(
        'type' => 'theme_mod',
        'default' => 'Please, add some title here',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('set_hero_title', array(
        'label' => 'Hero Text Text',
        'description' => 'sdjshdjsh',
        'section' => 'sec_hero',
        'settings' => 'set_hero_title',
        'type' => 'text'
    ));

    $wp_customize->add_setting('set_hero_subtitle', array(
        'type' => 'theme_mod',
        'default' => 'Please, add some subtitle here',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('set_hero_subtitle', array(
        'label' => 'Hero Subtitle Text',
        'description' => 'Please, add some subtitle here',
        'section' => 'sec_hero',
        'settings' => 'set_hero_subtitle',
        'type' => 'text'
    ));

    $wp_customize->add_setting('set_hero_button_text', array(
        'type' => 'theme_mod',
        'default' => 'Learn More',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('set_hero_button_text', array(
        'label' => 'Button Text',
        'description' => 'Please, add button here',
        'section' => 'sec_hero',
        'settings' => 'set_hero_button_text',
        'type' => 'text'
    ));

    $wp_customize->add_setting('set_hero_button_link', array(
        'type' => 'theme_mod',
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('set_hero_button_link', array(
        'label' => 'Button Text URL',
        'description' => 'Please, add button URL here',
        'section' => 'sec_hero',
        'settings' => 'set_hero_button_link',
        'type' => 'url'
    ));

    $wp_customize->add_setting('set_hero_height', array(
        'type' => 'theme_mod',
        'default' => 800,
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('set_hero_height', array(
        'label' => 'Tinggi Hero Section',
        'description' => 'Atur hero section',
        'section' => 'sec_hero',
        'settings' => 'set_hero_height',
        'type' => 'number'
    ));

    $wp_customize->add_setting('set_hero_image_background', array(
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_post',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'set_hero_image_background', array(
        'label' => 'Hero Image Background',
        'section' => 'sec_hero',
        'mime_type' => 'image',
    )));

    // 3. Blog
    $wp_customize->add_section(
        'sec_blog',
        array(
            'title' => 'Blog Section'
        )
    );

    // Posts per page
    $wp_customize->add_setting(
        'set_per_page',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_per_page',
        array(
            'label' => 'Posts per page',
            'description' => 'How many items to display in the post list?',
            'section' => 'sec_blog',
            'type' => 'number'
        )
    );

    // Post categories to include
    $wp_customize->add_setting(
        'set_category_include',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_category_include',
        array(
            'label' => 'Post categories to include',
            'description' => 'Comma separated values or single category ID',
            'section' => 'sec_blog',
            'type' => 'text'
        )
    );

    // Post categories to exclude
    $wp_customize->add_setting(
        'set_category_exclude',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_category_exclude',
        array(
            'label' => 'Post categories to exclude',
            'description' => 'Comma separated values or single category ID',
            'section' => 'sec_blog',
            'type' => 'text'
        )
    );
}

add_action('customize_register', 'azzamdevs_customizer');
