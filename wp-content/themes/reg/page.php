<?php
/*
Template Name: Standard Full Page
*/
?>
<?php get_header(); ?>
<!-- Main content starts -->
<?php if (have_posts()) : while (have_posts()) : the_post();?>
<div class="main-block">

  <!-- Page heading one starts -->

    <div class="page-heading-one">
      <h2><?php the_title(); ?></h2>
      <p class="bg-color"><?php echo get_post_meta($post->ID, 'subtitle', true); ?></p>
    </div>

  <!-- Page heading one ends -->

  <div class="container">

    <div class="about-us-one">



      <!-- Block heading seven -->

      <?php the_content(); ?>
      <?php endwhile; endif; ?>


    </div>

  </div>
</div>

<!-- Main content ends -->


<?php get_footer(); ?>