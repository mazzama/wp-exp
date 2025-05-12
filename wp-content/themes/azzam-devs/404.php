<?php get_header(); ?>
<div class="site-content" id="content">
    <div class="content-area" id="primary">
        <main class="site-main" id="main">
            <div class="container">
                <div class="error-404">
                    <header>
                        <h1>Page not found</h1>
                        <p> Sorry, but the page you are looking for does not exist.</p>
                    </header>

                    <div class="error">
                        <?php get_search_form(); ?>
                        <?php
                            the_widget( 'WP_Widget_Recent_Posts',
                                array(
                                    'title' => __( 'Recent Posts'),
                                    'number' => 5,
                                )
                            );
                        ?>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>


<?php get_footer(); ?>