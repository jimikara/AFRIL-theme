<?php if ( afril_get_featured_content(1) ) : ?>
  <div id="featured">
    <h2><?php _e( 'Featured Content', 'FoundationPress' ); ?></h2>
    <?php foreach ( $featured as $post ) : setup_postdata( $post ); ?>
      <?php get_template_part( 'featured', get_post_format() ); ?>
    <?php endforeach; ?>
  </div>
  <span>**inside if</span>
<?php endif; ?>
<h4>end of card row featured</h4>



