<?php get_header(); ?>

<?php if ( have_posts() ) : while (have_posts() ) : the_post(); 

	if ( has_post_thumbnail() ) {
		$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
	} else {

		$featured_img_url = "https://kentuckypeerless.com/wp-content/uploads/cache/2017/02/Peerless-Distilling-Co-3/918773956.jpg";

	}
	?>

	<div class="single-menu-bar" style="color: #fff; text-align: center; margin: 0 auto;">
		<ul class="max-width">
			
			<a class="description-button" href="#"><li>Description</li></a>
			<?php if ( get_field( 'show_tasting_notes' ) == 1 ) { ?>
				<a class="tasting-button" href="#"><li>Tasting Notes</li></a>
			<?php } ?>
			<a class="where-to-buy-button" href="#"><li>Where To Buy</li></a>
			<!-- <a href="#"><li>Reviews</li></a>
			<a href="#"><li>Reccomendations</li></a> -->
		</ul>
	</div>

	<div class="main-content-wrap outter-content-wrap single-product-page front-page">

		<div class="slider-shadow"></div>

		<!-- <div style="margin-bottom: 6px;">
		    <div id="top-header-sponsor-desktop" class="desktop" style="max-width: 728px; width: 100%; margin: 0 auto; text-align: center;">
		    </div>
		</div> -->
		<div class="adnxs-desktop">
			<center>
				<div id="ga_17755898"> </div>
			</center><br>
		</div>
		<div class="adnxs-mobile">
			<center><div id="ga_17756166"></div></center><br>
		</div>

		<div class="max-width" style="position: relative">

			<div class="single-product-wrap relative group">

				<?php if ( is_user_logged_in() ) { ?>
					<?php //echo do_shortcode('[favorite_button]'); ?>
				<?php } ?>
				<div class="mobile mobile-top-spacer"></div>
				<div class="main-product-image relative" style="background: url(<?php echo $featured_img_url ?>); background-size: contain; background-position: center center; background-repeat: no-repeat;">
					<img width="100%" src="<?php echo get_template_directory_uri(); ?>/images/single-whisky.png" />
				</div>
				<div class="single-details group">
					<h1 class="whisky-title"><?php the_title(); ?></h1>
					<div class="single-left">
						<ul>
							<li><strong>Type: </strong><?php the_field('type'); ?></li>
							<li><strong>Region: </strong><?php the_field('region'); ?></li>
							<li><strong>Distillery: </strong><a href="<?php the_field('distillery_link'); ?>"><?php the_field('distillery_label'); ?></a></li>
							<li><strong>ABV: </strong> <?php the_field('abv'); ?>%</li>
							<li><span>Peat:</span>
								<div class="track">
									<div class="level" style="width: <?php the_field('peat'); ?>%;"></div>
									
								</div>
							</li>
							<li><span>Richness:</span>
								<div class="track">
									<div class="level" style="width: <?php the_field('richness'); ?>%;"></div>	
								</div>
							</li>
						</ul>
						<div class="rating-label">WWC Rating:</div>
						<div class="star-rating">
						<?php if ( get_field( 'star_rating' ) == 1 ) { ?>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						<?php } else if ( get_field( 'star_rating' ) == 2 ) {?>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						<?php } else if ( get_field( 'star_rating' ) == 3 ) { ?>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						<?php } else if ( get_field( 'star_rating' ) == 4 ) { ?>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
						<?php } else if ( get_field( 'star_rating' ) == 5 ) { ?>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
						<?php } else if ( get_field( 'star_rating' ) == 0 ) { ?>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						<?php } ?>
						</div>
						<button class="where-to-buy-button">Where to Buy</button>
					</div>
				</div>
			</div>
			<div id="single-description" class="single-section-header center">
					Description
			</div>
			<div class="single-section-content">
				<div class="single-section-text single-description">
					<?php the_content(); ?>
				</div>
			</div>

		<?php if ( get_field( 'show_tasting_notes' ) == 1 ) { ?>
			<div id="single-tasting" class="single-section-header center">
					Tasting Notes
			</div>
			<div class="single-section-content single-section-content-tasting group">
				<div class="tasting-note" style="background: url(<?php echo get_template_directory_uri(); ?>/images/tasting-notes/nose.jpg); background-size: cover;">
					<div class="absolute tasting-note-shadow">
						<div class="absolute center tasting-position">
							<h3 class="tasting-title">Nose</h3>
							<p><?php the_field('tasting_nose'); ?></p>
						</div>
					</div>
				</div>
				<div class="tasting-note" style="background: url(<?php echo get_template_directory_uri(); ?>/images/tasting-notes/palate.jpg); background-size: cover;">
					<div class="absolute tasting-note-shadow">
						<div class="absolute center tasting-position">
							<h3 class="tasting-title">Pallete</h3>
							<p><?php the_field('tasting_palate'); ?></p>
						</div>
					</div>
				</div>
				<div class="tasting-note" style="background: url(<?php echo get_template_directory_uri(); ?>/images/tasting-notes/finish.jpg); background-size: cover;">
					<div class="absolute tasting-note-shadow">
						<div class="absolute center tasting-position">
							<h3 class="tasting-title">Finish</h3>
							<p><?php the_field('tasting_finish'); ?></p>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
			<div class="single-section-header where-to-buy-section center">Where To Buy</div>
			<div class="single-section-content where-to-buy">
				<?php if ( get_field( 'use_custom_venders' ) == 1 ) { 
					$posts = get_field('vendors');
					if( $posts ): ?>
					    <ul class="group">
					    <?php foreach( $posts as $post):
					         setup_postdata($post); ?>
					        <a class="shop-link group" href="<?php the_field('shop_link');?>" target="_blank">
					        	<li class="relative group">
					        		<div class="buy-inner">
										<div class="shop-name">
											<p><?php the_field('shop_name'); ?></p>
										</div>
										<div class="shop-flag" style=" background: url(<?php the_field('shop_flag'); ?>); background-size: cover; background-position: center center;">
										</div>
										<div>
											<p><?php the_field('shop_location'); ?></p>
										</div>
										<div class="bottle-size">
											<p>750ml</p>
										</div>
										<div class="go-to-shop">
											<button>Buy Now</button>
										</div>
									</div>
								</li>
							</a>
					        
					    <?php endforeach; ?>
					    </ul>
					<?php //wp_reset_postdata();
					else: ?>
						<p class="no-shop center">Sorry, No Shops Available Right Now. Please Try Again Later. <!-- Try Drizly --></p>
						<div class="noshop-bling">
							<input type="hidden" name="IL_IN_ARTICLE">
							<!-- <a href="#">
								<img width="100%" src="<?php echo get_template_directory_uri(); ?>/images/drizly-example.jpg">
							</a> -->
						</div>
					<?php endif;
				} else {
					$searchUrlBase = "https://www.wine-searcher.com/find/".strtolower(str_replace(' ', '+', get_the_title()))."/1/";
					$usa = $searchUrlBase . "usa";
					$uk = $searchUrlBase . "uk";
					$canada = $searchUrlBase . "canada";
					$japan = $searchUrlBase . "japan";
					?>
					<ul class="group">
						<a class="shop-link group" href="<?php echo $usa; ?>" target="_blank">
				        	<li class="relative group">
				        		<div class="buy-inner">
									<div class="shop-name">
										<p>Search In</p>
									</div>
									<div class="shop-flag" style="background: url(https://thewhiskyconnection.com/wp-content/uploads/2018/06/usa-flag.png); background-size: cover; background-position: center center;">
									</div>
									<div>
										<p>USA</p>
									</div>
									<div class="go-to-shop">
										<button>Search Now</button>
									</div>
								</div>
							</li>
						</a>
						<a class="shop-link group" href="<?php echo $canada; ?>" target="_blank">
				        	<li class="relative group">
				        		<div class="buy-inner">
									<div class="shop-name">
										<p>Search In</p>
									</div>
									<div class="shop-flag" style="background: url(https://thewhiskyconnection.com/wp-content/uploads/2020/03/canada.jpg); background-size: cover; background-position: center center;">
									</div>
									<div>
										<p>Canada</p>
									</div>
									<div class="go-to-shop">
										<button>Search Now</button>
									</div>
								</div>
							</li>
						</a>
						<a class="shop-link group" href="<?php echo $uk; ?>" target="_blank">
				        	<li class="relative group">
				        		<div class="buy-inner">
									<div class="shop-name">
										<p>Search In</p>
									</div>
									<div class="shop-flag" style="background: url(https://thewhiskyconnection.com/wp-content/uploads/2018/09/britishFlag.jpg); background-size: cover; background-position: center center;">
									</div>
									<div>
										<p>United Kingdom</p>
									</div>
									<div class="go-to-shop">
										<button>Search Now</button>
									</div>
								</div>
							</li>
						</a>
						<a class="shop-link group" href="<?php echo $japan; ?>" target="_blank">
				        	<li class="relative group">
				        		<div class="buy-inner">
									<div class="shop-name">
										<p>Search In</p>
									</div>
									<div class="shop-flag" style="background: url(https://thewhiskyconnection.com/wp-content/uploads/2020/03/japan.jpg); background-size: cover; background-position: center center;">
									</div>
									<div>
										<p>Japan</p>
									</div>
									<div class="go-to-shop">
										<button>Search Now</button>
									</div>
								</div>
							</li>
						</a>
					</ul>
				<?php } ?>
			</div>
			<!-- Videos -->
			<?php if ( get_field( 'show_videos' ) == 1 ) { ?>

				<div class="single-section-header center">
					Videos
				</div>
				<div class="single-section-content single-awards">
					<p>Video Shortcode text field here</p>
				</div>
 
			<?php } ?>

			<!-- Added Next Section After Loop is Closed -->
	
			<?php endwhile; else: ?>
				<p>There are no posts available.</p>
			<?php endif; ?>


			<div class="single-section-header center">
				More Great Whisky
			</div>
			<div class="single-section-content single-awards group" style="background: none;">

				<?php 
					$args = array(
						'post_type' => 'products',
						'posts_per_page' => 10,
						'orderby' => 'rand',
						'post__not_in' => array( $post->ID )
					);

					$the_query = new WP_Query( $args );

					if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();

						if ( has_post_thumbnail() ) {
								$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
						} else {

							$featured_img_url = "https://kentuckypeerless.com/wp-content/uploads/cache/2017/02/Peerless-Distilling-Co-3/918773956.jpg";
						}

						?>
							
						<div class="product">
							<a href="<?php the_permalink(); ?>">
								<div class="product-inner">
									<div class="mobile-whisky-title">
										<h2><?php the_title(); ?></h2>
									</div>
									<div class="mobile-whisky-wrap group">
										<div style="background: url(<?php echo $featured_img_url; ?>); background-size: contain; background-position: center center; background-repeat: no-repeat;" class="thumb" ></div>
										<div class="info">
											<h2><?php the_title(); ?></h2>
											<ul>
												<li><?php the_field('type'); ?></li>
												<li>Region: <?php the_field('region'); ?></li>
												<li>ABV: <?php the_field('abv'); ?>%</li>
											</ul>
											<div class="rating-label">Our Rating: </div>
											<div class="star-rating">
									
											<?php if ( get_field( 'star_rating' ) == 1 ) { ?>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
											<?php } else if ( get_field( 'star_rating' ) == 2 ) {?>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
											<?php } else if ( get_field( 'star_rating' ) == 3 ) { ?>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
											<?php } else if ( get_field( 'star_rating' ) == 4 ) { ?>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star"></span>
											<?php } else if ( get_field( 'star_rating' ) == 5 ) { ?>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
											<?php } else if ( get_field( 'star_rating' ) == 0 ) { ?>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
											<?php } ?>
											</div>
											<?php
											if ( is_user_logged_in() ) { ?>
												<div class="mobile-fav">
											    	<?php echo do_shortcode('[favorite_button]'); ?>
											    </div> 
											<?php } ?>
										</div>
									</div>

									<!-- <?php
									if ( is_user_logged_in() ) { ?>
										<div class="desktop-fav">
									    	<?php echo do_shortcode('[favorite_button]'); ?>
									    </div> 
									<?php } ?> -->

								</div>
							</a>
						</div>
				<?php endwhile; else: ?>
					<p>There are no posts available.</p>
				<?php endif; ?>	

			</div>	

		</div>
	</div>


<?php get_footer(); ?>