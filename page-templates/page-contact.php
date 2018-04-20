<?php

/*
Template Name: Contact Page
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

  <!-- contact form -->
  <?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
		<article>
			<div class="row">
				<div class="small-12 columns">
					 <!-- map -->
					<div class="map-container">
						<h1><?php the_title(); ?></h1>
						<?php the_field( 'map' ) ?>
					</div>
					<h1>GERR</h1>
					<br>
				</div>
			</div>
			<div class="row">
				<div class="small-12 large-6 columns">
					 <!-- address and phone -->
					<table class="contact-table unstriped">
						<tr>
							<td>
								<h4>Address</h4>
							</td>
							<td>
								<?php the_field( 'address' ); ?>
							</td>
						</tr>
						<tr>
							<td>
								<h4>Phone</h4>
							</td>
							<td>
								<?php the_field( 'phone' ); ?>
							</td>
						</tr>
						<tr>
							<td>
								<h4>Email</h4>
							</td>
							<td>
								<a href="mailto:<?php the_field('contact_email'); ?>?Subject=AFRIL%20Enquiry" target="_top">
									<?php the_field('contact_email'); ?>
								</a>
							</td>
						</tr>
					</table>
				</div>
				<div class="small-12 large-6 columns">
					<!-- opening hours -->
					<?php the_field( 'opening_hours' ); ?>
				</div>
			</div>
			<br><br>

			<div class="row">
				<div class="small-12 columns">
					<div class="contact-container">
						<?php the_field( 'contact_form' ); ?>
					</div>
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
