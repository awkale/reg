<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>


<!-- Main content starts -->

<div class="main-block">

  <!-- Page heading two starts -->

  <div class="page-heading-two">
    <div class="container">
      <h2>Blog One <span>Something goes here</span></h2>
      <div class="breads">
        Home / <a href="#">Page</a> / <a href="#">Sub Page</a>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>

  <!-- Page heading two ends -->

  <div class="container">

    <!-- blog One -->
    <div class="blog-one">
      <div class="row">
        <!-- Mainbar column -->
        <div class="col-md-8">

          <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
              <!-- Blog item starts -->
              <div class="blog-one-item">
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                  <!-- blog One Img -->
                  <div class="blog-one-img">
                    <!-- Image -->
                    <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(array('auto', 'auto')); ?>
                  </div>
                  <!-- blog One Content -->
                  <div class="blog-one-content">
                    <div class="post-header ">
                    <h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                    <div class="blog-meta">
                      <div class="date fa fa-calendar"><?php the_time( 'M j y' ); ?></div>

                      <div class="author fa fa-user"><?php the_author(); ?></div>
                      </div>
                    </div><!--end post header-->
                    <div class="entry clear">
                      <?php the_content(); ?>
                      <?php edit_post_link(); ?>
                      <?php wp_link_pages(); ?>
                    </div><!--end entry-->
                  </div>
                </div><!--end post-->
              </div>
              <!-- Blog item ends -->
            <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>

            <div class="navigation index">
              <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
              <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
            </div><!--end navigation-->
          <?php else : ?>
          <?php endif; ?>

        </div>

        <?php get_sidebar(); ?>

      </div>
    </div>

  </div>
</div>

<!-- Main content ends -->


<?php get_footer(); ?>