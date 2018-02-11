<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage custom-theme
 * @since custom-theme 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="utf-8"/>
	<title><?php bloginfo('title');?></title>

    <link href="<?php bloginfo('template_directory'); ?>/favicon.png" rel="shortcut icon">
    <link rel='stylesheet' id='contact-form-7-css'  href='<?php bloginfo('template_directory'); ?>/includes/css/normalize.css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css'  href='<?php bloginfo('template_directory'); ?>/includes/css/bootstrap.min.css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css'  href='<?php bloginfo('template_directory'); ?>/includes/css/768.css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css'  href='<?php bloginfo('template_directory'); ?>/includes/css/mobile.css' media='all' />
    <link rel='stylesheet' id='main style-css'  href='<?php bloginfo('template_directory'); ?>/style.css' media='all' />

	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
	<script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/includes/js/jquery.mousewheel.js'></script>
	<script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/includes/js/jquery.requestAnimationFrame.js'></script>

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<?php wp_head(); ?>
	<style>
		.bg-1 { 
			background:url("<?php bloginfo('template_directory'); ?>/images/home/ribbon-red-bg.jpg") no-repeat;  
			background-position: center 50px; 
		}
		.bg-block-content-1 { 
			background:url("<?php bloginfo('template_directory'); ?>/images/home/c1.jpg") no-repeat;  
			background-size: cover;
			background-position: center center;
		}
		.bg-block-content-2 { 
			background:url("<?php bloginfo('template_directory'); ?>/images/home/c2.jpg") no-repeat;  
			background-size: cover;
			background-position: center center;
		}
		.bg-block-content-3 { 
			background:url("<?php bloginfo('template_directory'); ?>/images/home/c3.jpg") no-repeat;  
			background-size: cover;
			background-position: center center;
		}
		.bg-block-content-4 { 
			background:url("<?php bloginfo('template_directory'); ?>/images/home/c4.jpg") no-repeat;  
			background-size: cover;
			background-position: center center;
		}
		.face-1 { 
			background:url("<?php bloginfo('template_directory'); ?>/images/home/face-bg.png") no-repeat;  
		    background-position: -0.8vw -0.2vw;
		    background-size: auto;
		}
	</style>
</head>
<body class="page-template page-template-onecolumn-page page-template-onecolumn-page-php page page-id-15 desktop chrome">
	<nav class="mobiletop">   
		<ul id="menu-footer-menu" class="menu">
			<li class="menu-item "><a class="text-caps" href="#">aaa</a></li>
		</ul>	
	</nav>
	<!-- container -->
	<div class="page-container">
		<section class="header-logo">
			<div style="background-color: #fff2db;height: 100px;">
				<div class="center-logo">
					<img src="<?php bloginfo('template_directory'); ?>/images/home/ribbon.png" alt="Menu"> 
				</div>
				<div class="col-md-6 left center" style="padding-top: 35px;"><span class="header-caption">Contemporary & Traditional Designs Engineered for Stability</span></div>
				<div class="col-md-6 left center" style="padding-top: 35px;"><span class="header-caption">Commercial & Residential Wine Cellar Specialist Builders</span></div>
			</div>
		</section>

		<section class="header-logo-mobile">
			<div class="top-nav-holder-768">
				<!-- call-us-container -->
				<div class="col span_8_of_12 menu-left-480">
					<div  style="padding-left: 25px !important;position: relative !important;top: 10px !important;">
						<a href="#">
							owoqwwq
						</a>
					</div>
				</div>
				<div class="col span_4_of_12 menu-icon menu-right-480">
				   <a href="#" id="pull"><img src="<?php bloginfo('template_directory'); ?>/images/menu.jpg" alt="Menu"> </a>
				</div>
			</div>
		</section>
		<?php 
			$v = 0;
			$menuargs = array(
				"theme_location" => "primary",
				"menu_class" => "s-menu",
				"menu_id" => "MAIN-MENU",
			);
			$items = wp_get_nav_menu_items( 'MAIN-MENU', $menuargs); 
		?> 
		<section class="menu-desktop">
			<div class="shadow-top" style="background-color: #ffebc8;height: 50px;">
				<ul class="nav-desktop">
					<?php foreach( $items as $item ){ ?>
						<li><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
					<?php } ?>
				</ul>
			</div>
		</section>

		<section class="banner">
			<div style="background-color: #fff2db;display: flex;">
				<div class="banner-block">
					<img src="<?php bloginfo('template_directory'); ?>/images/home/b1.jpg" alt="Menu"> 
				</div>
				<div class="banner-block">
					<img src="<?php bloginfo('template_directory'); ?>/images/home/b2.jpg" alt="Menu"> 
				</div>
				<div class="banner-block">
					<img src="<?php bloginfo('template_directory'); ?>/images/home/b3.jpg" alt="Menu"> 
				</div>
				<div class="banner-block">
					<img src="<?php bloginfo('template_directory'); ?>/images/home/b4.jpg" alt="Menu"> 
				</div>
				<div class="banner-block">
					<img src="<?php bloginfo('template_directory'); ?>/images/home/b5.jpg" alt="Menu"> 
				</div>
				<div class="banner-block">
					<img src="<?php bloginfo('template_directory'); ?>/images/home/b6.jpg" alt="Menu"> 
				</div>
				<div class="banner-block">
					<img src="<?php bloginfo('template_directory'); ?>/images/home/b7.jpg" alt="Menu"> 
				</div>
				<div class="banner-block">
					<img src="<?php bloginfo('template_directory'); ?>/images/home/b8.jpg" alt="Menu"> 
				</div>
				<div class="banner-block">
					<img src="<?php bloginfo('template_directory'); ?>/images/home/b9.jpg" alt="Menu"> 
				</div>
			</div>
		</section>

		<section class="contact">
			<div style="background-color: #ffebc8;display: flex;padding-top: 15px;padding-bottom: 15px;">
				<div class="col-md-6 left center">
					<span class="center contact-1">HOUSTON'S BEST WINE CELLARS BUILDERS</span>
				</div>
				<div class="col-md-6 left">
					<div class="contact-container">
						<div class="col-md-1 left">
							<img style="position: relative;top: 9px;" src="<?php bloginfo('template_directory'); ?>/images/home/phone.png" alt="Menu"> 
						</div>
						<div class="col-md-10 left">
							<span>Call us to receive your custom quote (xxx) xxx-xxxx <br/> or complete our <a class="contact-link" href="#">request a quote form</a></span>
						</div>
					</div>
				</div>
			</div>
		</section>









