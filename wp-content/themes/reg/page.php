<?php
/*
Template Name: Standard Full Page
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



      <!-- Block heading seven -->
      <?php if (have_posts()) : while (have_posts()) : the_post();?>
      <?php the_content(); ?>
      <?php endwhile; endif; ?>


    </div>

  </div>
</div>

<!-- Main content ends -->


<?php get_footer(); ?>