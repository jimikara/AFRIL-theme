<?php

  $args = array(
  'post_type' => 'article',
  'tag' => 'home-page-featured',
  'posts_per_page' => 9,
  );

  $query = new WP_Query( $args );

  $twitterURL = 'https://twitter.com/afril';

  $count = 1;

?>

<div class="row" data-equalizer>
<?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

	<div class="small-12 medium-6 large-4 columns">

			<div class="card article-card home-page-card <?php echo "acard-".$count; if ( in_category('Tweet') ) { echo " twitter-card"; } ($count >= 6) ? $count = 1 : $count++; ?>" data-equalizer-watch>

				<?php if ( in_category('Tweet') ) { ?>
					<?php the_content(); ?>
				<?php } else { ?>

				<?php

				?>
					<div class="card-image-wrap">
						<img src="<?php the_field('article-card-image') ?>" alt=""/>
						<div class="card-image-overlay" aria-hidden="true"></div>
					</div>
					<div class="card-section">
					<h4><?php the_title(); ?></h4>

					<p><?php
					$truncated = wp_trim_words( get_field( 'article-card-text' ), 28, ' ...' );
					echo $truncated;
					?></p>

					<?php get_template_part('template-parts/read-more'); ?>
					</div>
				<?php } ?>
			</div>
		</a>
	</div>

<?php endwhile; endif; wp_reset_postdata(); ?>
</div>

<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script>
<script>
	twttr.widgets.load(
  document.getElementById("twitter-card")
);
</script>
