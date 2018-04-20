<?php
/*
Template Name: Front
*/
get_header(); ?>

<?php do_action( 'foundationpress_before_content' ); ?>

 <?php get_template_part( 'template-parts/featured-image' ); ?>
 <?php get_template_part( 'template-parts/intro' ); ?>
 <?php get_template_part( 'template-parts/card-row' ) ?>
 <?php get_template_part( 'template-parts/newsletter-signup' ) ?>


<?php get_footer();
