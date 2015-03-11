<?php
/*
Template Name: About Page
*/
?>
<?php get_header(); ?>
<!-- Main content starts -->

<div class="main-block">

  <!-- Page heading one starts -->

    <div class="page-heading-one">
      <h2><?php the_title(); ?></h2>
      <p class="bg-color">Something About Us</p>
    </div>

  <!-- Page heading one ends -->

  <div class="container">

    <div class="about-us-one">


      <!-- Effective Giving starts -->

      <!-- Block heading seven -->
      <?php if (have_posts()) : while (have_posts()) : the_post();?>
      <?php the_content(); ?>
      <?php endwhile; endif; ?>

      <div class="block-heading-seven">
        <h3>Effective Giving</h3>
      </div>
      <br />
      <div class="effective-giving">
        <div class="row">
          <div class="col-md-6">
            <h6>Biggest Effective Giving Charity in World</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In suscipit sem sed felis volutpat feugiat. Vivamus vitae risus eu est facilisis euismod. Nulla sodales neque eu tincidunt egestas. </p>
            <hr>
          </div>
          <div class="col-md-6">
            <h6>Largest Poker Related Charity in the World</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In suscipit sem sed felis volutpat feugiat. Vivamus vitae risus eu est facilisis euismod. Nulla sodales neque eu tincidunt egestas. </p>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <h6>Founded by some of the most Elite Poker Players on Earth</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In suscipit sem sed felis volutpat feugiat. Vivamus vitae risus eu est facilisis euismod. Nulla sodales neque eu tincidunt egestas. </p>
          </div>
          <div class="col-md-6">
            <h6>Using our brains for the Common Good</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In suscipit sem sed felis volutpat feugiat. Vivamus vitae risus eu est facilisis euismod. Nulla sodales neque eu tincidunt egestas. </p>
          </div>
        </div>
      </div>
      <!-- Effective Giving ends -->

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