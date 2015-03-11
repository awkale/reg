<?php
/*
Template Name: Contact Page
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
  <!-- Page heading two starts -->

  <div class="page-heading-two">
    <div class="container">
      <h2>Contact Us <span>Something goes here</span></h2>
      <div class="breads">
        Home / <a href="#">Page</a> / <a href="#">Sub Page</a>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>

  <!-- Page heading two ends -->

  <div class="container">
    <div class="contact-us-two">

      <div class="row">
        <div class="col-md-5">
          <!-- Contact Form -->
          <div class="contact-form">
            <h5>Contact Form</h5>
            <!-- Form -->
            <form class="form" role="form">
              <!-- Form Group -->
              <div class="form-group">
                <input type="text" class="form-control" id="name" placeholder="Enter Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="email" placeholder="Enter Email">
              </div>
              <div class="form-group">
                <textarea class="form-control" id="comments" rows="7" placeholder="Enter Message"></textarea>
              </div>
              <!-- Button -->
              <button type="button" class="btn btn-red">Submit</button>&nbsp;
              <button type="button" class="btn btn-default">Reset</button>
            </form>
          </div>
          <hr />
        </div>
        <div class="col-md-7">
          <!-- Contact map -->
          <div class="contact-map">
            <h5>Locate Us</h5>
            <!-- Map Link -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15615.590366449029!2d79.823997513746!3d11.912214884509545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x948a846878ea738c!2sAchariya+Bala+Siksha+Mandir!5e0!3m2!1sen!2sin!4v1402563074325" ></iframe>
          </div>
          <hr />
        </div>
      </div>

      <div class="row text-center">
        <div class="col-md-3 col-sm-6">
          <!-- Contact Item -->
          <div class="contact-item bg-red">
            <!-- Icon -->
            <i class="fa fa-phone"></i>
            <!-- Heading -->
            <h4>Call Us</h4>
            <!-- Paragraph -->
            <p>Tel : + (383) 893 3933<br/>
              Mob : + 939 393 9393</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <!-- Contact Item -->
          <div class="contact-item bg-lblue">
            <i class="fa fa-building-o"></i>
            <h4>Address</h4>
            <p>#97, BTM Layout,<br/>
              Bangalore - 68.</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <!-- Contact Item -->
          <div class="contact-item bg-green">
            <i class="fa fa-envelope"></i>
            <h4>Mail Us</h4>
            <p><a href="#">info@mssolution.com</a><br />
              <a href="#">Service@mssolution.com</a></p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <!-- Contact Item -->
          <div class="contact-item bg-purple">
            <i class="fa fa-calendar-o"></i>
            <h4>Business Hours</h4>
            <p>Time : 9.30 to 5.30<br />
              Sunday Holiday</p>
          </div>
        </div>
      </div>


    </div>
  </div>
</div>

<!-- Main content ends -->


<?php get_footer(); ?>