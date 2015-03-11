<?php
/*
Template Name: Homepage
*/
?>
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 */

get_header(); ?>

<!-- Main content starts -->

<div class="main-block">

  <!-- Revolution slider full width starts -->
  <div class="r-slider">
    <div class="bannercontainer">
      <div class="banner">

        <ul>
          <!-- Slide #3 starts -->
          <li data-transition="slidedown">
            <img src="<?php echo get_template_directory_uri(); ?>/img/rev-slider/transparent.png" style="background-color:#fafafa" alt=""/>
            <!-- Layer 1 -->
            <div class="tp-caption b-medium-back bg-yellow lft fadeout" data-x="center" data-hoffset="0" data-y="70" data-voffset="0" data-speed="1000" data-start="100" style="z-index: 2;">
              MAKE THE PLEDGE TODAY
            </div>
            <!-- Layer 2 -->
            <div class="tp-caption b-big-bold black skewfromleft fadeout" data-x="center" data-hoffset="0" data-y="130" data-voffset="0" data-speed="1000" data-start="800" data-splitin="chars" data-splitout="chars" data-elementdelay="0.07" data-endelementdelay="0.07" data-endspeed="300" style="z-index: 2;">
              POWER IS IN YOUR HAND
            </div>
            <!-- Layer 3 -->
            <div class="tp-caption b-small-para black lfb text-center" data-x="center" data-y="200" data-speed="800" data-start="2300" style="z-index: 8">
              Lorem Ipsum is simply dummy text of the printing industry. Lorem Ipsum is simply dummy text of the <br /> printing industry. Lorem Ipsum dummy printing dummy industry.
            </div>
            <!-- Layer 4 -->
            <div class="tp-caption b-button lfb text-center" data-x="center" data-y="270" data-speed="800" data-start="2800" style="z-index: 8">
              <a href="<?php echo get_template_directory_uri(); ?>/donate" class="bg-color rounded-1">DONATE NOW</a>
            </div>
          </li>
          <!-- Slide #3 ends -->
        </ul>
        </div>
    </div>
  </div>
  <!-- Revolution slider full width ends -->
  <div class="container">
    <div class="text-center">
      <?php while ( have_posts() ) : the_post() ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
    </div>
    <div class="divider-1"></div>
    <!-- Image Box #3 Starts -->
    <div class="img-box-3 text-center">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <!-- Image Box #3 Item -->
          <div class="img-box-3-item">
            <div class="img-box-3-icon bg-red">
              <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/flat-icons/10.png" alt="" class="img-responsive" /></a>
            </div>
            <h4><a href="#">Pledge</a></h4>
            <div class="bor bg-red"></div>
            <p>Maiores alias consequatur aut perferendis doloribus asperiores repellat earum dolor.</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <!-- Image Box #3 Item -->
          <div class="img-box-3-item">
            <div class="img-box-3-icon bg-lblue">
              <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/flat-icons/3.png" alt="" class="img-responsive" /></a>
            </div>
            <h4><a href="#">Learn</a></h4>
            <div class="bor bg-lblue"></div>
            <p>Maiores alias consequatur aut perferendis doloribus asperiores repellat earum dolor.</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <!-- Image Box #3 Item -->
          <div class="img-box-3-item">
            <div class="img-box-3-icon bg-green">
              <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/flat-icons/17.png" alt="" class="img-responsive" /></a>
            </div>
            <h4><a href="#">Donate</a></h4>
            <div class="bor bg-green"></div>
            <p>Maiores alias consequatur aut perferendis doloribus asperiores repellat earum dolor.</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <!-- Image Box #3 Item -->
          <div class="img-box-3-item">
            <div class="img-box-3-icon bg-blue">
              <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/flat-icons/20.png" alt="" class="img-responsive" /></a>
            </div>
            <h4><a href="#">FAQ</a></h4>
            <div class="bor bg-blue"></div>
            <p>Maiores alias consequatur aut perferendis doloribus asperiores repellat earum dolor.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Image Box #3 Ends -->
  </div>
</div>

<!-- Main content ends -->

<?php get_footer(); ?>
