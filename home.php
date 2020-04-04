<?php get_header(); ?>

<div class="main-content-wrap outter-content-wrap blog-page front-page group">

	<div class="max-width group">
		<div class="slider-shadow"></div>

		<div class="adnxs-desktop">
			<center>
				<div id="ga_17755898"> </div>
			</center><br>
		</div>
		<div class="adnxs-mobile">
			<center><div id="ga_17756166"></div></center><br>
		</div>
		
		<h1 class="outter-page-title">Whisky Blog</h1>
		
		<div id="blog-post-wrap">


		<?php 
			global $paged;
			// the query to set the posts per page to 3
			//$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array(
				'posts_per_page' => 16, 
				'paged' => $paged );
			query_posts($args); 
		?>

		<?php 
		if ( have_posts() ) : while (have_posts() ) : the_post(); 

			if ( has_post_thumbnail() ) {
				$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
			} else {

				$featured_img_url = "https://kentuckypeerless.com/wp-content/uploads/cache/2017/02/Peerless-Distilling-Co-3/918773956.jpg";
			} ?>

			<div class="blog-post">
				<a onclick="gtag('event', 'click', {'event_category': 'Blog Post: <?php the_title(); ?>'})" href="<?php the_permalink(); ?>">
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
			<!-- <p>There are no posts available.</p> -->

			<!-- pagination -->
			<?php //next_posts_link(); ?>
			<?php //previous_posts_link(); ?>


				<?php if ( $wp_query->max_num_pages > 1 ) : ?>

					<div class="pagination-wrap" style="clear: both; text-align: center;">
					    
					    <span class="pagination load_less">

					      <?php echo get_previous_posts_link( 'Previous Articles' ); ?>

					    </span>

					    <span class="pagination load_more">

					      <?php echo get_next_posts_link( 'More Articles' ); ?>

					    </span>
					</div>

				 <?php endif;  ?>

		<?php endif; ?>

		</div> 

			<div class="blog-sidebar-wrap" style="box-shadow: 1px 1px 9px #000; border: 1px #000 solid;">
				<!-- <img style="display: block;" src="https://weewhiskyconnection.com/wp-content/uploads/2018/07/drizly.png" /> -->
				
				<?php get_template_part('author', 'module') ?>

				<div id="sidebar-widget">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Widgets') ) : ?> 
			     	<?php endif; ?> 
			     	<div style="clear: both;"></div>
		     		<?php include('related-articles-module.php'); ?>
		     	</div> 
		    </div>
		<!-- </div> -->
	</div>
	<center><div id="ga_17756080"> </div><div style="text-align:right; width:300px; padding:5px 0;"></center>
</div>
<?php get_footer(); ?>