<?php
/*
Template Name: Standard Full Page
*/
?>
<?php get_header(); ?>
<!-- Main content starts -->

<div class="main-block">
<?php
// Start the loop.
while ( have_posts() ) : the_post();

  // Include the page content template.
  get_template_part( 'content', 'page' );

  // If comments are open or we have at least one comment, load up the comment template.
  if ( comments_open() || get_comments_number() ) :
    comments_template();
  endif;

// End the loop.
endwhile;
?>
  <!-- Page heading one starts -->

    <div class="page-heading-one">
      <h2>About Us</h2>
      <p class="bg-color">Something About Us</p>
    </div>

  <!-- Page heading one ends -->

  <div class="container">

    <div class="about-us-one">

      <div class="row">
        <div class="col-md-6">
          <!-- Logo section -->
          <div class="about-logo">
            <!-- logo -->
            <h2><a href="#"><i class="fa fa-laptop color"></i> Brave</a> <small>Coolest Theme Ever</small></h2>
            <p>Itaque earum rerum hic tenetur a atque atatum dele niti atque tenetur a atque atatum tenetur volup tatum. The generate lorem ipsum is there always of free from repe atition a man who chooses to enjoy pleasure repe atition a man who chooses repe atition a man who chooses enjoy of a format pleasure that has no repetition.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="about-logo">
            <h3>Something About <span class="color">Brave</span></h3>
            <p>The generate lorem ipsum is there always of free from repe aformat pleasure that has no repetition tition a man who chooses format pleasure that has no  ipsum is there always of free from repe atition a man who chooses to enjoy pleasure.</p>
          </div>
          <a href="#" class="btn btn-color">Download</a> &nbsp; <a href="#" class="btn btn-white">Check Out</a>
        </div>
      </div>

      <hr />
      <br />

      <div class="row">
        <div class="col-md-4">
          <!-- Heading and para -->
          <div class="block-heading-two">
            <h3><span>Why Choose Us?</span></h3>
          </div>
          <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur.Sed ut perspiciaatis iste natus error sit voluptatem probably haven't heard of them accusamus.</p>
        </div>
        <div class="col-md-4">
          <div class="block-heading-two">
            <h3><span>Stuffs We Do</span></h3>
          </div>
          <!-- Accordion starts -->
          <div class="panel-group" id="accordion-alt3">
           <!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->
            <div class="panel">
            <!-- Panel heading -->
             <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3">
                <i class="fa fa-angle-right"></i> Minimal Collapsible Group Item #1
                </a>
              </h4>
             </div>
             <div id="collapseOne-alt3" class="panel-collapse collapse">
              <!-- Panel body -->
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin probably haven't heard of them accusamus labore sustainable VHS.
              </div>
             </div>
            </div>
            <div class="panel">
             <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3">
                <i class="fa fa-angle-right"></i> Minimal Collapsible Group Item #2
                </a>
              </h4>
             </div>
             <div id="collapseTwo-alt3" class="panel-collapse collapse">
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin probably haven't heard of them accusamus labore sustainable VHS.
              </div>
             </div>
            </div>
            <div class="panel">
             <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3">
                <i class="fa fa-angle-right"></i> Minimal Collapsible Group Item #3
                </a>
              </h4>
             </div>
             <div id="collapseThree-alt3" class="panel-collapse collapse">
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin probably haven't heard of them accusamus labore sustainable VHS.
              </div>
             </div>
            </div>
            <div class="panel">
             <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3">
                <i class="fa fa-angle-right"></i> Minimal Collapsible Group Item #4
                </a>
              </h4>
             </div>
             <div id="collapseFour-alt3" class="panel-collapse collapse">
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin probably haven't heard of them accusamus labore sustainable VHS.
              </div>
             </div>
            </div>
          </div>
          <!-- Accordion ends -->

        </div>

        <div class="col-md-4">
          <div class="block-heading-two">
            <h3><span>Our Expertise</span></h3>
          </div>
          <h6>Web Designing</h6>
          <div class="progress pb-sm">
            <!-- White color (progress-bar-white) -->
            <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
             <span class="sr-only">40% Complete (success)</span>
            </div>
          </div>
          <h6>Doing Party</h6>
          <div class="progress pb-sm">
            <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
             <span class="sr-only">40% Complete (success)</span>
            </div>
          </div>
          <h6>Money Making</h6>
          <div class="progress pb-sm">
            <div class="progress-bar progress-bar-lblue" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
             <span class="sr-only">40% Complete (success)</span>
            </div>
          </div>
          <h6>Dog Training</h6>
          <div class="progress pb-sm">
            <div class="progress-bar progress-bar-yellow" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
             <span class="sr-only">40% Complete (success)</span>
            </div>
          </div>
        </div>

      </div>

      <hr />
      <br />
      <!-- Our Process starts -->

      <!-- Heading -->
      <div class="block-heading-six">
        <h4 class="bg-color">Our Process</h4>
      </div>
      <br />
      <div class="our-process">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <!-- Our Process Item-->
            <div class="our-process-item">
              <!-- Icon -->
              <a href="#" class="white bg-red"> <i class="fa fa-lightbulb-o"></i></a>
              <!-- Arrow Image -->
              <img src="<?php echo get_template_directory_uri(); ?>/img/our-process/arrow.png" alt="" class="img-responsive hidden-sm hidden-xs" />
              <!-- Heading -->
              <h4>Idea</h4>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="our-process-item">
              <a href="#" class="white bg-lblue"> <i class="fa fa-desktop"></i></a>
              <img src="<?php echo get_template_directory_uri(); ?>/img/our-process/arrow.png" alt="" class="img-responsive hidden-sm hidden-xs" />
              <h4>Prototype</h4>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="our-process-item">
              <a href="#" class="white bg-green"> <i class="fa fa-code"></i></a>
              <img src="<?php echo get_template_directory_uri(); ?>/img/our-process/arrow.png" alt="" class="img-responsive hidden-sm hidden-xs" />
              <h4>Coding</h4>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="our-process-item">
              <a href="#" class="white bg-purple"> <i class="fa fa-check-square-o"></i>
              </a>
              <h4>Testing</h4>
            </div>
          </div>
        </div>
      </div>
      <!-- Our Process ends -->

      <hr />
      <br />
      <!-- Our Team starts -->

      <!-- Heading -->
      <div class="block-heading-six">
        <h4 class="bg-color">Our Team</h4>
      </div>
      <br />

      <!-- Our team starts -->

      <div class="team-six">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <!-- Team Member -->
            <div class="team-member">
              <!-- Image -->
              <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/user/1.jpg" alt="" />
              <!-- Name -->
              <h4>Jennifer Doe</h4>
              <span class="deg">Creative</span>
              <!-- Team Links -->
              <div class="team-links">
                <a href="#"><i class="fa fa-comment"></i></a>
                <a href="#"><i class="fa fa-envelope"></i></a>
                <a href="#"><i class="fa fa-phone"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <!-- Team Member -->
            <div class="team-member">
              <!-- Image -->
              <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/user/2.jpg" alt="" />
              <!-- Name -->
              <h4>Jennifer Doe</h4>
              <span class="deg">Programmer</span>
              <!-- Team Links -->
              <div class="team-links">
                <a href="#"><i class="fa fa-comment"></i></a>
                <a href="#"><i class="fa fa-envelope"></i></a>
                <a href="#"><i class="fa fa-phone"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <!-- Team Member -->
            <div class="team-member">
              <!-- Image -->
              <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/user/3.jpg" alt="" />
              <!-- Name -->
              <h4>Jennifer Doe</h4>
              <span class="deg">CEO</span>
              <!-- Team Links -->
              <div class="team-links">
                <a href="#"><i class="fa fa-comment"></i></a>
                <a href="#"><i class="fa fa-envelope"></i></a>
                <a href="#"><i class="fa fa-phone"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <!-- Team Member -->
            <div class="team-member">
              <!-- Image -->
              <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/user/4.jpg" alt="" />
              <!-- Name -->
              <h4>Jennifer Doe</h4>
              <span class="deg">Manager</span>
              <!-- Team Links -->
              <div class="team-links">
                <a href="#"><i class="fa fa-comment"></i></a>
                <a href="#"><i class="fa fa-envelope"></i></a>
                <a href="#"><i class="fa fa-phone"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Our team ends -->

      <br />
      <hr />
      <br />

      <!-- CTA Starts -->

      <div class="cta-three">
        <!-- CTA Three Content -->
        <div class="cta-three-content">
          <div class="row">
            <div class="col-md-9">
              <h4>Righteous indignation power and the charmes power untrammelled</h4>
            </div>
            <div class="col-md-3">
              <a href="#" class="btn btn-color btn-lg"><i class="fa fa-download"></i>&nbsp; Download Now</a>
            </div>
          </div>
        </div>
      </div>

      <!-- CTA Ends -->

      <br />

    </div>

  </div>
</div>

<!-- Main content ends -->


<?php get_footer(); ?>