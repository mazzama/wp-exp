<?php get_header(); ?>
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Header Image" class="header-image">
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <section class="home-blog">
                <div class="container">
                    <div class="blog-items">\
                        <?php
                        if (have_posts()) :
                            while (have_posts()): the_post();
                        ?>
                                <article>
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h2>
                                    <?php if (has_post_thumbnail()) : ?>
                                            <!-- <?php the_post_thumbnail( 'full' ); ?> -->
                                            <?php the_post_thumbnail( array(275, 275) ); ?>
                                     <?php endif; ?>
                                    <div class="meta-info">
                                        <p>Posted on <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                                        <p>Categories: <?php the_category(', '); ?></p>
                                        <p>Tags: <?php the_tags(', ') ?></p>
                                    </div>
                                    <?php the_excerpt(); ?>
                                </article>
                            <?php
                            endwhile;
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