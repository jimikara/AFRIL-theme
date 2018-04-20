<?php

/*
Template Name: Donate Page
*/

 get_header();

?>

 <div class="main-wrap" role="main">
 <?php do_action( 'foundationpress_before_content' ); ?>

 <?php

  $args = array(
  'post_type' => 'donate_page',
  );
  $query = new WP_Query( $args );

 ?>

 <?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
	<div class="row">
		<div class="small-12 columns text-center">
			<!-- check for main image and display in img tag if so -->
			<?php
				$mainImage = get_field('article-main-image');
				if( $mainImage ):
			?>
			<span>donates</span>
			<H1>Durrrrr</H1>
				<div class="article-main-image-wrapper">
					<img class="article-main-image" src="<?php if($mainImage) { echo $mainImage; } ?>" alt="">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</div>
			<?php else: ?>
				<h1 class="entry-title no-image"><?php the_title(); ?></h1>
			<?php endif; ?>
			<p class="lead"><?php the_field('lead_paragraph'); ?></p>
			<?php if ( get_field('intro_col_1') ) {
				get_template_part( 'template-parts/article-intro' );
				echo "<hr>";
			} ?>

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
<?php endwhile; endif; ?>

 <?php do_action( 'foundationpress_after_content' ); ?>

 </div>

 <?php get_footer();
