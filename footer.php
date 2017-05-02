            <div class="clear"></div>
        </div> <!-- close div#container -->
        <footer id="footer">
            <nav id="footerMenu" role="navigation">
                    <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
            </nav>
        </footer>
        
    </div> <!-- close div#wrapper -->
    <?php wp_footer(); ?>
</div> <!-- close container -->
<div id="copyrightLg" class="row">
    <div class="col-12 text-center ">
        <?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'blankslate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); ?>
    </div>
</div>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/theme.js"></script>
</body>
</html>