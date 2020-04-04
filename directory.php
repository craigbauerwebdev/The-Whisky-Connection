<?php
/* 
Template Name: Directory Template
*/
?>

<?php get_header(); ?>

<div class="main-content-wrap outter-content-wrap front-page directory">
	<div class="slider-shadow"></div>

		<div class="adnxs-desktop">
			<center>
				<div id="ga_17755898"> </div>
			</center><br>
		</div>
		<div class="adnxs-mobile">
			<center><div id="ga_17756166"></div></center><br>
		</div>
		
		<div class="max-width inner-content-wrap padding">
			<h1 class="inner-page-title"><?php the_title(); ?></h1> 
		
		 	<?php if ( have_posts() ) : while (have_posts() ) : the_post();

				$custom_terms = get_terms('brand');

				foreach($custom_terms as $custom_term) {
				    wp_reset_query();
				    $args = array('post_type' => 'products',
				        'tax_query' => array(
				            array(
				                'taxonomy' => 'brand',
				                'field' => 'slug',
				                'terms' => $custom_term->slug,
				            ),
				        ),
				     );

				     $loop = new WP_Query($args);
				     if($loop->have_posts()) {
				        echo '<h2>'.$custom_term->name.'</h2>';

				        while($loop->have_posts()) : $loop->the_post();
				            echo '<a href="'.get_permalink().'">'.get_the_title().'</a><br>';
				        endwhile;
				     }
				}

				?>
					
				<?php endwhile; else: ?>
					<p>There are no posts available.</p>
				<?php endif; ?>

			</div>

			<?php include('filters.php'); ?>	
		</div> <!-- Closes Tax Wrap -->
	</div>
</div>    

<?php get_footer(); ?>