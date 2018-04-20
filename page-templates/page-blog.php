<?php

/*
Template Name: Blog
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
  'category_name' => 'blog'
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
						<div class="news-item-card-image-container">
							<img src="<?php the_field('article-card-image') ?>" alt=""/>
						</div>
						<div><?php echo $thumbnail ?></div>
					</div>
					<div class="news-item--inner">
						<p><?php echo $truncated; ?></p>
						<a href="<?php the_permalink(); ?>" class="button">Read More</a>
					</div>
					</section>

				<?php endwhile; endif; ?>

				</article>
			</div>

<?php endwhile;?>

<aside class="columns small-12 large-4">
<?php get_template_part('template-parts/related'); ?>
</aside>

</div> <!-- End of Row -->

<?php do_action( 'foundationpress_after_content' ); ?>
</div>
<?php get_footer();
