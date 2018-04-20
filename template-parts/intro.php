<?php
	// Three hand print banner for the homepage (includes button links)

	$num_posts = 3;

	$args = array(
  'post_type' => 'intro_section',
  'posts_per_page' => $num_posts
  );
  $query = new WP_Query( $args );

  $col = 1;

?>

<div class="row intro-row align-center" data-equalizer>
<?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
	<div class="small-11 medium-7 large-4 columns text-center intro-col <?php echo "intro-col-$col" ?>">
		<div class="intro-content" data-equalizer-watch>

			<?php get_template_part( 'template-parts/handprint' ); ?>
			<?php $col++ ; ?>

	  	<h2 class="subheader"><?php the_title(); ?></h2>
			<?php the_content(); ?>

			<?php
			$introLink = get_field( 'intro_page_link' );
			$introLinkText = get_field( 'intro_page_link_text' );
			?>

			<?php if ( $introLink ) : ?>

			<a href="<?php echo $introLink ?>" class="button">
				<?php echo $introLinkText ?>
			</a>

		<?php endif; ?>

		</div>

	</div>

<?php endwhile; endif; wp_reset_postdata(); ?>
</div>
