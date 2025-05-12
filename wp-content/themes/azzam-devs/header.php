<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Welcome to Azzam Site!</title> -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
        <header>
            <section class="top-bar">
                <div class="container">
                    <div class="logo">
                        <?php if (has_custom_logo()) : ?>
                            <?php the_custom_logo(); ?>
                        <?php else : ?>
                            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo"> -->
                            <?php bloginfo('name'); ?>
                        <?php endif; ?>
                    </div>
                    <div class="searchbox">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </section>
            <section class="menu-area">
                <div class="container">
                    <nav class="main-menu">
                        <button class="check-button">
                            <div class="menu-icon">
                                <div class="bar1"></div>
                                <div class="bar2"></div>
                                <div class="bar3"></div>
                            </div>
                        </button>
                        <?php wp_nav_menu(array(
                            'theme_location' => 'azzamdevs_main_menu',
                            'depth' => 2,
                        )); ?>
                    </nav>
                </div>
        </header>
</body>