<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="post-header">
        <div class="date"><?php the_time( 'M j y' ); ?></div>
        <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <div class="author"><?php the_author(); ?></div>
      </div><!--end post header-->
      <div class="entry clear">
        <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
        <?php the_content(); ?>
        <?php edit_post_link(); ?>
        <?php wp_link_pages(); ?>
      </div><!--end entry-->
      <div class="post-footer">
        <div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
      </div><!--end post footer-->
    </div><!--end post-->
  <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
  <div class="navigation index">
    <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
    <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
  </div><!--end navigation-->
<?php else : ?>
<?php endif; ?>

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

          <!-- Blog item starts -->
          <div class="blog-one-item">
            <!-- blog One Img -->
            <div class="blog-one-img">
              <!-- Image -->
              <a href="#"><img src="img/gallery/small/1.jpg" alt="" class="img-responsive img-thumbnail" /></a>
            </div>
            <!-- blog One Content -->
            <div class="blog-one-content">
              <!-- Heading -->
              <h3><a href="blog-single.html">Ducimus Qui Blanditiis Prey Ntium Deleniti</a></h3>
              <!-- Blog meta -->
              <div class="blog-meta">
                <!-- Date -->
                <a href="#"><i class="fa fa-calendar"></i> &nbsp; 24.3.2014</a> &nbsp;
                <!-- Author -->
                <a href="#"><i class="fa fa-user"></i> &nbsp; Ravi Kumar</a> &nbsp;
                <!-- Comments -->
                <a href="#"><i class="fa fa-comments"></i> &nbsp; 6 Comments</a>
              </div>
              <!-- Paragraph -->
              <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae  rerum hic tenetur.</p>
            </div>
          </div>
          <!-- Blog item ends -->

          <!-- Blog item starts -->
          <div class="blog-one-item">
            <!-- blog One Img -->
            <div class="blog-one-img">
              <!-- Image -->
              <a href="#"><img src="img/gallery/small/2.jpg" alt="" class="img-responsive img-thumbnail" /></a>
            </div>
            <!-- blog One Content -->
            <div class="blog-one-content">
              <!-- Heading -->
              <h3><a href="blog-single.html">Ducimus Qui Blanditiis Prey Ntium Deleniti</a></h3>
              <!-- Blog meta -->
              <div class="blog-meta">
                <!-- Date -->
                <a href="#"><i class="fa fa-calendar"></i> &nbsp; 24.3.2014</a> &nbsp;
                <!-- Author -->
                <a href="#"><i class="fa fa-user"></i> &nbsp; Ravi Kumar</a> &nbsp;
                <!-- Comments -->
                <a href="#"><i class="fa fa-comments"></i> &nbsp; 6 Comments</a>
              </div>
              <!-- Paragraph -->
              <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae  rerum hic tenetur.</p>
            </div>
          </div>
          <!-- Blog item ends -->

          <!-- Blog item starts -->
          <div class="blog-one-item">
            <!-- blog One Img -->
            <div class="blog-one-img">
              <!-- Image -->
              <a href="#"><img src="img/gallery/small/3.jpg" alt="" class="img-responsive img-thumbnail" /></a>
            </div>
            <!-- blog One Content -->
            <div class="blog-one-content">
              <!-- Heading -->
              <h3><a href="blog-single.html">Ducimus Qui Blanditiis Prey Ntium Deleniti</a></h3>
              <!-- Blog meta -->
              <div class="blog-meta">
                <!-- Date -->
                <a href="#"><i class="fa fa-calendar"></i> &nbsp; 24.3.2014</a> &nbsp;
                <!-- Author -->
                <a href="#"><i class="fa fa-user"></i> &nbsp; Ravi Kumar</a> &nbsp;
                <!-- Comments -->
                <a href="#"><i class="fa fa-comments"></i> &nbsp; 6 Comments</a>
              </div>
              <!-- Paragraph -->
              <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae  rerum hic tenetur.</p>
            </div>
          </div>
          <!-- Blog item ends -->

          <!-- Blog item starts -->
          <div class="blog-one-item">
            <!-- blog One Img -->
            <div class="blog-one-img">
              <!-- Image -->
              <a href="#"><img src="img/gallery/small/4.jpg" alt="" class="img-responsive img-thumbnail" /></a>
            </div>
            <!-- blog One Content -->
            <div class="blog-one-content">
              <!-- Heading -->
              <h3><a href="blog-single.html">Ducimus Qui Blanditiis Prey Ntium Deleniti</a></h3>
              <!-- Blog meta -->
              <div class="blog-meta">
                <!-- Date -->
                <a href="#"><i class="fa fa-calendar"></i> &nbsp; 24.3.2014</a> &nbsp;
                <!-- Author -->
                <a href="#"><i class="fa fa-user"></i> &nbsp; Ravi Kumar</a> &nbsp;
                <!-- Comments -->
                <a href="#"><i class="fa fa-comments"></i> &nbsp; 6 Comments</a>
              </div>
              <!-- Paragraph -->
              <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae  rerum hic tenetur.</p>
            </div>
          </div>
          <!-- Blog item ends -->

          <!-- Blog item starts -->
          <div class="blog-one-item">
            <!-- blog One Img -->
            <div class="blog-one-img">
              <!-- Image -->
              <a href="#"><img src="img/gallery/small/5.jpg" alt="" class="img-responsive img-thumbnail" /></a>
            </div>
            <!-- blog One Content -->
            <div class="blog-one-content">
              <!-- Heading -->
              <h3><a href="blog-single.html">Ducimus Qui Blanditiis Prey Ntium Deleniti</a></h3>
              <!-- Blog meta -->
              <div class="blog-meta">
                <!-- Date -->
                <a href="#"><i class="fa fa-calendar"></i> &nbsp; 24.3.2014</a> &nbsp;
                <!-- Author -->
                <a href="#"><i class="fa fa-user"></i> &nbsp; Ravi Kumar</a> &nbsp;
                <!-- Comments -->
                <a href="#"><i class="fa fa-comments"></i> &nbsp; 6 Comments</a>
              </div>
              <!-- Paragraph -->
              <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae  rerum hic tenetur.</p>
            </div>
          </div>
          <!-- Blog item ends -->

          <!-- Blog item starts -->
          <div class="blog-one-item">
            <!-- blog One Img -->
            <div class="blog-one-img">
              <!-- Image -->
              <a href="#"><img src="img/gallery/small/6.jpg" alt="" class="img-responsive img-thumbnail" /></a>
            </div>
            <!-- blog One Content -->
            <div class="blog-one-content">
              <!-- Heading -->
              <h3><a href="blog-single.html">Ducimus Qui Blanditiis Prey Ntium Deleniti</a></h3>
              <!-- Blog meta -->
              <div class="blog-meta">
                <!-- Date -->
                <a href="#"><i class="fa fa-calendar"></i> &nbsp; 24.3.2014</a> &nbsp;
                <!-- Author -->
                <a href="#"><i class="fa fa-user"></i> &nbsp; Ravi Kumar</a> &nbsp;
                <!-- Comments -->
                <a href="#"><i class="fa fa-comments"></i> &nbsp; 6 Comments</a>
              </div>
              <!-- Paragraph -->
              <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae  rerum hic tenetur.</p>
            </div>
          </div>
          <!-- Blog item ends -->

          <!-- Blog item starts -->
          <div class="blog-one-item">
            <!-- blog One Img -->
            <div class="blog-one-img">
              <!-- Image -->
              <a href="#"><img src="img/gallery/small/7.jpg" alt="" class="img-responsive img-thumbnail" /></a>
            </div>
            <!-- blog One Content -->
            <div class="blog-one-content">
              <!-- Heading -->
              <h3><a href="blog-single.html">Ducimus Qui Blanditiis Prey Ntium Deleniti</a></h3>
              <!-- Blog meta -->
              <div class="blog-meta">
                <!-- Date -->
                <a href="#"><i class="fa fa-calendar"></i> &nbsp; 24.3.2014</a> &nbsp;
                <!-- Author -->
                <a href="#"><i class="fa fa-user"></i> &nbsp; Ravi Kumar</a> &nbsp;
                <!-- Comments -->
                <a href="#"><i class="fa fa-comments"></i> &nbsp; 6 Comments</a>
              </div>
              <!-- Paragraph -->
              <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae  rerum hic tenetur.</p>
            </div>
          </div>
          <!-- Blog item ends -->

          <!-- Pagination -->
          <ul class="pagination">
            <!-- List -->
            <li><a href="#">&laquo;</a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li>
          </ul>
        </div>

<?php get_sidebar(); ?>

      </div>
    </div>

  </div>
</div>

<!-- Main content ends -->


<?php get_footer(); ?>