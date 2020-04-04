<?php
/* 
Template Name: Distilleries Template
*/
?>

<?php get_header(); 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array(
			'post_type' => 'dist',
			'posts_per_page' => 16,
			'paged' => $paged,
			'orderby' => 'rand'
		);

		$the_query = new WP_Query( $args );

	 ?>
	
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

		<h1 class="outter-page-title"><?php the_title(); ?></h1>

		<div class="grid-wrap max-width group">
				
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
						
			<?php endwhile; //else: ?>
				<!-- <p>There are no posts available.</p> -->

				<div class="pagination-wrap" style="clear: both; text-align: center;">
		    
				    <span class="pagination load_less">

				      <?php //previous_posts_link( 'Previous Articles' ); ?>
				      <?php echo get_previous_posts_link( 'Previous Distilleries', $the_query->max_num_pages );?>

				    </span>

				    <span class="pagination load_more">

				      <?php //next_posts_link( 'More Articles' ); ?>
				      <?php echo get_next_posts_link( 'More Distilleries', $the_query->max_num_pages );?>

				    </span>
				</div>


			<?php endif; ?>
		</div>
	</div>

<?php get_footer(); ?>
