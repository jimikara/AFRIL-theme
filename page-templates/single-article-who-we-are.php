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
	<div class="row">
		<div class="small-12 columns">
			<!-- check for main image and display in img tag if so -->
			<?php
				$mainImage = get_field('article-main-image');
				if( $mainImage ):
			?>
				<div class="article-main-image-wrapper">
					<img class="article-main-image" src="<?php if($mainImage) { echo $mainImage; } ?>" alt="">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</div>
			<?php else: ?>
				<h1 class="entry-title no-image"><?php the_title(); ?></h1>
			<?php endif; ?>

			<?php $cats = wp_get_post_categories(); ?>

		</div>
	</div>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
		<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
		<header>
				<!-- <h1 class="entry-title"><?php the_title(); ?></h1> -->
		</header>
		<div class="entry-content">
			<?php the_content(); ?>


		</div>


		<?php do_action( 'foundationpress_post_before_comments' ); ?>
		<?php comments_template(); ?>
		<?php do_action( 'foundationpress_post_after_comments' ); ?>
	</article>
<?php endwhile;?>

<aside class="sidebar">
	Test
	<?php
  // get the custom post type's taxonomy terms

  $custom_taxterms = wp_get_object_terms( $post->ID, 'category', array('fields' => 'ids') );

  $args = array(
      'post_type' => 'article',
      'post_status' => 'publish',
      'posts_per_page' => 3, // you may edit this number
      'orderby' => 'rand',
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

      <h3 class="widget-title">Related</h3>

      <?php while ( $related_items->have_posts() ) : $related_items->the_post(); ?>

          <a href="<?php the_permalink(); ?>">
          	<div class="card article-card related-card">
          		<!-- <div class="card-image-wrap">
								<img src="<?php the_field('article-card-image') ?>" alt=""/>
							</div> -->
          		<div class="card-section">
								<h4><?php the_title(); ?></h4>
								<?php the_field( 'article-card-text' ) ?>
							</div>
          	</div>
          </a>

      <?php endwhile; ?>

  <?php endif;
  // Reset Post Data
  wp_reset_postdata();
  ?>

</aside>

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
