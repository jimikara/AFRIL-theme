<?php

/*
Template Name: News
*/

 get_header();

?>

<div class="main-wrap" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>



	<div class="row">
		<div class="small-12 columns">
			<h1 class="entry-title no-image"><?php the_title(); ?></h1>
			<br>
		</div>
	</div>

	<?php

	do_action( 'foundationpress_before_content' );

  $args = array(
  'post_type' => 'article',
  'category_name' => 'news_events'
  );
  $query = new WP_Query( $args );

	?>

		<div class="row">
			<div class="small-12 large-8 columns">
				<article id="post-<?php the_ID(); ?>">
					<?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();

						$itemId = ucwords(get_the_title());
						$itemId = str_replace(" ", "", $itemId);
						$itemId = lcfirst($itemId);

						$truncated = wp_trim_words( get_the_content(), 20, ' ...' );

						$thumbnail = get_the_post_thumbnail();

					?>
					<section id="<?php echo $itemId; ?>" class="news-item">
					<div class="item-header">
						<h3><?php the_title(); ?></h3>

						<?php if ( get_field('event_date') ) {

						$originalDate = get_field('event_date');
						$newDate = date("d/m/Y @ g:i A", strtotime($originalDate));

						// $calDate = date("m/d/Y", strtotime($originalDate));

						echo '<div class="event-date">Event Date:  ' . $newDate . '</div>';
						// echo '<div title="Add to Calendar" class="addeventatc">';
						// echo 'Add to Calendar';
						// echo '<span class="start">' . $calDate . ' 10:00 AM</span>';
						// echo '<span class="end">' . $calDate . ' 10:00 AM</span>';
						// echo '<span class="timezone">Europe/London</span>';
						// echo '<span class="title"> ' . get_the_title() . '</span>';
						// echo '</div>';

						}

						?>



						<div class="news-item-card-image-container">
							<img src="<?php the_field('article-card-image') ?>" alt=""/>
						</div>
						<div><?php echo $thumbnail ?></div>
					</div>
					<div class="news-item--inner">
						<p><?php echo $truncated; ?></p>
						<a href="<?php the_permalink(); ?>" class="button">Read More</a>
						<!-- <br>
						<br> -->
						<!-- <br> -->
					</div>
					</section>

				<?php endwhile; endif; ?>

				</article>
			</div>

<?php endwhile;?>

<aside class="columns small-12 large-4">
	<h3 class="upcoming-events-heading">Upcoming Events</h3>
	<?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

	<?php if( get_field('event_date') ): ?>
		<a href="<?php the_permalink(); ?>">
			<div class="article-card related-card">
				<div class="card-section">
					<h5><?php the_title(); ?></h5>
					<p><em>Date: <?php echo get_field('event_date') ?></em></p>
				</div>
			</div>
		</a>
	<?php endif; ?>

	<?php endwhile; endif; wp_reset_postdata(); ?>

  <?php get_template_part( 'template-parts/related' ); ?>

</aside>
</div> <!-- End of Row -->

<?php do_action( 'foundationpress_after_content' ); ?>
</div>
<?php get_footer();
