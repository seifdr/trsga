<?php get_header(); ?>
      <div class="row mb-1">
        <div class="col">
            <?php if ( have_posts() ) { 
                  while ( have_posts() ) { 
                      the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
        </div>
      </div>
      <div class="row mb-4">
        <div class="col">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <?php $rect = "data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%221140%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15bd91fd6bb%20text%20%7B%20fill%3A%23555%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15bd91fd6bb%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22284.95833587646484%22%20y%3D%22216.5%22%3EImage%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"; ?>
                <img class="d-block img-fluid" src="<?php echo $rect; ?>" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                  <h3>Header 1</h3>
                  <p>Vestibulum vitae ex mauris. Nullam eget ultrices massa. Suspendisse potenti. Etiam sit amet tincidunt turpis, nec lobortis elit. </p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="<?php echo $rect; ?>" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                  <h3>Header 2</h3>
                  <p>Vestibulum vitae ex mauris. Nullam eget ultrices massa. Suspendisse potenti. Etiam sit amet tincidunt turpis, nec lobortis elit. </p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="<?php echo $rect; ?>" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                  <h3>Header 3</h3>
                  <p>Vestibulum vitae ex mauris. Nullam eget ultrices massa. Suspendisse potenti. Etiam sit amet tincidunt turpis, nec lobortis elit. </p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div> <!-- close column -->
      </div> <!-- close row -->
      <section class="row homeWidgets">
          <section class="col-12 col-sm-12 col-md-4 d-flex mb-2">
              <div id="memberInfo" class="mr-auto ml-auto">
                  <h3 class="text-center">Member Information</h3>
                  <ul class="m-auto">
                    <li class="mb-2"><a class="btn btn-secondary" href="#" role="button">Active Member</a></li>
                    <li class="mb-2"><a class="btn btn-secondary" href="#" role="button">Retiree</a></li>
                    <li class="mb-2"><a class="btn btn-secondary" href="#" role="button">Employer</a></li>
                  </ul>
                </div>
          </section>
          <section class="col-12 col-sm-12 col-md-4 d-flex mb-2">
              <div class="mr-auto ml-auto">
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
          <section class="col-12 col-sm-12 col-md-4 d-flex mb-2">
              <div class="mr-auto ml-auto">
                <h3 class="text-center" >Upcoming Events</h3>
                  <ul>
                    <li>Crisp County</li>
                    <li>Barrow County Schools</li>
                    <li>Crawford County Schools System</li>
                    <li>Bainbridge State College</li>
                  </ul>
                  <a href="#" class="align-self-center">More Events</a>
              </div>
          </section>
      </section>
<?php get_footer(); ?>

 