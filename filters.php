<div id="filter-wrap" style="color: #fff; background: #000;">
	<div style="width: calc(100% - 60px); max-width: 1300px; padding: 30px; margin: 0 auto; position: relative;">
		<a class="filter-icon" href="#" style="position: absolute; top: 5px; right: 15px; font-size: 3em; color: #fff; z-index: 99;">&times;</a>
	<h2>Whisk(e)y Filters</h2>
<?php //if ( have_posts() ) : while (have_posts() ) : the_post(); ?>

	<h3 style="margin: 15px 0;">Whisky Types</h3>
	<div class="group" style="padding-bottom: 0px;">
	<?php

	$custom_terms = get_terms('type');

	foreach($custom_terms as $custom_term) {
	    wp_reset_query();
	    $args = array('post_type' => 'products',
	        'tax_query' => array(
	            array(
	                'taxonomy' => 'type',
	                'field' => 'slug',
	                'terms' => $custom_term->slug,
	            ),
	        ),
	     ); ?>

	    
		    <?php $loop = new WP_Query($args); ?>

		    <?php if($loop->have_posts()) { ?>
			    <?php if($loop->have_posts()) : $loop->the_post();
			        echo '<a style="float: left; margin-right: 10px; margin-bottom: 10px; color: #ddd; padding: 10px; border-radius: 5px; background: #333;" href="https://weewhiskyconnection.com/type/'.$custom_term->slug.'/">'.$custom_term->name.'</a>';
	 			endif;
		    
		    }	
	    
	} ?>
	</div>

	<div style="clear: both;"></div>

	<h3 style="margin: 15px 0;">Brands</h3>
	<div class="group" style="padding-bottom: 0px;">
	<?php

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
	     ); ?>

	    
		    <?php $loop = new WP_Query($args); ?>

		    <?php if($loop->have_posts()) { ?>
			    <?php if($loop->have_posts()) : $loop->the_post();
			        echo '<a style="float: left; margin-right: 10px; margin-bottom: 10px; color: #ddd; padding: 10px; border-radius: 5px; background: #333;" href="https://weewhiskyconnection.com/brand/'.$custom_term->slug.'/">'.$custom_term->name.'</a>';
	 			endif;
		    
		    }	
	    
	} ?>
	</div>


	<div style="clear: both;"></div>

	<h3 style="margin: 15px 0;">Regions</h3>
	<div class="group" style="padding-bottom: 0px;">
	<?php

	$custom_terms = get_terms('region');

	foreach($custom_terms as $custom_term) {
	    wp_reset_query();
	    $args = array('post_type' => 'products',
	        'tax_query' => array(
	            array(
	                'taxonomy' => 'region',
	                'field' => 'slug',
	                'terms' => $custom_term->slug,
	            ),
	        ),
	     ); ?>

	    
		    <?php $loop = new WP_Query($args); ?>

		    <?php if($loop->have_posts()) { ?>
			    <?php if($loop->have_posts()) : $loop->the_post();
			        echo '<a style="float: left; margin-right: 10px; margin-bottom: 10px; color: #ddd; padding: 10px; border-radius: 5px; background: #333;" href="https://weewhiskyconnection.com/region/'.$custom_term->slug.'/">'.$custom_term->name.'</a>';
	 			endif;
		    
		    }	
	    
	} ?>
	</div>

	<div style="clear: both;"></div>

	<h3 style="margin: 15px 0;">Attributes</h3>
	<div class="group" style="padding-bottom: 20px;">
	<?php

	$custom_terms_tax = get_terms('attribute');

	foreach($custom_terms_tax as $custom_term_tax) {
	    wp_reset_query();
	    $args = array('post_type' => 'products',
	        'tax_query' => array(
	            array(
	                'taxonomy' => 'attribute',
	                'field' => 'slug',
	                'terms' => $custom_term_tax->slug,
	            ),
	        ),
	     ); ?>
	    
		    <?php $loop = new WP_Query($args); ?>

		    <?php if($loop->have_posts()) { ?>
			    <?php if($loop->have_posts()) : $loop->the_post();
			        echo '<a style="float: left; margin-right: 10px; margin-bottom: 10px; color: #ddd; padding: 10px; border-radius: 5px; background: #333;" href="https://weewhiskyconnection.com/attribute/'.$custom_term_tax->slug.'/">'.$custom_term_tax->name.'</a>';
	 			endif;
		    
		    }	 
	}

	?>
	</div>
	
<!-- <?php //endwhile; else: ?>
	<p>There are no whiskies available.</p>
<?php //endif; ?> -->
	</div>
</div>