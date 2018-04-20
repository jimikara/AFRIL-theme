<!-- Three column 'Hand Print' layout for the article post type -->
<div class="row intro-row article-intro" data-equalizer>
	<div class="small-12 medium-12 large-4 columns text-center intro-col-1">
		<div class="intro-content" data-equalizer-watch>
			<?php get_template_part( 'template-parts/handprint' ); ?>
	  	<h5 class="subheader"><?php the_field('intro_col_1') ?></h5>
			<?php the_field('intro_text_1') ?>
		</div>
	</div>

	<div class="small-12 medium-12 large-4 columns text-center intro-col-2">
		<div class="intro-content" data-equalizer-watch>
			<?php get_template_part( 'template-parts/handprint' ); ?>
	  	<h5 class="subheader"><?php the_field('intro_col_2') ?></h5>
			<?php the_field('intro_text_2') ?>
		</div>
	</div>

	<div class="small-12 medium-12 large-4 columns text-center intro-col-3">
		<div class="intro-content" data-equalizer-watch>
			<?php get_template_part( 'template-parts/handprint' ); ?>
	  	<h5 class="subheader"><?php the_field('intro_col_3') ?></h5>
			<?php the_field('intro_text_3') ?>
		</div>
	</div>
</div>
