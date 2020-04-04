<?php
/* 
Template Name: Whisky Template
*/
?>

<?php get_header(); 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array(
			'post_type' => 'products',
			'posts_per_page' => 16,
			'paged' => $paged,
			'orderby' => 'rand'
		);

		$the_query = new WP_Query( $args );

	 ?>
	<?php include('filters.php'); ?>
	<div class="main-content-wrap outter-content-wrap whisky-page front-page group">

		<div class="slider-shadow"></div>

		<div class="adnxs-desktop">
			<center>
				<div id="ga_17755898"> </div>
			</center><br>
		</div>
		<div class="adnxs-mobile">
			<center><div id="ga_17756166"></div></center><br>
		</div>

		<h1 class="outter-page-title">Whisky</h1>

		<div class="relative grid-wrap max-width group">
			<img class="filter-icon absolute" style="position: absolute;" src="<?php echo get_template_directory_uri(); ?>/images/filter-icon.png" />	
			<?php
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
								<div class="mobile-whisky-wrap group">
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
										<!-- <?php
										if ( is_user_logged_in() ) { ?>
											<div class="mobile-fav">
										    	<?php echo do_shortcode('[favorite_button]'); ?>
										    </div> 
										<?php } ?> -->
									</div>
								</div>
							</div>
						</a>
					</div>
						
			<?php endwhile; //else: ?>
				<!-- <p>There are no posts available.</p> -->

				<div class="pagination-wrap" style="clear: both; text-align: center;">
		    
				    <span class="pagination load_less">

				      <?php //previous_posts_link( 'Previous Articles' ); ?>
				      <?php echo get_previous_posts_link( 'Previous Whiskies', $the_query->max_num_pages );?>

				    </span>

				    <span class="pagination load_more">

				      <?php //next_posts_link( 'More Articles' ); ?>
				      <?php echo get_next_posts_link( 'More Whiskies', $the_query->max_num_pages );?>

				    </span>
				</div>


			<?php endif; ?>
		</div>
	</div>

<?php get_footer(); ?>
