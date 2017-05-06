<?php get_header(); ?>
      <div class="row">
          <?php if ( have_posts() ) { 
                  while ( have_posts() ) { the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('col col-md-6 p-4 pt-1'); ?>>
                      <header class="header">
                        <!--<h1 class="entry-title"><?php //the_title(); ?></h1> -->
                        <?php //edit_post_link(); ?>
                      </header>
                      <section class="entry-content">
                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                          <?php the_content(); ?>
                          <div class="entry-links"><?php wp_link_pages(); ?></div>
                      </section>
                    </article>
          <?php } //end while
          } //end if ?>
      </div> <!-- close row -->
      <section class="row homeWidgets">
          <section class="col-12 col-sm-12 col-md-4 d-flex align-items-start flex-column mb-4">
              <div class="mb-auto mr-auto ml-auto mt-0">
                <h3 class="text-center" >In the News</h3>
                  <ul>
                    <li>Spring Newsletters Now Available</li>
                    <li>Cost-of-Living Adjustment Notices</li>
                    <li>2016 Comprehensive Annual Financial Report</li>
                    <li>2016 Fall Newsletters Now Available Online</li>
                  </ul>
                </div>
                <a href="#" class="align-self-center">More News</a>
          </section>
          <section class="col-12 col-sm-12 col-md-4 d-flex align-items-start flex-column mb-4">
              <div class="mb-auto mr-auto ml-auto mt-0">
                <h3 class="text-center" >Upcoming Events</h3>
                  <ul>
                    <li>Crisp County</li>
                    <li>Barrow County Schools</li>
                    <li>Crawford County Schools System</li>
                    <li>Bainbridge State College</li>
                  </ul>
              </div>
              <a href="#" class="align-self-center">More Events</a>
          </section>
          <section class="col-12 col-sm-12 col-md-4 d-flex align-items-start flex-column mb-4">
              <div class="mb-auto mr-auto ml-auto mt-0">
                <h3 class="text-center">Social</h3>
                <ul>
                  <li>Like us on Facebook!</li>
                  <li>Follow us on Twitter!</li>
                  <li>Join us on LinkedIn</li>
                </ul>
              </div>
          </section>
      </section>
<?php get_footer(); ?>

 