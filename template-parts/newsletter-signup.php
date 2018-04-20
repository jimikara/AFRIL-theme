<?php

  $args = array(
  'post_type' => 'subscribe',
  'posts_per_page' => 1
  );
  $query = new WP_Query( $args );

?>

<div class="newsletter-signup">
	<div class="row align-center small-12 large-6 columns">
		<label class="mobile-only">Subscribe to our newsletter</label>

			<?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>

	</div>
</div>

