    
        <footer class="site-footer">
                <div class="container">
                        <div class="copyrigth">
                                <p>&copy; <?php echo date('Y'); ?> Azzam. All rights reserved.</p>
                        </div>
                        <div class="footer-menu">
                                <?php wp_nav_menu( array( 
                                        'theme_location' => 'azzamdevs_footer_menu',
                                        'depth' => 1,
                                )); ?>
                        </div>
                </div>
            </footer>
    </div>
    <?php wp_footer(); ?>
</body>
</html>