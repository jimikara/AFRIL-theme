<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header();

?>

<div class="main-wrap" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>">
			<div class="row">
			<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
			<header class="columns small-12">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<h2 class="entry-subtitle">Our Staff</h2>
			</header>

				<?php
					$args = array(
		      	'post_type' => 'staff_profile',
		  			);
		  			$staff_profiles = new WP_Query( $args );
		  		?>

				<?php while ( $staff_profiles->have_posts() ) : $staff_profiles->the_post(); ?>

				<div class="columns small-12 medium-9 large-6">
					<div class="staff-profile">
						<?php if ( get_field('staff_photo') ) {
							$url = get_field('staff_photo');
							echo "<img class='profile-pic' src='$url'/>";
						}
						?>
						<h3><?php the_field('staff_name'); ?></h3>
						<div class="staff-profile-inner">
							<h4 class="subheader"><?php the_field('job_title'); ?></h4>
							<p><?php the_field('bio'); ?></p>
						</div>
					</div>
				</div>

				<?php endwhile; ?>

			<?php do_action( 'foundationpress_post_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_post_after_comments' ); ?>
			<!-- // Reset Post Data -->
			<?php  wp_reset_postdata(); ?>
			</div>
		</article>
<?php endwhile;?>


<?php do_action( 'foundationpress_after_content' ); ?>
</div>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your share button code -->
<div class="fb-share-button"
  data-href="http://www.your-domain.com/your-page.html"
  data-layout="button_count">
</div>
<?php get_footer();
