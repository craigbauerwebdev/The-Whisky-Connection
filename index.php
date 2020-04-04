<?php get_header(); 

$search_term = $_GET['s'];

?>

<div class="main-content-wrap outter-content-wrap single-product-page front-page">

	<div class="slider-shadow"></div>

	<div class="max-width inner-content-wrap padding">

		<div id="search-widget">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Search Page') ) : ?> 
	     	<?php endif; ?> 
	     	<div style="clear: both;"></div>
     	</div> 

		<h3>Search Results for: <?php echo $search_term; ?></h3>

		<?php if ( have_posts() ) : while (have_posts() ) : the_post(); 
			if ( has_post_thumbnail() ) {
				$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
			} else {

				$featured_img_url = "https://kentuckypeerless.com/wp-content/uploads/cache/2017/02/Peerless-Distilling-Co-3/918773956.jpg";
			} 
			?>
			<div class="search-item">
				<a style="color: #000;" class="search-result-link" href="<?php the_permalink(); ?>">
					<div class="featured-image" style="background: url(<?php echo $featured_img_url; ?>); background-size: cover; background-position: center center; background-repeat: no-repeat;">
					</div>
					<div class="search-meta">
						<h3 class="main_title"><?php the_title(); ?></h3>
						<?php the_excerpt(); ?>
					</div>
				</a>
				<div class="group"></div>
			</div>

			<?php endwhile; else: ?>
			<p>Sorry, We couldn't find what you were looking for.</p>
				
			<?php endif; ?>
	</div>

</div>
	

<?php get_footer(); ?>