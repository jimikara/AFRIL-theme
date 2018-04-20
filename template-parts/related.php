<?php
	  // get the custom post type's taxonomy terms
	  $custom_taxterms = wp_get_object_terms( $post->ID, 'category', array('fields' => 'ids') );

	  $args = array(
	      'post_type' => 'article',
	      'post_status' => 'publish',
	      'posts_per_page' => 5, // you may edit this number
	      'orderby' => 'rand',
	      'cat' => -10,  //minus 'Tweet'
	      'post__not_in' => array ( $post->ID ),
	      'tax_query' => array(
	          array(
	              'taxonomy' => 'category',
	              'field' => 'id',
	              'terms' => $custom_taxterms
	          )
	      )
	  );

	  $related_items = new WP_Query( $args );

	  // loop over query
	  if ( $related_items->have_posts() ) : ?>

	      <div class="related-container">
	      	<h3 class="widget-title related-heading">Related</h3>

	      	<?php while ( $related_items->have_posts() ) : $related_items->the_post(); ?>

	      	    <a href="<?php the_permalink(); ?>">
	      	    	<div class="article-card related-card">
	      	    		<div class="card-section">
	      									<h5><?php the_title(); ?></h5>
	      									<?php the_field( 'article-card-text' ) ?>
	      								</div>
	      	    	</div>
	      	    </a>

	      	<?php endwhile; ?>
	      </div>

	  <?php endif;
	  // Reset Post Data
	  wp_reset_postdata();
	  ?>
