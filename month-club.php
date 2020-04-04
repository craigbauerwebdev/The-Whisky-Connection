<?php
/* 
Template Name: Month Club Template
*/
?>

<?php get_header(); 
	
 	//if ( have_posts() ) : while (have_posts() ) : the_post(); ?>

		<div class="main-content-wrap outter-content-wrap front-page">
			<div class="slider-shadow"></div>

			<div class="adnxs-desktop">
				<center>
					<div id="ga_17755898"> </div>
				</center><br>
			</div>
			<div class="adnxs-mobile">
				<center><div id="ga_17756166"></div></center><br>
			</div>

			<!-- <div class="desktop" style="max-width: 1420px; margin: 0 auto;">
				<img src="<?php //echo get_template_directory_uri(); ?>/images/monthClubBannerDesktop.jpg" width="100%" />
			</div>
			<div class="mobile" style="max-width: 1420px; margin: 0 auto;">
				<img src="<?php //echo get_template_directory_uri(); ?>/images/monthClubBanner.jpg" width="100%" />
			</div> -->
			<div class="max-width inner-content-wrap padding">

				<!-- Begin MailChimp Signup Form -->
				<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
				<style type="text/css">
					/*#mc_embed_signup{clear:left; font:14px;}
					#mc_embed_signup form {padding: 0;}
					#mc_embed_signup.button {background: orange; border-radius: 5px;}
					#mce-EMAIL{width: 68%; max-width: 300px; padding: 10px; font-size: 20px;}
					#mc-embedded-subscribe {background: orange; padding: 10px; font-size: 20px; margin-top: 10px; border: none; color: #fff; border-radius: 5px;}*/
				</style>
				<div id="mc_embed_signup" style="text-align: center;">
					<form action="https://weewhiskyconnection.us18.list-manage.com/subscribe/post?u=cd5fa6ad6adc9f0262552dcc5&amp;id=9559578d74" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					    <div id="mc_embed_signup_scroll">
						
						<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
					    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_cd5fa6ad6adc9f0262552dcc5_9559578d74" tabindex="-1" value=""></div>
					    <div class="clear"><input type="submit" value="Join Us" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
					    </div>
					</form>
				</div>
				<!--End mc_embed_signup-->
				
				<?php 
				
				if ( is_user_logged_in() ) { 
					$current_user = wp_get_current_user();?>
					<h1 class="inner-page-title">Welcome <?php echo $current_user->display_name; ?></h1>
					<br />
					<h2>Your Recommendations</h2>
					<p>Your recommendations will appear here soon.</p>

					<!-- Reccomendations 4 - 6 -->

					<?php $args = array(
							'post_type' => 'recommendations',
							'posts_per_page' => 6,
							'orderby' => 'rand'
						);

						$the_query = new WP_Query( $args );

					 ?>
					
					<!-- <div class="main-content-wrap outter-content-wrap whisky-page front-page group"> -->
					<div class="whisky-page front-page group">

						<div class="relative grid-wrap max-width group">
							<?php
								if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 

									if ( has_post_thumbnail() ) {
										$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
									} else {

										$featured_img_url = "https://kentuckypeerless.com/wp-content/uploads/cache/2017/02/Peerless-Distilling-Co-3/918773956.jpg";
									}

								?>
										
									<div class="product">
										<a onclick="gtag('event', 'click', {'event_category': 'Recommendation: <?php the_title(); ?>'});" href="<?php the_permalink(); ?>">
											<div class="product-inner">
												<div class="mobile-whisky-title">
													<h2><?php the_title(); ?></h2>
												</div>
												<div class="mobile-whisky-wrap group">
													<div style="background: url(<?php echo $featured_img_url; ?>); background-size: contain; background-position: center center; background-repeat: no-repeat;" class="thumb" >
													</div>
													<div class="info">
														<h2><?php the_title(); ?></h2>
														<ul>
															<li><?php //the_field('type'); ?>Scotch Whisky</li>
															<li>Region: <?php //the_field('region'); ?>Islay, Scotland</li>
															<li>ABV: <?php //the_field('abv'); ?>46%</li>
															<li style="color: #333;"><i><?php //the_field('abv'); ?>Peaty & Rich</i></li>
															
														</ul><button>Learn More</button>
													</div>
												</div>
											</div>
										</a>
									</div>
										
							<?php endwhile; else: ?>
								
								<p>sorry :(</p>

							<?php endif; ?>
						</div>
					</div>

				<?php } else { ?>
					<h1 class="inner-page-title">Join Now. It's FREE!</h1>
					<p>Already a member? <a href="/login">Sign In</a></p>
					<h2>Here is how it works:</h2>
					<br />
					<h2>1. Register</h2>
					<br />
					<div>
						<!-- <a href="https://weewhiskyconnection.com/login/?action=register"><button>Register</button></a> -->
						<?php echo do_shortcode('[wppb-register]');?>
					</div>
					<h2>2. Check Your Email.</h2>
					<p>Check your inbox to confirm your email.</p>
					<h2>3. Enjoy</h2> 
					<p>Login and Enjoy Your Recommendations!</p>
				<?php }
				
				//the_content(); ?>		
			</div>
		</div>

	<!-- <?php //endwhile; else: ?>
		<p>There are no posts available.</p>
	<?php //endif; ?> -->
	    

<?php get_footer(); ?>