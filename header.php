<!DOCTYPE html>

<html>

	<head>

		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124193578-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-124193578-1');
		</script>

		<!--[if IE]>
		  <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<title><?php wp_title(''); ?></title>

		<?php /*include'mobile-script.php';*/ ?>

	<!-- Mobile Device Support -->
		<meta name="viewport" content="width=device-width, , user-scalable=no" />
		<link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<meta name="viewport" content="width=device-width, , user-scalable=no" />

		<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5b1a7fd78e56ee0011c80525&product=sticky-share-buttons"></script>
		
		<meta name="google-site-verification" content="TCJakGd_gDvGsxJQWedJ3N_aUXg0GKCPYMfrCWNpSGg" />

		<!-- Gourmet Ads Script -->
		<script defer type="text/javascript" src="//bcdn.grmtas.com/pub/ga_pub_12056.js"></script>
		<style type="text/css">
		.adnxs-mobile { display:none;}.adnxs-mobile, .adnxs-desktop { text-align:center;}
		@media only screen and (max-width: 980px) { 
			.adnxs-desktop { 
				display:block;
			} 
		}
		@media only screen and (max-width: 640px) { 
			.adnxs-desktop { 
				display:none;
			}.adnxs-mobile { 
				display:block;
			}
		}
		</style>

		<!-- Orbi Tracking Code -->
		<script type="application/javascript">
		  (function(b,o,n,g,s,r,c){if(b[s])return;b[s]={};b[s].scriptToken="Xy0xMzM2NTAyNTg5";b[s].callsQueue=[];b[s].api=function(){b[s].callsQueue.push(arguments);};r=o.createElement(n);c=o.getElementsByTagName(n)[0];r.async=1;r.src=g;r.id=s+n;c.parentNode.insertBefore(r,c);})(window,document,"script","//cdn.oribi.io/Xy0xMzM2NTAyNTg5/oribi.js","ORIBI");
		</script>
		
		<?php wp_head(); ?>

	</head>

    <body <?php body_class(); ?>>

    <div style="position: sticky; position: -webkit-sticky; top: 0; z-index: 99999; background: #000;">
	    <div id="top-header-sponsor-mobile" class="mobile" style="max-width: 320px; width: 100%; margin: 0 auto; text-align: center;">
	    </div>
	</div>

    <div class="header-wrap bottom-shadow">
		<div class="slider parallax">
			<div class="slide-fade"></div>
				<header>
					<div class="top-header">
						<a href="/" onclick="ga('send', 'event', 'Main Logo', 'Click', 'Returned to Home Page');">
							<img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/wwc-logo.png" alt="Wee Whisky Connection Logo" />
						</a>

						<div class="desktop absolute social-wrap">
							<?php get_template_part('social'); ?>
						</div>

						<!-- <div class="login-text">
							<?php
							if ( is_user_logged_in() ) { ?>
							    <a href="<?php echo wp_logout_url(); ?>">Log Out</a>
							<?php } else { ?>
							    <a href="/login">Log In</a>
							<?php } ?>
							
						</div> -->

						<!-- <div class="profile-icon">

							<?php
							if ( is_user_logged_in() ) { ?>
							    <a href="<?php echo get_site_url(); ?>/edit-profile"><img width="25" src="<?php echo get_template_directory_uri(); ?>/images/profile-icon.png" alt="Wee Whisky Connection Mobile Icon" /></a>
							<?php } ?>
							
						</div> -->
						
						<div class="nav-left desktop">
							<?php get_template_part('nav', 'left'); ?>
						</div>
						<div class="nav-right desktop">
							<?php get_template_part('nav', 'right'); ?>
						</div>
					</div>
						
				</header>
				<?php if(is_front_page()){ ?>
					<div class="slider-text">
						<div class="slider-text-inner center">
							<h1>We Connect You With The<br />Best Wisky On The Planet</h1>
							<button id="get-whisky-news-btn"><a href="#">Get Whisky News</a></button>
						</div>
					</div>
				<?php } ?>
			</div>	
		</div>
	</div>

	<div class="mobile-bar group mobile">
		<div style="float: right;">
			<?php get_template_part('social'); ?>
		</div> <!-- &#9776; -->
		<a href="/" onclick="ga('send', 'event', 'Main Logo', 'Click', 'Returned to Home Page');">
			<img class="small-logo" src="<?php echo get_template_directory_uri(); ?>/images/wwc-sm-logo.png" alt="Wee Whisky Connection Small Logo" />
		</a>
			<img class="menu-icon" src="<?php echo get_template_directory_uri(); ?>/images/menu-icon.png" alt="Wee Whisky Connection Menu icon" />

		</a>
	</div>
