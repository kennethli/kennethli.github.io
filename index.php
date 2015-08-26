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
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<!DOCTYPE html>

<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Foundation | Welcome</title>
    <link href="css/app.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.8/slick.css"/>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.8/slick-theme.css"/>
    <script src="js/vendor/modernizr.js"></script>
	<script src="/js/vendor/jquery.js"></script>
	<script src="/js/vendor/fastclick.js"></script>
	<script src="/js/foundation.min.js"></script>
    <script src="//use.typekit.net/zwi2ydl.js"></script>
    <script>
try{Typekit.load();}catch(e){}
    </script>


</head>

<body>
    <header class="row">
	    <div class="small-12 columns jgh-header hide-for-small-only">
	        <div class="small-12 large-12 columns jgh-header-child">
	            <h1 class="jgh-title small">&nbsp;The&nbsp;</h1>

	            <h1 class="jgh-title big">Journal</h1>

	            <h1 class="jgh-title small">&nbsp;of&nbsp;</h1>

	            <h1 class="jgh-title big">Global Health</h1>
	        </div>
	    </div>
	   <nav class="top-bar small-12 columns jgh-top-bar" data-topbar role="navigation">

	     <ul class="title-area">

	       <li class="name">

	         <h1>JGH</h1>

	       </li>
  		 <li class="has-form">
  		         <div class="row collapse">
  		           <div class="large-8 small-9 columns">
  		             <input type="text" placeholder="Find Stuff">
  		           </div>
  		           <div class="large-4 small-3 columns">
  		             <a href="#" class="alert button expand">Search</a>
  		           </div>
  		         </div>
  		       </li>

	        <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->

	       <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>

	     </ul>



	     <section class="top-bar-section">

	       <!-- Right Nav Section -->

	       <ul class="right">


		        <li class="active"><a href="#">Right Button Active</a></li>
		        <li class="has-dropdown">
		          <a href="#">Right Button Dropdown</a>
		          <ul class="dropdown">
		            <li><a href="#">First link in dropdown</a></li>
		            <li class="active"><a href="#">Active link in dropdown</a></li>
		          </ul>
		        </li>
	       </ul>



	       <!-- Left Nav Section -->

		  <ul class="left">
		       
		      </ul>

	     </section>

	   </nav>


	    <div class="small-12 columns jgh-header show-for-small-only">
	        <div class="small-12 large-12 columns jgh-header-child">
	            <h1 class="jgh-title small">&nbsp;The&nbsp;</h1>

	            <h1 class="jgh-title big">Journal</h1>

	            <h1 class="jgh-title small">&nbsp;of&nbsp;</h1>

	            <h1 class="jgh-title big">Global Health</h1>
	        </div>
	    </div>
    </header>

   

    <div class="main row collapse">
        <div class="large-9 columns">
          
                <section class="large-9 small-12 columns jgh-modular slider-height">
                    <h2>Slider</h2>
					<div class="main-slider">
					  <div><img src="../img/sample4_l.jpg" alt="Sample4 L"></div>
					  <div>your content</div>
					  <div>your content</div>
					</div>
                </section>

                <section class=
                "large-3 small-12 columns jgh-modular jgh-currentissue">
                    <h2>Current Issue</h2>

                    <h3>Date of Issue</h3><img src="img/2014spring.png">

                    <ul>
                        <li>
                            <a href="#">Table of Contents</a>
                        </li>

                        <li>
                            <a href="#">Full Issue [PDF]</a>
                        </li>
                    </ul>
                </section>


            <div class="row">
                <section class=
                "large-7 small-12 columns jgh-modular jgh-newsresearch">
                    <h2>Latest news and research</h2>

                    <h3>The Latest Articles from the Semesterly Print
                    Edition</h3>

                    <div class="row jgh-newsresearch-modular">
                        <div class="large-6 medium-6 small-12 columns">
                            <div class="row">
                                <div class="small-4 img-padding columns"><img src=
                                "img/2014sprdaly.png"></div>

                                <div class="small-8 columns">
                                    <div class="row">
                                        <div class=
                                        "small-12 columns jgh-newsresearch-label">
                                        <a>Perspectives</a>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class=
                                        "small-12 columns jgh-newsresearch-desc">
                                        Test Test Test Test Test Test Test Test
                                        Test Test Test Test Test Test Test Test
                                        Test Test Test Test Test Test Test Test
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="large-6 medium-6 small-12 columns">
                            <div class="row">
                                <div class="small-4 img-padding columns"><img src=
                                "img/2014sprdaly.png"></div>

                                <div class="small-8 columns">
                                    <div class="row">
                                        <div class=
                                        "small-12 columns jgh-newsresearch-label">
                                        <a>Perspectives</a>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class=
                                        "small-12 columns jgh-newsresearch-desc">
                                        Test Test Test Test Test Test Test Test
                                        Test Test Test Test Test Test Test Test
                                        Test Test Test Test Test Test Test Test
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row jgh-newsresearch-modular">
                        <div class="large-6 medium-6 small-12 columns">
                            <div class="row">
                                <div class="small-4 img-padding columns"><img src=
                                "img/2014sprdaly.png"></div>

                                <div class="small-8 columns">
                                    <div class="row">
                                        <div class=
                                        "small-12 columns jgh-newsresearch-label">
                                        <a>Perspectives</a>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class=
                                        "small-12 columns jgh-newsresearch-desc">
                                        Test Test Test Test Test Test Test Test
                                        Test Test Test Test Test Test Test Test
                                        Test Test Test Test Test Test Test Test
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="large-6 medium-6 small-12 columns">
                            <div class="row">
                                <div class="small-4 img-padding columns"><img src=
                                "img/2014sprdaly.png"></div>

                                <div class="small-8 columns">
                                    <div class="row">
                                        <div class=
                                        "small-12 columns jgh-newsresearch-label">
                                        <a>Perspectives</a>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class=
                                        "small-12 columns jgh-newsresearch-desc">
                                        Test Test Test Test Test Test Test Test
                                        Test Test Test Test Test Test Test Test
                                        Test Test Test Test Test Test Test Test
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row jgh-newsresearch-modular">
                        <div class="large-6 medium-6 small-12 columns">
                            <div class="row">
                                <div class="small-4 img-padding columns"><img src=
                                "img/2014sprdaly.png"></div>

                                <div class="small-8 columns">
                                    <div class="row">
                                        <div class=
                                        "small-12 columns jgh-newsresearch-label">
                                        <a>Perspectives</a>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class=
                                        "small-12 columns jgh-newsresearch-desc">
                                        Test Test Test Test Test Test Test Test
                                        Test Test Test Test Test Test Test Test
                                        Test Test Test Test Test Test Test Test
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="large-6 medium-6 small-12 columns">
                            <div class="row">
                                <div class="small-4 img-padding columns"><img src=
                                "img/2014sprdaly.png"></div>

                                <div class="small-8 columns">
                                    <div class="row">
                                        <div class=
                                        "small-12 columns jgh-newsresearch-label">
                                        <a>Perspectives</a>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class=
                                        "small-12 columns jgh-newsresearch-desc">
                                        Test Test Test Test Test Test Test Test
                                        Test Test Test Test Test Test Test Test
                                        Test Test Test Test Test Test Test Test
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class=
                "large-5 columns jgh-modular jgh-wighpodcast show-for-large-only">
                    <div class="row">
                        <div class="small-6 columns"><img src=
                        "img/wighsymbol.png"></div>

                        <div class="small-6 columns">
                            <h2>Official Podcast</h2>Listen to stories on noisy
                            gene expression, results from drilling at the
                            Tohoku-oki fault, the benefits of snake venom, and
                            more.<br>
                            <b>Latest Podcast:</b> <a href="#">WIGH? #32: The
                            Mysterious World of Sports Medicine</a>
                        </div>
                    </div>
                </section>
            </div>

            <div class="row">
                <section class="large-12 columns jgh-modular">
                    <h2>Information</h2>

                    <div class="row jgh-information-modular">
                        <div class="small-6 columns">
                            About JGH
                        </div>

                        <div class="small-6 columns">
                            Subscriptions
                        </div>
                    </div>

                    <div class="row jgh-information-modular">
                        <div class="small-6 columns">
                            Advertise
                        </div>

                        <div class="small-6 columns">
                            Join the JGH Team
                        </div>
                    </div>
                </section>
            </div>
        </div>
		<aside class="large-3 jgh-sidebar columns hide-for-small-only">
	        <div class="row">
				<div class="small-12 columns jgh-modular2">
					<h2>Email Alerts</h2>
					Sign up to receive periodic updates from JGH and WiGH.
					BOX
	        	</div>
					<div class="small-12 columns jgh-modular2">
						<h2>Upcoming Events</h2>
						None at the moment. Please check back later!
		        	</div>
	        </div>
	    </aside>
    </div>

    

    <footer class="row">
        <div class="small-12 columns">
            <div class="row">
                <div class="large-12 columns jgh-trending">
                    <div class="row collapse heading"><h2 class="big">EXPLORE&nbsp;</h2><h2 class="small">Trending Topics</h2></div>
					
					HIV/AIDS | policy | public
                    health | south africa | kenya | injection drug user | ghana
                </div>
            </div>

            <div class="row jgh-footer">
                <div class="large-3 columns">
                    © The Journal of Global Health
                </div>

                <div class="large-7 columns">
                    About Us | Advertise | Submit | Join Us | Subscribe | Print
                    Issue | WiGH? Podcast
                </div>

                <div class="large-2 columns">
                    ghjournal.org
                </div>
            </div>
        </div>
    </footer><script src="js/vendor/jquery.js"></script> <script src="js/foundation.min.js"></script> <script>
$(document).foundation();
    </script>

  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
 <script type="text/javascript">
    $(document).ready(function(){
     $('.main-slider').slick({
		 arrows:false,
	 adaptiveHeight: true}
     );
    });
  </script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.8/slick.min.js"></script>
</body>
</html>