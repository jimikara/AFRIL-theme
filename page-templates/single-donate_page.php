<?php

/*
Template Name: Donate Page
Template Post Type: donate_page
*/

 get_header();

?>

 <div class="main-wrap" role="main">
 <?php do_action( 'foundationpress_before_content' ); ?>

 <?php

  $args = array(
  'post_type' => 'donate_page',
  'p' => 169,
  );
  $query = new WP_Query( $args );
 ?>

 <?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

	<div class="row">
		<header class="small-12 columns">
			<h1 class="entry-title no-image"><?php the_title(); ?></h1>
		</header>

		<div class="small-12 large-8 columns">

			<?php get_template_part('template-parts/donation-table') ?>

		</div>
		<div class="small-12 large-4 columns">
			<?php get_template_part('template-parts/related') ?>
		</div>

		<div class="small-12 large-8 columns">
				<p class="lead"><?php the_field('lead_paragraph'); ?></p>
				<?php the_content(); ?>

		</div>

	</div>
<?php endwhile; endif; ?>

<!-- <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
	<input type="hidden" name="cmd" value="_donations">
	<input type="hidden" name="business" value="admin@afril.org.uk">
	<input type="hidden" name="lc" value="GB">
	<input type="hidden" name="item_name" value="AFRIL">
	<input type="hidden" name="no_note" value="0">
	<input type="hidden" name="currency_code" value="GBP">
	<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
	<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
	<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form> -->
<br><br>
<div class="row">
	<div class="small-12 columns">
		<h3>Other ways to donate</h3>
		<h4 class="subheader">Donate by post</h4>
	</div>
	<div class="small-12 large-6 columns">
		<p>For <strong>one off donations</strong>, please make a cheque out to <strong>AFRIL</strong> and post to:</p>
		<dl>
			<dt>AFRIL</dt>
			<dt>F3 Leemore Central Community Hub</dt>
			<dt>Bonfield Road</dt>
			<dt>Lewisham</dt>
			<dt>London</dt>
			<dt>SE13 5ES</dt>
		</dl>
	</div>
	<div class="small-12 large-6 columns">
		<p>To make a <strong>regular donation</strong>, please complete the standing order mandate below and send it back to us via email at <a href="mailto:donate@afril.org.uk">donate@afril.org.uk</a></p>

		 <!-- Add standing order download form here -->
		 <a class="button" href="afril.org.uk/wp-content/uploads/2017/09/standing-order-form-gift-aid-afril.docx"><i class="fa fa-download" aria-hidden="true"></i> Standing Order Mandate Download</a>
	</div>
</div>

 <?php do_action( 'foundationpress_after_content' ); ?>

</div>

 <?php get_footer();
