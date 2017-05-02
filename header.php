<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/main.css" />
<meta name="description" content="<?php bloginfo( 'description' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="container">
        <div id="wrapper" class="hfeed">
            <header id="header" role="banner">
                <div class="row">
                    <section id="branding" class="col-6">
                            <?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { ?>
                                <img id="trsLogo" class="img-fluid" src="<?php echo get_template_directory_uri() ?>/images/Tan_Green_Logo.png" alt="<?php echo esc_html( get_bloginfo( 'name' ) ); ?> Logo" />
                            <?php } else { ?>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="Visit our Homepage" >
                                    <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/images/Tan_Green_Logo.png" alt="<?php echo esc_html( get_bloginfo( 'name' ) ); ?> Logo" />
                                </a>
                            <?php } ?>
                    </section>
                    <section id="search" class="col-6 text-right">
                        <?php get_search_form(); ?>
                    </section>
                </div>
             
                <nav id="menu" role="navigation">
                    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                </nav>

            </header>
        <div id="container">