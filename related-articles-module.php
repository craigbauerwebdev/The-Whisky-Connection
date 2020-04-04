<div class="widget-title">More From The WCC</div>

<?php
	
	$args = array(
		'post_type' => 'post',
		'posts_per_page' => 16,
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

	<div class="related-post">
		<a onclick="gtag('event', 'click', {'event_category': 'Blog Post: <?php the_title(); ?>'})" href="<?php the_permalink(); ?>">
			<div class="related-inner">
				<div class="related-thumb" style="background: url(<?php echo $featured_img_url; ?>); background-size: cover; background-position: center center; background-repeat: no-repeat;"></div>
				<div class="related-desc">
					<div class="related-title"><b><?php the_title(); ?></b></div>
				</div>	
			</div>
		</a>
	</div>
			
<?php endwhile; else: ?>
	<p>There are no posts available.</p>
<?php endif; ?>