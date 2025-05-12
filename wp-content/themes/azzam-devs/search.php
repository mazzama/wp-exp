<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div class="container">
            <h1>Search results for: <?php echo get_search_query(); ?></h1>
            <?php
            while (have_posts()) :
                the_post();
                get_template_part('parts/content', 'search');
            
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;    
        
            endwhile;
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>