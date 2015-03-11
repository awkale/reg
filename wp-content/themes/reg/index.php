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


              <!-- Slide #1 starts -->
              <li data-transition="zoomin" data-slotamount="5" >
                <img src="<?php echo get_template_directory_uri(); ?>/img/rev-slider/3.jpg"   alt=""  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">


                <!-- Layer 1 -->
                <div class="tp-caption b-small-bold-grey lft fadeout"
                data-x="center" data-hoffset="0"
                data-y="25" data-voffset="0"
                data-speed="500"
                data-start="200"
                style="z-index: 2;">TONS OF FEATURES
              </div>

              <!-- Layer 2 -->
              <div class="tp-caption b-big-bold black lft fadeout"
              data-x="center" data-hoffset="0"
              data-y="60" data-voffset="0"
              data-speed="500"
              data-start="700"
              style="z-index: 2;">BEST THEME EVER MADE
            </div>

            <!-- Layer 3 -->
            <div class="tp-caption lfb fadeout"
            data-x="10" data-hoffset="0"
            data-y="160" data-voffset="0"
            data-speed="1000"
            data-start="1000"
            style="z-index: 2;"><img src="<?php echo get_template_directory_uri(); ?>/img/rev-slider/girl1.png" alt="" />
          </div>

          <!-- Layer 4 -->
          <div class="tp-caption lfb fadeout"
          data-x="200" data-hoffset="0"
          data-y="170" data-voffset="0"
          data-speed="1000"
          data-start="1300"
          style="z-index: 2;"><img src="<?php echo get_template_directory_uri(); ?>/img/rev-slider/girl2.png" alt="" />
        </div>

        <!-- Layer 5 -->
        <div class="tp-caption lfb fadeout"
        data-x="400" data-hoffset="0"
        data-y="160" data-voffset="0"
        data-speed="1000"
        data-start="1600"
        style="z-index: 2;"><img src="<?php echo get_template_directory_uri(); ?>/img/rev-slider/girl3.png" alt="" />
      </div>

      <!-- Layer 6 -->
      <div class="tp-caption lfb fadeout"
      data-x="600" data-hoffset="0"
      data-y="160" data-voffset="0"
      data-speed="1000"
      data-start="1900"
      style="z-index: 2;"><img src="<?php echo get_template_directory_uri(); ?>/img/rev-slider/girl4.png" alt="" />
    </div>

    <!-- Layer 7 -->
    <div class="tp-caption lfb fadeout"
    data-x="800" data-hoffset="0"
    data-y="160" data-voffset="0"
    data-speed="1000"
    data-start="2200"
    style="z-index: 2;"><img src="<?php echo get_template_directory_uri(); ?>/img/rev-slider/girl5.png" alt="" />
  </div>
</li>
<!-- Slide #1 ends -->

<!-- Slide #2 starts -->

<li data-transition="fadefromright">
  <img src="<?php echo get_template_directory_uri(); ?>/img/rev-slider/transparent.png" class="bg-color" alt=""/>

  <!-- Layer 1 -->
  <div class="tp-caption b-big-bold white lfb fadeout"
  data-x="center" data-hoffset="0"
  data-y="20" data-voffset="0"
  data-speed="1000"
  data-start="800"
  data-splitin="chars"
  data-splitout="chars"
  data-elementdelay="0.1"
  data-endelementdelay="0.1"
  data-endspeed="300"
  style="z-index: 2;">SOME OF OUR DESIGNS
</div>

<!-- Layer 2 -->
<div class="tp-caption lfb fadeout"
data-x="center" data-hoffset="0"
data-y="100" data-voffset="0"
data-speed="1000"
data-start="2300"
style="z-index: 2;"><img src="<?php echo get_template_directory_uri(); ?>/img/rev-slider/iphone1.png" alt="" />
</div>

<!-- Layer 3 -->
<div class="tp-caption lfb fadeout"
data-x="center" data-hoffset="-250"
data-y="140" data-voffset="0"
data-speed="1000"
data-start="2600"
style="z-index: 1;"><img src="<?php echo get_template_directory_uri(); ?>/img/rev-slider/iphone2.png" alt="" />
</div>

<!-- Layer 4 -->
<div class="tp-caption lfb fadeout"
data-x="center" data-hoffset="250"
data-y="140" data-voffset="0"
data-speed="1000"
data-start="2800"
style="z-index: 1;"><img src="<?php echo get_template_directory_uri(); ?>/img/rev-slider/iphone2.png" alt="" />
</div>

</li>

<!-- Slide #2 ends -->

