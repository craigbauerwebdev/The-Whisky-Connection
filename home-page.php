<?php
	/* 
	Template Name: Home Page Template
	*/
	get_header(); ?>
	<div class="main-content-wrap front-page">
		<div class="slider-shadow"></div>
		<?php include('ads/top_ad.php'); ?>
		<div class="blog-preview-wrap">
			<h1 class="home-page-title center">Whisky News</h1>
			<div class="blog-wrap max-width group">
		<?php
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 8,
				/*'orderby' => 'rand'*/
			);
			$the_query = new WP_Query( $args );
			//if ( have_posts() ) : while (have_posts() ) : the_post();
			if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
				if ( has_post_thumbnail() ) {
					$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
				} else {
					$featured_img_url = "https://kentuckypeerless.com/wp-content/uploads/cache/2017/02/Peerless-Distilling-Co-3/918773956.jpg";
				} ?>
				<div class="blog-post">
					<a onclick="gtag('event', 'click', {'event_category': 'Blog Post: <?php the_title(); ?>'});" href="<?php the_permalink(); ?>">
						<div class="blog-post-inner">
							<div class="blog-thumb" style="background: url(<?php echo $featured_img_url; ?>); background-size: cover; background-position: center center; background-repeat: no-repeat;"></div>
							<div class="blog-thumb-desc">
								<h3><?php the_title(); ?></h3>
								<?php the_excerpt(); ?>
								<!-- <a href="<?php //the_permalink(); ?>">Read More</a> -->
							</div>	
						</div>
					</a>
				</div>
			<?php endwhile; else: ?>
				<p>There are no posts available.</p>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
			<div class="clear center">
				<a href="/blog">
					<button>Read More</button>
				</a>
			</div>
			</div>
		</div>
		<h2 class="outter-page-title">Whisky</h2>
		<div class="grid-wrap max-width group">
		<?php
			$args = array(
					'post_type' => 'products',
					'posts_per_page' => 6,
					'orderby' => 'rand'
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
					<a onclick="gtag('event', 'click', {'event_category': 'Whisky: <?php the_title(); ?>'});" href="<?php the_permalink(); ?>">
						<div class="product-inner">
							<div class="mobile-whisky-title">
								<h3><?php the_title(); ?></h3>
							</div>
							<div class="mobile-whisky-wrap group"><!-- Move to responsive css -->
								<div style="background: url(<?php echo $featured_img_url; ?>); background-size: contain; background-position: center center; background-repeat: no-repeat;" class="thumb" ></div>
								<div class="info">
									<h3><?php the_title(); ?></h3>
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
								</div>
							</div>
						</div>
					</a>
				</div>
				<?php endwhile; else: ?>
					<p>There are no posts available.</p>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
			<div class="clear center">
				<a href="/whisky">
					<button>Explore Whiskies</button>
				</a>
			</div>
		</div>
		<?php
			$args = array(
				'post_type' => 'dist',
				'posts_per_page' => 8,
				/*'orderby' => 'rand'*/
			);
			$the_query = new WP_Query( $args );
		?>
		<div class="distilliries">
			<h2 class="home-page-title center">Distilleries</h2>
			<div class="dist-grid max-width group">
				<div style="padding: 0 10px;">
				<?php
				if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
					if ( has_post_thumbnail() ) {
						$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
					} else {
						$featured_img_url = "https://kentuckypeerless.com/wp-content/uploads/cache/2017/02/Peerless-Distilling-Co-3/918773956.jpg";
					}
				?>
					<a onclick="gtag('event', 'click', {'event_category': 'Distillery: <?php the_title(); ?>'});" href="<?php the_permalink(); ?>">
						<div class="dist-thumb" style="background: url(<?php echo $featured_img_url; ?>); background-size: cover; background-position: center center;">
							<img class="dist-logo" alt="<?php the_title(); ?>" src="<?php the_field('logo_img'); ?>" />
						</div>
					</a>
				<?php endwhile; else: ?>
					<p>There are no distilleries available.</p>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
				</div> 
			</div>
		</div>
		<div class="dist-btn clear center">
			<a href="/distilleries">
				<button>Explore Distilleries</button>
			</a>
		</div>
	</div>
<?php get_footer();?>