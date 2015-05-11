<!DOCTYPE html>
<!-- saved from url=(0041)http://www.rakib4u.com/portfolio/polo360/ -->
<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms no-csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" style=""><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="<?php bloginfo('charset'); ?>">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
          <?php
            bloginfo( 'name' );
          ?>
        </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<!--
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/jquery.sidr.dark.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">

        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.css">
-->
		    <!-- mobile menu-->


<!--
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/responsive.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/jquery.bxslider.css">
-->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">


        <script src="<?php bloginfo('template_directory'); ?>/polo360_files/analytics.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/polo360_files/modernizr-2.6.2.min.js"></script>


    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

		<div class="main_area_header fix">
		<div class="content_area  fix">
			<div class="logo_area fix">
			<img src="<?php bloginfo('template_directory'); ?>/polo360_files/logo.png" alt="">
			</div>
			<div class="menu_area fix">

				  <a id="simple-menu" href="http://www.rakib4u.com/portfolio/polo360/#sidr"><img src="<?php bloginfo('template_directory'); ?>/polo360_files/mm_icon.JPG" alt=""></a>


					<!-- <div class="rmm sidr left" id="sidr">

					<ul>
						<li><a href="">HOME</a></li>
						<li><a href="">PRODUCT</a></li>
						<li><a href="">SERVIVE</a></li>
						<li><a href="">BLOG</a></li>
						<li><a href="">CONTUCT</a></li>
					</ul>
				</div> -->

				<div class="mainmenu fix">
					<ul id="nav">
            <?php wp_nav_menu(); ?>
					</ul>
				</div>

			</div>
		</div>
		</div>
		<div class="slider_area">

			<div class="content_area_slider">

				<div class="slide_area">

							<div class="bx-wrapper" style="max-width: 100%;">
                <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 346px;">
                  <ul class="bxslider" style="width: 615%; position: relative; -webkit-transition: 0s; transition: 0s; -webkit-transform: translate3d(-987px, 0, 0);">
                    <li style="float: left; list-style: none; position: relative; width: 947px;" class="bx-clone">
                      <img src="<?php bloginfo('template_directory'); ?>/slide/slide1.png">
                    </li>
    							  <li style="float: left; list-style: none; position: relative; width: 947px;" class="bx-clone">
                      <img src="<?php bloginfo('template_directory'); ?>/slide/slide2.png">
                    </li>
    							  <li style="float: left; list-style: none; position: relative; width: 947px;">
                      <img src="<?php bloginfo('template_directory'); ?>/slide/slide3.png">
                    </li>
    							  <li style="float: left; list-style: none; position: relative; width: 947px;">
                      <img src="<?php bloginfo('template_directory'); ?>/slide/slide4.png">
                    </li>
    							  <li style="float: left; list-style: none; position: relative; width: 947px;">
                      <img src="<?php bloginfo('template_directory'); ?>/slide/slide5.png">
                    </li>
                    <li style="float: left; list-style: none; position: relative; width: 947px;" class="bx-clone">
                      <img src="<?php bloginfo('template_directory'); ?>/slide/slide6.png">
                    </li>
                </ul>
                </div><div class="bx-controls bx-has-pager bx-has-controls-direction"><div class="bx-pager bx-default-pager"><div class="bx-pager-item"><a href="" data-slide-index="0" class="bx-pager-link active">1</a></div><div class="bx-pager-item"><a href="" data-slide-index="1" class="bx-pager-link">2</a></div><div class="bx-pager-item"><a href="" data-slide-index="2" class="bx-pager-link">3</a></div><div class="bx-pager-item"><a href="" data-slide-index="3" class="bx-pager-link">4</a></div></div><div class="bx-controls-direction"><a class="bx-prev" href="">Prev</a><a class="bx-next" href="">Next</a></div></div></div>

			</div>
			</div>
		</div>
		<div class="meadil_conten_area">
			<div class="content_area_in  fix">
			<h2><i>"Partum in Futuro"</i></h2>
			<div class="btm_border"></div>
		</div>
			<div class="service_area fix">
				<div class="servise_singl fix">
          <?php
            if (query_posts(array ('category_name' => 'kuliah', 'showposts' => '1'))) :
            while(have_posts()) : the_post();
          ?>
					<div class="index-ft-header">
            <h2><a class="index-ft-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  					<h4>Kategori: <?php the_category(' '); ?></h4>
          </div>
          <hr />
          <div class="index-thumbnail">
            <?php
              if(has_post_thumbnail()) : the_post_thumbnail( array(285,178) );
              else :
            ?>
            <img src="<?php bloginfo('template_directory'); ?>/polo360_files/thumbnail-default.jpg" alt="">
            <?php endif; ?>
          </div>
					<p>
            <?php
              the_excerpt();
            ?>
          </p>
          <div class="service_btn">
  					<a class="index-ft-title" href="<?php the_permalink(); ?>">Read More ⇢</a>
            <?php endwhile; endif; ?>
          </div>
				</div>
				<div class="servise_singl fix">
          <?php
          if (query_posts(array ('category_name' => 'hobi', 'showposts' => 1))) :
            while(have_posts()) : the_post();
          ?>
          <div class="index-ft-header">
            <h2><a class="index-ft-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  					<h4>Kategori: <?php the_category(' '); ?></h4>
          </div>
          <hr />
          <div class="index-thumbnail">
            <?php
              if(has_post_thumbnail()) : the_post_thumbnail( array(285,178) );
              else :
            ?>
            <img src="<?php bloginfo('template_directory'); ?>/polo360_files/thumbnail-default.jpg" alt="">
            <?php endif; ?>
          </div>
					<p>
            <?php
              the_excerpt();
            ?>
          </p>
          <div class="service_btn">
            <a class="index-ft-title" href="<?php the_permalink(); ?>">Read More ⇢</a>
            <?php endwhile; endif; ?>
          </div>
				</div>
				<div class="servise_singl fix">
          <?php
          if (query_posts(array ('category_name' => 'keseharian', 'showposts' => 1))) :
            while(have_posts()) : the_post();
          ?>
          <div class="index-ft-header">
            <h2><a class="index-ft-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  					<h4>Kategori: <?php the_category(' '); ?></h4>
          </div>
          <hr />
          <div class="index-thumbnail">
            <?php
              if(has_post_thumbnail()) : the_post_thumbnail( array(285,178) );
              else :
            ?>
            <img src="<?php bloginfo('template_directory'); ?>/polo360_files/thumbnail-default.jpg" alt="">
            <?php endif; ?>
          </div>
					<p>
            <?php
              the_excerpt();
            ?>
          </p>
          <div class="service_btn">
  					<a class="index-ft-title" href="<?php the_permalink(); ?>">Read More ⇢</a>
            <?php endwhile; endif; ?>
          </div>
				</div>

			</div>
      <!--
			<div class="service_area_2 fix">
				<div class="service_area_2_single">
					<h2>Social Connection</h2>
					<p>At vero eos et accusamus et iusto odio  ducimus qui blanditiis praesentium.</p>
					<div class="social_icon">
						<img src="<?php bloginfo('template_directory'); ?>/polo360_files/fb.png" alt="">
						<img src="<?php bloginfo('template_directory'); ?>/polo360_files/rss.png" alt="">
						<img src="<?php bloginfo('template_directory'); ?>/polo360_files/yt.png" alt="">
						<img src="<?php bloginfo('template_directory'); ?>/polo360_files/in.png" alt="">
						<img src="<?php bloginfo('template_directory'); ?>/polo360_files/t.png" alt="">
					</div>

					<div class="news_letter">
						<h2>Newsletter</h2>
						<p>At vero eos et accusamus et  vere iusto qewt to odio dignissimos ducimus qui blanditiis.</p>
						<input class="email_box" type="email" placeholder="your email address">
					</div>

				<div class="service_btn  btn_2">
					<a href="">Subscribe  	⇢</a></div>


				</div>
				<div class="service_area_2_single">
					<h2>Contact</h2>
					<input class="email_box" type="text" placeholder="your name">
					<input class="email_box" type="email" placeholder="your email address">
					<input class="email_box massage " type="text" placeholder="your massage">

					<div class="service_btn btn_2">
					<a href="">Send It  	⇢</a></div>


				</div>
				<div class="service_area_2_single">
					<h2>News Updet</h2>
					<div class="nu_single">
						<div class="nu_img">
							<img src="<?php bloginfo('template_directory'); ?>/polo360_files/mz.png" alt="">
						</div>
						<p>At vero eos et accusamus et  vere iusto qewt to odio dignissimos ducimus qui blanditiis.</p>

					</div>
					<div class="nu_single">
						<div class="nu_img">
							<img src="<?php bloginfo('template_directory'); ?>/polo360_files/mz1.png" alt="">
						</div>
						<p>At vero eos et accusamus et  vere iusto qewt to odio dignissimos ducimus qui blanditiis.</p>

					</div>
					<div class="nu_single">
						<div class="nu_img">
							<img src="<?php bloginfo('template_directory'); ?>/polo360_files/mz2.png" alt="">
						</div>
						<p>At vero eos et accusamus et  vere iusto qewt to odio dignissimos ducimus qui blanditiis.</p>

					</div>

			<div class="service_btn btn_2">
					<a href="">Visit Our Blog  	⇢</a></div>


				</div>

      -->
    </div>
    <div class="service_area_2 fix">
      <?php dynamic_sidebar( 'bottom-sidebar' ); ?>
    </div>
		</div>
		<div class="footer_area fix">
			<div class="footer_content fix">
				<div class="footer_content_singl fix">
				<h2>Site Powered by Wordpress. Design and Developed by <a href="">www.rakib.it</a></h2>
        <!--
				<div class="footer_menu fix">
					<ul id="fmenu">
						<li><a href="">Home</a></li>
						<li><a href="">About</a></li>
						<li><a href="">Products</a></li>
						<li><a href="">Services</a></li>
						<li><a href="">Contact</a></li>
					</ul>

				</div>
        <div class="pp_t fix">
        <a href="">Privacy Policy |</a>
        <a href="">Terms of use</a>
        </div>
        -->




				</div>
				<div class="footer_content_singl_right fix">
				<h2>This website is built by <a href="http://github.com/adityamahesa">Aditya A. Mahesa</a> in 2015.</h2></div>
			</div>

		</div>


       <script src="<?php bloginfo('template_directory'); ?>/polo360_files/jquery.min.js"></script>

        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="<?php bloginfo('template_directory'); ?>/polo360_files/bootstrap.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/polo360_files/plugins.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/polo360_files/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>


</body></html>
