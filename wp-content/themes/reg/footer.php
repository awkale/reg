
<!-- Foot Starts -->

<div class="foot">
  <!-- Container -->
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <!-- Foot Item -->
        <div class="foot-item">
          <!-- Heading -->
          <h5 class="bold"><i class="fa fa-user"></i>&nbsp;&nbsp;About</h5>
          <p>Itaque earum rerum hic tenetur a atque atatum dele niti atque tenetur a atque atatum tenetur volup tatum.</p>
          <div class="brand-bg">
            <!-- Social Media Icons -->
            <a target="_blank" href="https://www.facebook.com/raisingforeffectivegiving" class="facebook"><i class="fa fa-facebook circle-3"></i></a>
            <a target="_blank" href="https://twitter.com/REGcharity" class="twitter"><i class="fa fa-twitter circle-3"></i></a>
            <a target="_blank" href="https://www.youtube.com/channel/UC9Gkhg-FeQjWqcLnaal_Fdg" class="youtube"><i class="fa fa-youtube circle-3"></i></a>
          </div>
          <div class="subscribe-box">
            <h5 class="bold">Subscribe :</h5>
            <!-- Form -->
            <form role="form">
              <!-- Input Group -->
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Enter Email Id">
                <span class="input-group-btn">
                  <button class="btn btn-color" type="button">Subscribe</button>
                </span>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <!-- Foot Item -->
        <div class="foot-item">
          <!-- Heading -->
          <h5 class="bold"><i class="fa fa-comments"></i>&nbsp;&nbsp;Recent Posts</h5>
          <!-- Foot Item Content -->
          <div class="foot-item-content">
            <ul class="list-unstyled">
              <!-- Link -->
              <?php
                $args = array( 'numberposts' => '5' );
                $recent_posts = wp_get_recent_posts( $args );
                foreach( $recent_posts as $recent ){
                  echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
                }
              ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <!-- Foot Item -->
        <div class="foot-item">
          <!-- Heading -->
          <h5 class="bold"><i class="fa fa-picture-o"></i>&nbsp;&nbsp;Recent Images</h5>
          <!-- Foot Item Content -->
          <div class="foot-item-content">
            <!-- Foot Recent Image -->
            <div class="foot-recent-img">
              <a href="img/gallery/small/1.jpg" class="lightbox"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery/small/1.jpg" alt="" class="img-responsive img-thumbnail" /></a>
              <a href="img/gallery/small/2.jpg" class="lightbox"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery/small/2.jpg" alt="" class="img-responsive img-thumbnail" /></a>
              <a href="img/gallery/small/3.jpg" class="lightbox"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery/small/3.jpg" alt="" class="img-responsive img-thumbnail" /></a>
            </div>
            <!-- Foot Recent Image -->
            <div class="foot-recent-img">
              <a href="img/gallery/small/1.jpg" class="lightbox"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery/small/1.jpg" alt="" class="img-responsive img-thumbnail" /></a>
              <a href="img/gallery/small/2.jpg" class="lightbox"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery/small/2.jpg" alt="" class="img-responsive img-thumbnail" /></a>
              <a href="img/gallery/small/3.jpg" class="lightbox"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery/small/3.jpg" alt="" class="img-responsive img-thumbnail" /></a>
            </div>
            <div class="foot-recent-img">
              <a href="img/gallery/small/1.jpg" class="lightbox"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery/small/1.jpg" alt="" class="img-responsive img-thumbnail" /></a>
              <a href="img/gallery/small/2.jpg" class="lightbox"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery/small/2.jpg" alt="" class="img-responsive img-thumbnail" /></a>
              <a href="img/gallery/small/3.jpg" class="lightbox"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery/small/3.jpg" alt="" class="img-responsive img-thumbnail" /></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <!-- Foot Item -->
        <div class="foot-item">
          <!-- Heading -->
          <h5 class="bold"><i class="fa fa-building-o"></i>&nbsp;&nbsp;Contact Us</h5>
          <!-- Foot Item Content -->
          <div class="foot-item-content address">
            <!-- Heading -->
            <h6 class="bold"><i class="fa fa-home"></i>&nbsp;&nbsp;Hanks Ltd</h6>
            <!-- Paragraph -->
            <p class="add">
             Bharathi Nagar, South Cherry Road,<br />
             North Bangalore - 535089.</p>
             <p class="tel"> <i class="fa fa-phone"></i> Tel : + (833) - 839 8393<br />
              <i class="fa fa-envelope"></i>  Mail : <a href="#">infodesk@uk.com</a><br />
              <i class="fa fa-calendar"></i> Business Hours : 9:30 - 5:30</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Foot Ends -->

  <!-- Footer Starts -->

  <footer>
    <!-- Container -->
    <div class="container">
      <!-- Footer Content -->
      <!-- Paragraph -->
      <p class="pull-left">Copyright &copy; 2014 - <a href="#">Your Site</a></p>
      <div class="list-inline pull-right">
        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class'=> 'list-inline' ) ); ?>
        </div>
        <!-- Clearfix -->
        <div class="clearfix"></div>
      </div>
    </footer>

    <!-- Footer Ends -->

  </div>

  <!-- Outer Ends -->

  <!-- Scroll to top -->
  <span class="totop"><a href="#"><i class="fa fa-angle-up bg-color"></i></a></span>

  <!-- Javascript files -->
  <!-- jQuery -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
  <!-- Bootstrap JS -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
  <!-- Placeholders JS -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/placeholders.js"></script>
  <!-- Magnific Popup -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>
  <!-- Owl carousel -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
  <!-- Respond JS for IE8 -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
  <!-- HTML5 Support for IE -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
  <!-- Main JS -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

  <!-- Javascript for this page -->
  <!-- Revolution slider -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.themepunch.tools.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.themepunch.revolution.min.js"></script>
  <!-- Waypoints -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/waypoints.min.js"></script>
  <!-- jQuery CountTo -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.countTo.js"></script>

  <script type="text/javascript">
    <!-- Counting code -->
    $(document).ready(function(){
        // Way Points With Count To()
        $('.number-count').waypoint(function(down){
          if(!$(this).hasClass('stop-counter'))
          {
            $(this).countTo();
            $(this).addClass('stop-counter');
          }
        }, {
          offset: '90%'
        });
      });
    </script>

    <script type="text/javascript">
      jQuery(document).ready(function() {
        jQuery('.r-slider .banner').revolution({
          delay:7000,
          startheight:400,
          startwidth:1000,
          startWithSlide:0,

          fullScreenAlignForce:"off",
          autoHeight:"off",

          shuffle:"off",

          onHoverStop:"on",

          thumbWidth:100,
          thumbHeight:50,
          thumbAmount:3,

          hideThumbsOnMobile:"on",
          hideNavDelayOnMobile:1500,
          hideBulletsOnMobile:"off",
          hideArrowsOnMobile:"off",
          hideThumbsUnderResoluition:0,

          hideThumbs:10,
          hideTimerBar:"on",

          keyboardNavigation:"on",

          navigationType:"bullet",
          navigationArrows:"solo",
          navigationStyle:"round",

          navigationHAlign:"center",
          navigationVAlign:"bottom",

          soloArrowLeftHalign:"left",
          soloArrowLeftValign:"center",
          soloArrowLeftHOffset:20,
          soloArrowLeftVOffset:0,

          soloArrowRightHalign:"right",
          soloArrowRightValign:"center",
          soloArrowRightHOffset:20,
          soloArrowRightVOffset:0,


          touchenabled:"on",
          swipe_velocity:"0.7",
          swipe_max_touches:"1",
          swipe_min_touches:"1",
          drag_block_vertical:"false",

          stopAtSlide:-1,
          stopAfterLoops:-1,
          hideCaptionAtLimit:0,
          hideAllCaptionAtLilmit:0,
          hideSliderAtLimit:0,

          dottedOverlay:"none",

          spinned:"spinner4",

          fullWidth:"off",
          forceFullWidth:"off",
          fullScreen:"off",
          fullScreenOffsetContainer:"#topheader-to-offset",

        });
});
</script>

<!-- Custom JS. Type your JS code in custom.js file -->
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>

    <!--
    Style switcher. This is just for demo purpose only.
    If you don't want remove the below line.
    Some of the features of style switcher won't work on offline. THey only work when you upload it to server
  -->
  <!-- <script src="style-switcher/style-switcher.js"></script> -->

</body>
</html>