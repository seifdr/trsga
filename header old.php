<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="../../favicon.ico">
        <meta name="description" content="">

        <title>Starter Template for Bootstrap</title>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/main.css" />

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> >
    <div class="container">
      <div class="whiteBackground">

    <!-- Start Header -->
      <div class="row">
          <div class="col-12">

            <header id="header">
              <div class="row p-3 hidden-md-down">
                <div class="col">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/Tan_Green_Logo.png" alt="Teachers Retirement System of Georgia" id="trsLogo">
                </div>
                <div class="col py-4">
                  <form class="form-inline hidden-md-down float-right">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </div>
              </div>
                
              <div class="row">
                <div class="col">
                  <nav class="navbar navbar-toggleable-md" id="upperNav">
                      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <a class="navbar-brand hidden-lg-up" href="#">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/Tan_Green_Logo_43_50.png" alt="Teachers Retirement System of Georgia" id="trsLogo"><p>Teachers Retirement System<br /> of Georgia</p>
                      </a>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <!--<ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link disabled" href="#">Disabled</a>
                            </li>
                          </ul>-->
                          <?php

			                        $args = array(
			                            'menu' => 'Upper Navigation',
			                            'depth' => 3,
			                            'container' => false,
			                            'menu_class' => 'navbar-nav mr-auto',
			                            //'menu_class' => 'nav navbar-nav',
			                            'menu_id' =>  'upper-nav',
			                            'theme_location' => 'Upper Navigation',
			                            'walker' => new wp_bootstrap_navwalker
			                        );
			                        
			                        wp_nav_menu( $args);
	                    	?>
                          <form class="form-inline my-2 my-lg-0 hidden-lg-up">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                          </form>
                        </div>
                    </nav>
                  </div>
                </div>
            </header>
        </div> <!-- end col -->
      </div> <!-- end row -->
      <!-- End Header -->
      <main>