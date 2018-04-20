<?php
/**
 * The sidebar containing the main widget area
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<aside class="sidebar">
	<?php do_action( 'foundationpress_before_sidebar' ); ?>

	<!-- show related content -->
	<?php

	$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 5, 'post__not_in' => array($post->ID) ) );
	if( $related ) foreach( $related as $post ) {
	setup_postdata($post); ?>
	 <ul>
	        <li>
	        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
	            <?php the_content('Read the rest of this entry &raquo;'); ?>
	        </li>
	    </ul>
	<?php }
	wp_reset_postdata();

	the_field('sidebar_content');

	?>

	<?php do_action( 'foundationpress_after_sidebar' ); ?>
</aside>
