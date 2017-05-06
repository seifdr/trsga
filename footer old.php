       </main> 
        <!-- Start of footer -->
          <footer class="row">
              <section class="col">
                <?php
                        $args = array(
                            'menu' => 'Footer Navigation',
                            'depth' => 1,
                            'container' => false,
                            'menu_class' => 'nav justify-content-center',
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
    <div class="row">
      <div class="col text-center">
        © Copyright 2017 TRSGA. All Rights Reserved.
      </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/theme.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>