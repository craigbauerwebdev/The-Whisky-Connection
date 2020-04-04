<?php get_header(); ?>
<?php if(is_tax()){ include('filters.php'); } ?>
<div class="main-content-wrap outter-content-wrap blog-page front-page group">
	<div class="slider-shadow"></div>
	<div class="adnxs-desktop">
		<center>
			<div id="ga_17755898"> </div>
		</center><br>
	</div>
	<div class="adnxs-mobile">
		<center><div id="ga_17756166"></div></center><br>
	</div>
	<?php 
	//the_archive_title( '<h1 class="outter-page-title">', '</h1>' );
	$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
	echo '<h1 class="outter-page-title">' . $term->name . '</h1>';
	?>
	<div class="relative max-width group">
	<img class="filter-icon absolute" style="position: absolute;" src="<?php echo get_template_directory_uri(); ?>/images/filter-icon.png" />	
	
<?php if(is_tax()){ ?>
	<div id="blog-post-wrap" style="width: 100%">
		<?php if ( have_posts() ) : while (have_posts() ) : the_post(); 
			if ( has_post_thumbnail() ) {
					$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
				} else {
					$featured_img_url = "https://kentuckypeerless.com/wp-content/uploads/cache/2017/02/Peerless-Distilling-Co-3/918773956.jpg";
				} ?>	
				<div class="product">
					<a onclick="gtag('event', 'click', {'event_category': 'Whisky: <?php the_title(); ?>'});" href="<?php the_permalink(); ?>">
						<div class="product-inner">
							<div class="mobile-whisky-title">
								<h3><?php the_title(); ?></h3>
							</div>
							<div class="mobile-whisky-wrap group">
								<div style="background: url(<?php echo $featured_img_url; ?>); background-size: contain; background-position: center center; background-repeat: no-repeat;" class="thumb" ></div>
								<div class="info">
									<h2 class="desktop-whisky-title"><?php the_title(); ?></h2>
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
	</div>
<?php } else { ?>

	<div id="blog-post-wrap">
		<?php 
		if ( have_posts() ) : while (have_posts() ) : the_post(); 

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
			<?php endwhile; //else: ?>

			<?php if ( $wp_query->max_num_pages > 1 ) : ?>

			<div class="paginstion-wrap" style="clear: both; text-align: center;">
			    <span class="pagination load_less">
			      <?php previous_posts_link( 'Previous Articles' ); ?>
			    </span>
			    <span class="pagination load_more">
			      <?php next_posts_link( 'More Articles' ); ?>
			    </span>
			</div>
		  	<?php endif;  ?>
		<?php endif; ?>
		</div> 
<?php } ?>

<?php if(!is_tax()) { ?>
		<div class="blog-sidebar-wrap" style="box-shadow: 1px 1px 9px #000; border: 1px #000 solid;">
			<?php get_template_part('author', 'module') ?>
			<div id="sidebar-widget">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Widgets') ) : ?> 
		     	<?php endif; ?> 
		     	<div style="clear: both;"></div>
	     	</div> 
	    </div>
<?php } ?>
	</div>
</div>
<?php get_footer(); ?>