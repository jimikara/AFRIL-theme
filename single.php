<?php
/**
 * The template for displaying all single posts and attachments
 * 'Articles' in AFRIL post tpye uses this template
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header();

?>

<div class="main-wrap" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>

	<header class="columns small-12 large-8">
			<h1 class="entry-title"><?php the_title(); ?></h1>
	</header>
	<div class="row" id="post-<?php the_ID(); ?>">
		<article class="columns small-12 large-8">
			<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
			<!-- check for main image and display in img tag if so -->
				<?php
					$mainImage = get_field('article-main-image');
					if( $mainImage ):
				?>

					<div class="article-main-image-wrapper">
						<img class="article-main-image" src="<?php if($mainImage) { echo $mainImage; } ?>" alt="">
					</div>
				<?php else: ?>
					<hr class="headline-breaker">
				<?php endif; ?>
				<?php if ( get_field('intro_col_1') ) {
					get_template_part( 'template-parts/article-intro' );
					echo "<hr>";
				} ?>
				<p class="lead"><?php the_field('lead_paragraph'); ?></p>

				<?php $cats = wp_get_post_categories(); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>

			<?php do_action( 'foundationpress_post_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_post_after_comments' ); ?>
		</article>
		<?php endwhile;?>

		<aside class="columns small-12 large-4">
			<?php get_template_part( 'template-parts/related' ); ?>

		</aside>
	</div>

<?php do_action( 'foundationpress_after_content' ); ?>
</div>
<!-- Your share button code -->
<div class="fb-share-button"
  data-href="http://www.your-domain.com/your-page.html"
  data-layout="button_count">
</div>
<?php get_footer();
