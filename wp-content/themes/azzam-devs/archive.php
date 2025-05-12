<?php get_header(); ?>
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Header Image" class="header-image">
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <?php the_archive_title('<h1 class="archive-title">', '</h1>'); ?>
            <?php the_archive_description('<div class="archive-description">', '</div>'); ?>
            <section class="home-blog">
                <div class="container">
                    <div class="archive-items">
                        <?php
                        if (have_posts()) :
                            while (have_posts()): the_post();
                                get_template('parts/content', 'archive');
                            endwhile;
                            ?>
                            <div class="wpdevs-pagination">
                                <div class="pages new">
                                    <?php previous_posts_link("<< Newer posts"); ?>
                                </div>
                                <div class="pages old">
                                    <?php next_posts_link("Older posts >>"); ?>
                                </div>
                            </div>

                        <?php
                        else:
                        ?>
                            <p>No posts found.</p>
                        <?php
                        endif;
                        ?>
                    </div>
                    <?php get_sidebar(); ?>
                </div>
            </section>
        </main>
    </div>
</div>
<?php get_footer(); ?>