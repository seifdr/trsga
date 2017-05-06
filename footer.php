       </main> 
        <!-- Start of footer -->
          <footer class="row">
              <section class="col">
                <?php
                        $args = array(
                            'menu' => 'Footer Navigation',
                            'depth' => 1,
                            'container' => false,
                            'menu_class' => 'nav justify-content-center hidden-md-down',
                            //'menu_class' => 'nav navbar-nav',
                            'menu_id' =>  'footer-menu',
                            'theme_location' => 'Footer Menu',
                        );
                        
                        wp_nav_menu( $args);
                  ?>
              </section>
          </footer>
      </div> <!-- close whiteBackground -->

    </div><!-- /.container -->
    <div class="copyright">
          <p><small>© Copyright 2017 TRSGA. All Rights Reserved.</small></p>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/theme.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>