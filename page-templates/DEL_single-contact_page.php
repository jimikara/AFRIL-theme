<?php

/*
Template Name: Contact Page
Template Post Type: contact_page
*/

 get_header();

?>

 <div class="main-wrap" role="main">
 <?php do_action( 'foundationpress_before_content' ); ?>

 <?php

  $args = array(
  'post_type' => 'contact_page',
  );
  $query = new WP_Query( $args );

 ?>

 <!-- address and phone -->

 <!-- map -->
 <!-- opening hours -->
  <!-- contact form -->
  <?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
		<article>
			<div class="row">
				<div class="small-12 columns">
					<h1><?php the_title(); ?></h1>
					<?php the_field( 'map' ) ?>
				</div>
			</div>
			<div class="row">
				<div class="small-12 large-8 columns">

				</div>
				<div class="small-12 large-4 columns">
					<h2>Address</h2>
					<p><?php the_field( 'address' ); ?></p>
					<h2>Phone</h2>
					<p><?php the_field( 'phone' ); ?></p>
					<h2>Email</h2>
					<p><?php the_field( 'opening_hours' ); ?></p>
				</div>
			</div>

		</footer>
		<?php do_action( 'foundationpress_page_before_comments' ); ?>
		<?php comments_template(); ?>
		<?php do_action( 'foundationpress_page_after_comments' ); ?>
	</article>
<?php endwhile; endif; ?>

 <?php do_action( 'foundationpress_after_content' ); ?>

 </div>

 <?php get_footer();
