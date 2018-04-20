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
		<div class="entry-content list-page">
			<p class="lead"><?php the_field('lead_paragraph'); ?></p>
			<ul id="content-list"></ul>
			<?php the_content(); ?>
		</div>

		<?php do_action( 'foundationpress_post_before_comments' ); ?>
		<?php comments_template(); ?>
		<?php do_action( 'foundationpress_post_after_comments' ); ?>
	</article>


<aside class="sidebar">
	<?php the_field('sidebar_content'); if (get_field('sidebar_content')){
			echo "<br>";
		} ?>

	<?php endwhile;?>

	<?php get_template_part( 'template-parts/related' ); ?>

</aside>

<?php do_action( 'foundationpress_after_content' ); ?>
</div>
<!-- Your share button code -->
<div class="fb-share-button"
  data-href="http://www.your-domain.com/your-page.html"
  data-layout="button_count">
</div>
<?php get_footer();