<!-- Slide #3 starts -->
<li data-transition="slidedown">
  <img src="<?php echo get_template_directory_uri(); ?>/img/rev-slider/transparent.png" style="background-color:#fafafa" alt=""/>

  <!-- Layer 1 -->
  <div class="tp-caption b-medium-back bg-yellow lft fadeout"
  data-x="center" data-hoffset="0"
  data-y="70" data-voffset="0"
  data-speed="1000"
  data-start="100"
  style="z-index: 2;">IF YOU HAVE BRAVE
</div>

<!-- Layer 2 -->
<div class="tp-caption b-big-bold black skewfromleft fadeout"
data-x="center" data-hoffset="0"
data-y="130" data-voffset="0"
data-speed="1000"
data-start="800"
data-splitin="chars"
data-splitout="chars"
data-elementdelay="0.07"
data-endelementdelay="0.07"
data-endspeed="300"
style="z-index: 2;">POWER IS IN YOUR HAND
</div>

<!-- Layer 3 -->
<div class="tp-caption b-small-para black lfb text-center"
data-x="center"
data-y="200"
data-speed="800"
data-start="2300"
style="z-index: 8">Lorem Ipsum is simply dummy text of the printing industry. Lorem Ipsum is simply dummy text of the <br /> printing industry. Lorem Ipsum dummy printing dummy industry.
</div>

<!-- Layer 4 -->
<div class="tp-caption b-button lfb text-center"
data-x="center"
data-y="270"
data-speed="800"
data-start="2800"
style="z-index: 8">
<a href="#" class="bg-color rounded-1">Buy It Now</a>
</div>

</li>
<!-- Slide #3 ends -->

<!-- Slide #4 starts  -->
<li data-transition="slotslide-horizontal" data-slotamount="5" >

  <!-- MAIN IMAGE -->
  <img src="<?php echo get_template_directory_uri(); ?>/img/rev-slider/3.jpg"   alt=""  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">


  <!-- LAYER NR. 1 -->
  <div class="tp-caption b-big-thin-transparent white skewfromleft"
  data-x="580"
  data-y="50"
  data-speed="800"
  data-start="800"
  data-easing="Power4.easeOut"
  data-endspeed="300"
  data-endeasing="Power1.easeIn"
  data-captionhidden="on"
  style="z-index: 7">BEST
</div>

<!-- LAYER NR. 2 -->
<div class="tp-caption b-big-thin-transparent white skewfromleft"
data-x="580"
data-y="110"
data-speed="800"
data-start="1200"
data-easing="Power4.easeOut"
data-endspeed="300"
data-endeasing="Power1.easeIn"
data-captionhidden="on"
style="z-index: 7">THEME
</div>

<!-- LAYER NR. 3 -->
<div class="tp-caption b-big-thin-transparent white skewfromleft"
data-x="580"
data-y="170"
data-speed="800"
data-start="1600"
data-easing="Power4.easeOut"
data-endspeed="300"
data-endeasing="Power1.easeIn"
data-captionhidden="on"
style="z-index: 7">EVER
</div>

<!-- LAYER NR. 4 -->
<div class="tp-caption b-big-thin-transparent white skewfromleft"
data-x="580"
data-y="230"
data-speed="800"
data-start="2000"
data-easing="Power4.easeOut"
data-endspeed="300"
data-endeasing="Power1.easeIn"
data-captionhidden="on"
style="z-index: 7">LITERALLY !!!
</div>

<!-- LAYER NR. 7 -->
<div class="tp-caption lfb"
data-x="left" data-hoffset="20"
data-y="center" data-voffset="0"
data-speed="600"
data-start="400"
data-autoplay="true"
data-autoplayonlyfirsttime="true"
data-nextslideatend="true"
style="z-index: 8"><!-- <iframe src='https://www.youtube.com/embed/jhNszvpJxho?enablejsapi=1&amp;html5=1&amp;iv_load_policy=3&amp;hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0;' width='540' height='333' style='width:540px;height:333px;border:0px;box-shadow:0px 0px 5px rgba(0,0,0,0.4);'></iframe> -->
</div>
</li>
<!-- Slide #4 ends -->

<!-- Slide #5 starts -->
<li data-transition="boxslide" data-slotamount="5">

  <img src="<?php echo get_template_directory_uri(); ?>/img/rev-slider/1.jpg" alt="" />

  <!-- Layer 1 -->
  <div class="tp-caption b-big-bold black skewfromrightshort"
  data-x="20"
  data-y="80"
  data-speed="500"
  data-start="800"
  style="z-index: 4">One Theme
</div>

