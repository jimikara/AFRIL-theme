<?php

  $args = array(
  'post_type' => 'hero_banner'
  );
  $query = new WP_Query( $args );

?>

<section class="hero-container">
	<?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();
		$hero = get_field('hero-image');
	?>
		<div class="featured-hero" role="banner" style="background-image: url( <?php echo $hero['url'] ?> ) " width="100%">
					<div class="row align-bottom">
						<div class="small-12 large-5 columns hero-content-container">
							<div class="hero-content">
								<h1>Action For <br>Refugees <br>In Lewisham</h1>
							</div>
						</div>
					</div>
		</div>
	<?php endwhile; endif; wp_reset_postdata(); ?>
</section>
