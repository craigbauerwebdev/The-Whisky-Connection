<?php get_header(); ?>

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
	
	<!-- <h1 class="outter-page-title">Author: <?php //echo get_the_author_meta('display_name', $author_id); ?></h1> -->
	
	<div class="max-width group">

		<div id="blog-post-wrap">

		<?php 
		if ( have_posts() ) : while (have_posts() ) : the_post(); 

			if ( has_post_thumbnail() ) {
				$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
			} else {

				$featured_img_url = "https://kentuckypeerless.com/wp-content/uploads/cache/2017/02/Peerless-Distilling-Co-3/918773956.jpg";
			}

			$author_id = get_the_author_meta( 'ID' );

			?>

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

			<div class="blog-sidebar-wrap" style="box-shadow: 1px 1px 9px #000; border: 1px #000 solid;">

				<div style="background: black; padding: 10px; color: #fff; text-align: center;"><?php echo get_the_author_meta('display_name', $author_id); ?>
				</div>

				<img src="<?php echo esc_attr( get_the_author_meta( 'author-img', $author_id ) ); ?>" width="100%" />

				<div style="padding: 10px;">
					<p><?php echo esc_attr( get_the_author_meta( 'author-bio', $author_id ) ); ?></p>
					<!-- <p>Social stuff here!</p> -->
				</div>

				<!-- <img style="display: block;" src="http://localhost:8888/wp-sites/weewhiskyconnection/wp-content/uploads/2018/07/drizly.png" /> -->


				<div style="background: black; padding: 10px; color: #fff; text-align: center;">More Authors</div>

				<?php

				$allUsers = get_users('orderby=post_count&order=DESC');

				$users = array();

				foreach($allUsers as $currentUser)
				{
				  if(!in_array( 'subscriber', $currentUser->roles ))
				  {
				    $users[] = $currentUser;
				  }
				}

				foreach($users as $user)
				{?>
				<a href="<?php echo get_author_posts_url( $user->ID ); ?>">
					<div class="author group" style="padding: 10px; border-bottom: 1px solid #aaa;">
					  <div class="authorAvatar" style="float: left; margin-right: 15px; width: 60px; height: 60px; border-radius: 50%; border: orange 2px solid; background: url(<?php echo esc_attr( get_the_author_meta( 'author-img', $user->ID ) ); ?>); background-size: cover; background-position: center center;"></div>
					  <div class="authorInfo">
					    <h3 class="authorName" style="color: #000;"><?php echo $user->display_name; ?></h3>
					    <!-- <p class="authorDescription" style="color: #000; font-size: 12px;"><?php //echo esc_attr( get_the_author_meta( 'col-name', $user->ID ) ); ?></p>  -->
					  </div>
					</div>
				</a>
				<?php
				}
				?>
				<div id="sidebar-widget">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Widgets') ) : ?> 
			     	<?php endif; ?> 
			     	<div style="clear: both;"></div>
		     		<?php include('related-articles-module.php'); ?>
		     	</div> 
		    </div>
		</div>
	<!-- </div> -->
</div>
<?php get_footer(); ?>