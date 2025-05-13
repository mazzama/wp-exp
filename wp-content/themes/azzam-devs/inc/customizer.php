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

    $wp_customize->add_setting('sec_hero_title', array(
        'type' => 'theme_mod',
        'default' => 'Please, add some title here',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('sec_hero_title', array(
        'label' => 'Hero Text Text',
        'description' => 'sdjshdjsh',
        'section' => 'sec_hero',
        'settings' => 'sec_hero_title',
        'type' => 'text'
    ));

    $wp_customize->add_setting('sec_hero_subtitle', array(
        'type' => 'theme_mod',
        'default' => 'Please, add some subtitle here',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('sec_hero_subtitle', array(
        'label' => 'Hero Subtitle Text',
        'description' => 'Please, add some subtitle here',
        'section' => 'sec_hero',
        'settings' => 'sec_hero_subtitle',
        'type' => 'text'
    ));

    $wp_customize->add_setting('sec_hero_button_text', array(
        'type' => 'theme_mod',
        'default' => 'Learn More',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('sec_hero_button_text', array(
        'label' => 'Button Text',
        'description' => 'Please, add button here',
        'section' => 'sec_hero',
        'settings' => 'sec_hero_button_text',
        'type' => 'text'
    ));

    $wp_customize->add_setting('sec_hero_button_link', array(
        'type' => 'theme_mod',
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('sec_hero_button_link', array(
        'label' => 'Button Text URL',
        'description' => 'Please, add button URL here',
        'section' => 'sec_hero',
        'settings' => 'sec_hero_button_link',
        'type' => 'url'
    ));

    $wp_customize->add_setting('sec_hero_height', array(
        'type' => 'theme_mod',
        'default' => 800,
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('sec_hero_height', array(
        'label' => 'Button Text',
        'description' => 'Please, add button here',
        'section' => 'sec_hero',
        'settings' => 'sec_hero_height',
        'type' => 'number'
    ));

    $wp_customize->add_setting('sec_hero_image_background', array(
        'type' => 'theme_mod',
        'default' => '',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'sec_hero_image_background', array(
        'label' => 'Hero Image Background',
        'description' => 'Please, add button here',
        'section' => 'sec_hero',
        'settings' => 'sec_hero_image_background',
        'mime_type' => 'image',
    )));



     
}

add_action('customize_register', 'azzamdevs_customizer');