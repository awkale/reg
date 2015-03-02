<?php
/**
 * The template for displaying all single posts and attachments
 *
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <?php
    // Start the loop.
    while ( have_posts() ) : the_post();

      /*
       * Include the post format-specific template for the content. If you want to
       * use this in a child theme, then include a file called called content-___.php
       * (where ___ is the post format) and that will be used instead.
       */
      get_template_part( 'content', get_post_format() );

      // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;

      // Previous/next post navigation.
      the_post_navigation( array(
        'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
          '<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
          '<span class="post-title">%title</span>',
        'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
          '<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
          '<span class="post-title">%title</span>',
      ) );

    // End the loop.
    endwhile;
    ?>

    </main><!-- .site-main -->
  </div><!-- .content-area -->

  <!-- Main content starts -->

  <div class="main-block">

    <!-- Page heading two starts -->

    <div class="page-heading-two">
      <div class="container">
        <h2>Blog Single <span>Something goes here</span></h2>
        <div class="breads">
          Home / <a href="#">Page</a> / <a href="#">Sub Page</a>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>

    <!-- Page heading two ends -->

    <div class="container">

      <!-- blog two -->
      <div class="blog-two">
        <div class="row">
          <!-- Mainbar column -->
          <div class="col-md-8">

            <!-- Blog item starts -->
            <div class="blog-two-item">
              <!-- blog two Content -->
              <div class="blog-two-content">
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

                <!-- Carousel -->

                <!-- Bootstrap carousel usage
                  Bootstrap carousel should have id. Below i am using "bs-carousel-X". Where "X" denotes number". If a page has more than 1 carousel, then add the new carousel with the id "bs-carousel-1", "bs-carousel-2". You also need to update the id in, "carousel indicators" section and "carousel control" section.

                  Carousel comes with 3 main data attributes which you can customize. They are...
                  data-interval - Time delay between item cycle. Default value "5000".
                  data-pause - Pause on hover. Default value "pause".
                  data-wrap - Continues cycle or stop at the end. Default value "true".
                -->

                <!-- Outer layer -->
                <div id="bs-carousel-1" class="carousel slide" data-ride="carousel" data-interval="5000" data-pause="hover" data-wrap="true">
                  <!-- Bootstrap indicators. If you don't need indicators, remove the below section -->
                  <ol class="carousel-indicators">
                    <li data-target="#bs-carousel-1" data-slide-to="0" class="active"></li>
                    <li data-target="#bs-carousel-1" data-slide-to="1"></li>
                    <li data-target="#bs-carousel-1" data-slide-to="2"></li>
                  </ol>
                  <!-- Slides. You can also add captions -->
                  <div class="carousel-inner">
                    <!-- Item, First item should have extra class "active" -->
                    <div class="item active">
                      <!-- Image -->
                      <img src="img/backgrounds/s1.jpg" alt="">
                    </div>
                    <div class="item">
                      <img src="img/backgrounds/s2.jpg" alt="">
                    </div>
                    <div class="item">
                      <img src="img/backgrounds/s3.jpg" alt="">
                    </div>
                  </div>
                  <!-- Carousel controls (arrows). If you don't need controls, remove the below section -->
                  <a class="left carousel-control" href="#bs-carousel-1" role="button" data-slide="prev">
                    <span class="fa fa-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#bs-carousel-1" role="button" data-slide="next">
                    <span class="fa fa-chevron-right"></span>
                  </a>
                </div>


                <!-- Paragraph -->
                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae  rerum hic tenetur. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae  rerum hic tenetur.Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae  rerum hic tenetur. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae  rerum hic tenetur. <br />
                Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae  rerum hic tenetur. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae  rerum hic tenetur.Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae  rerum hic tenetur. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae  rerum hic tenetur.<br />
                Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae  rerum hic tenetur. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae  rerum hic tenetur.Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae  rerum hic tenetur. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae  rerum hic tenetur.Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae  rerum hic tenetur. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae  rerum hic tenetur.</p>
              </div>
            </div>
            <!-- Blog item ends -->

            <!-- Social media sharing section -->
            <div class="well">
              <span class="bold">Sharing is Sexy: </span>  &nbsp; &nbsp;
              <span class="brand-bg">
                <a href="#" class="facebook"><i class="fa fa-facebook square-2 rounded-1"></i></a>
                <a href="#" class="twitter"><i class="fa fa-twitter square-2 rounded-1"></i></a>
                <a href="#" class="google-plus"><i class="fa fa-google-plus square-2 rounded-1"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin square-2 rounded-1"></i></a>
                <a href="#" class="pinterest"><i class="fa fa-pinterest square-2 rounded-1"></i></a>
              </span>
            </div>

            <!-- Author section -->
            <div class="blog-author well">
              <!-- Author image -->
              <div class="blog-author-img">
                <a href="#"><img src="img/user/1.jpg" alt="" class="img-responsive img-thumbnail" /></a>
              </div>
              <!-- Author details -->
              <div class="blog-author-content">
                <h5><a href="#">Ashok Ramesh <small>Madurai</small></a></h5>
                <p>Temporibus autem quibusdam et aut officiis debitis aut  molestiae non recusandae rerum hic tenetur rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae rerum hic tenetur.</p>
              </div>
              <div class="clearfix"></div>
            </div>

            <!-- Comments section -->
            <div class="blog-comments">
              <h4><i class="fa fa-comments color"></i>&nbsp; 6 Comments</h4>
              <hr />

              <!-- Blog comment item -->
              <div class="blog-comment-item">
                <div class="comment-author-image">
                  <a href="#"><img src="img/user/1.jpg" alt="" class="img-responsive img-thumbnail" /></a>
                </div>
                <div class="comment-details">
                  <!-- Name -->
                  <h5><a href="#">Frank Thomas</a> <small>08/08/2013</small></h5>
                  <!-- Paragraph -->
                  <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
                </div>
              </div>

              <!-- Blog comment item -->
              <div class="blog-comment-item">
                <div class="comment-author-image">
                  <a href="#"><img src="img/user/2.jpg" alt="" class="img-responsive img-thumbnail" /></a>
                </div>
                <div class="comment-details">
                  <!-- Name -->
                  <h5><a href="#">Bob Marley</a> <small>08/08/2013</small></h5>
                  <!-- Paragraph -->
                  <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et m et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
                </div>
              </div>

              <!-- Blog comment item -->
              <div class="blog-comment-item comment-reply">
                <div class="comment-author-image">
                  <a href="#"><img src="img/user/3.jpg" alt="" class="img-responsive img-thumbnail" /></a>
                </div>
                <div class="comment-details">
                  <!-- Name -->
                  <h5><a href="#">James Brown</a> <small>08/08/2013</small></h5>
                  <!-- Paragraph -->
                  <p>Debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
                </div>
              </div>

              <!-- Blog comment item -->
              <div class="blog-comment-item">
                <div class="comment-author-image">
                  <a href="#"><img src="img/user/4.jpg" alt="" class="img-responsive img-thumbnail" /></a>
                </div>
                <div class="comment-details">
                  <!-- Name -->
                  <h5><a href="#">Jockey Rambo</a> <small>08/08/2013</small></h5>
                  <!-- Paragraph -->
                  <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptatesdiandae sint et molestiae non recusandae.</p>
                </div>
              </div>


            </div>

            <br />

            <!-- Comment Form -->
            <div class="well">
              <!-- Heading -->
              <h4><i class="fa fa-comments color"></i>&nbsp; Post Comment</h4><!-- Form -->
              <hr />
              <form class="form" role="form">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Enter Name">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Enter Email">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Enter Website">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" rows="7" placeholder="Enter Message"></textarea>
                </div>
                <!-- Button -->
                <button type="button" class="btn btn-color">Submit</button>&nbsp;
                <button type="button" class="btn btn-white">Reset</button>
              </form>
            </div>

            <!-- Pager -->
            <ul class="pager">
              <li class="previous"><a href="#">&larr; Older</a></li>
              <li class="next"><a href="#">Newer &rarr;</a></li>
            </ul>

          </div>

          <?php get_sidebar(); ?>

        </div>
      </div>

    </div>
  </div>

  <!-- Main content ends -->

<?php get_footer(); ?>
