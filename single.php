<?php get_header();

if ( has_post_thumbnail() ) {
	$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
} else {

	$featured_img_url = "https://kentuckypeerless.com/wp-content/uploads/cache/2017/02/Peerless-Distilling-Co-3/918773956.jpg";
} 
?> 

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
	
	<div class="max-width group">

		<div id="blog-post-wrap">
			
			<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>

				<div>
					<div class="single-header" style="background: url(<?php echo $featured_img_url; ?>); background-size: cover; background-position: center center; background-repeat: no-repeat;">
						<!-- <?php //the_category(', '); ?> -->
						<div class="single-shadow-wrap desktop">
							<h1><?php the_title(); ?></h1>
							<ul id="post-meta">
								<li class="posted">Posted by: <a href="<?php  echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php echo get_the_author_meta('display_name', $author_id); ?></a> | <?php the_time( 'F j, Y' ); ?>
								</li>
								<div style="clear: both;"></div>	
							</ul>
						</div>
					</div>
				</div>

				<div class="single-content-wrap">

					<h1 class="single-mobile-title mobile"><?php the_title(); ?></h1>
					<ul id="post-meta-mobile" class="mobile">
						<li class="posted">Posted by: <a href="<?php  echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php echo get_the_author_meta('display_name', $author_id); ?></a> | <?php the_time( 'F j, Y' ); ?>
						</li>
						<div style="clear: both;"></div>	
					</ul>
					<div class="sharethis-inline-share-buttons"></div>
					<?php the_content(); ?>
				
			<?php endwhile; else: ?>
				<p>There are no posts available.</p>
			<?php endif; ?>	

			<?php 
				 if ( comments_open() || get_comments_number() ) :
				     //comments_template();
				 endif; 
			 ?>

			</div>

			<!-- Gourmet Ads Native Ad -->
			<center><div id="ga_17756080"> </div><div style="text-align:right; width:300px; padding:5px 0;"></center>

			<!-- <div style="margin-bottom: 10px;">
			    <div id="below-article-sponsor-desktop" class="desktop" style="max-width: 728px; width: 100%; margin: 0 auto; text-align: center;">
			    </div>
			</div>

			<div style="margin: 0">
			    <div id="below-article-sponsor-mobile" class="mobile" style="max-width: 320px; width: 100%; margin: 0 auto; text-align: center;">
			    </div>
			</div> -->


		</div> 

		<div class="blog-sidebar-wrap" style="box-shadow: 1px 1px 9px #000; border: 1px #000 solid;">
			
			<?php get_template_part('author', 'module') ?>

			<?php get_template_part('more', 'from') ?>

			<div id="sidebar-widget">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Widgets') ) : ?> 
		     	<?php endif; ?> 
		     	<div style="clear: both;"></div>
		     	<?php include('related-articles-module.php'); ?>
	     	</div>

	     	<div id="ga_17755998"> </div><div style="text-align:right; width:300px; padding:5px 0;"></div>

	    </div>
	</div>
<?php //include('related-articles-module.php'); ?>	
</div>



<?php get_footer(); ?>