<!-- Layer 2 -->
<div class="tp-caption b-medium-thin-grey skewfromleftshort"
data-x="310"
data-y="95"
data-speed="500"
data-start="900"
style="z-index: 5">You
</div>

<!-- Layer 3 -->
<div class="tp-caption b-medium-thin-grey skewfromrightshort"
data-x="20"
data-y="148"
data-speed="300"
data-start="1000"
style="z-index: 6">Fall In
</div>

<!-- Layer 4 -->
<div class="tp-caption b-big-bold black skewfromleftshort"
data-x="115"
data-y="132"
data-speed="300"
data-start="1100"
style="z-index: 7">Love With
</div>

<!-- Layer 5 -->
<div class="tp-caption b-small-para black skewfromleftshort"
data-x="20"
data-y="200"
data-speed="500"
data-start="1300"
style="z-index: 8">Lorem Ipsum is simply dummy text of the printing <br /> industry. Lorem Ipsum is simply dummy text of the <br /> printing industry. Lorem Ipsum printing industry.
</div>

<!-- Layer 6 -->
<div class="tp-caption lft"
data-x="420"
data-y="90"
data-speed="800"
data-start="1700"
style="z-index: 8"><img src="<?php echo get_template_directory_uri(); ?>/img/rev-slider/brave.png" alt="" />
</div>

<!-- Layer 7 -->
<div class="tp-caption b-medium-back bg-red lfr"
data-x="700" data-hoffset="0"
data-y="90"
data-speed="700"
data-start="2000"
style="z-index: 7">TON'S OF FEATURES
</div>

<!-- Layer 8 -->
<div class="tp-caption b-medium-back bg-green lfr"
data-x="700" data-hoffset="0"
data-y="150"
data-speed="700"
data-start="2300"
style="z-index: 7">150+ HTML FILES
</div>

<!-- Layer 9 -->
<div class="tp-caption b-medium-back bg-lblue lfr"
data-x="700" data-hoffset="0"
data-y="210"
data-speed="700"
data-start="2600"
style="z-index: 7">ALL IN ONE THEME
</div>

<!-- Layer 10 -->
<div class="tp-caption b-medium-back bg-yellow lfr"
data-x="700" data-hoffset="0"
data-y="270"
data-speed="700"
data-start="2900"
style="z-index: 7">UNBELIVABLE PRICE
</div>

</li>
<!-- Slide #5 ends -->

</ul>

</div>
</div>
</div>
<!-- Revolution slider full width ends -->

<div class="container">

  <br />
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
          <h4><a href="#">Consequatr</a></h4>
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
          <h4><a href="#">Doloribues</a></h4>
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
          <h4><a href="#">Perferends</a></h4>
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
          <h4><a href="#">Repellat</a></h4>
          <div class="bor bg-blue"></div>
          <p>Maiores alias consequatur aut perferendis doloribus asperiores repellat earum dolor.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Image Box #3 Ends -->

  <div class="divider-1"></div>

  <div class="block-heading-two">
    <h3><span>Our Company</span></h3>
  </div>

  <div class="row">
    <div class="col-md-4 col-sm-6">
      <p>Lorem ipsum dolor sit amet,  tetur adipiscing elit. Sed ut euismod sapien. Donec eu feugiat enim, sed tempus arcu. Pellen tesque magna nisi, consec tetur eget psum primis eros,  et neque sit amet, lobortis auctor libero.</p>
      <ul class="list-2">
        <li>Denounce 1with rhoncus  rhoncus indignation</li>
        <li>Dislike rhoncus so rhoncus et  rhoncus demoralized</li>
        <li>The charms rhoncus et rhoncus of the moment</li>
        <li>That rhoncus cannot rhoncus rhoncus pain trouble</li>
        <li>Dislike so rhoncus rhoncus and demoralized</li>
      </ul>
      <br />
    </div>

    <div class="col-md-4 col-sm-6">

      <h5>Why Choose Us?</h5>
      <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p>
      <!-- Accordion starts -->
      <div class="panel-group accordion-alt3" id="accordion-alt3">
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
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
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
          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
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
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
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
      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
    </div>
  </div>
</div>
</div>
<!-- Accordion ends -->

</div>

<div class="col-md-4 col-sm-6">
  <h5>Our Expertise</h5>
  <p>Lorem ipsum dolor consectetursit amet, consectetur adipiscing elit consectetur euismod ed  euismod  adipiscing elit sapien. Donec eu feugiat enim,  tempus arcu. </p>
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
</div>

</div>

<br />



</div>



</div>

<!-- Main content ends -->

<?php get_footer(); ?>
