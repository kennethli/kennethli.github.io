<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/favicon.ico" type="image/x-icon">

    <link href="<?php echo get_stylesheet_directory_uri(); ?>/jghresp/css/foundation.css" rel="stylesheet">
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
		<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
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

