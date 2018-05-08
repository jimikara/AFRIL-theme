<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>

		<!-- Your share button code -->
		<div class="fb-share-button"
			data-href="http://www.your-domain.com/your-page.html"
			data-layout="button_count">
		</div>

		<div class="footer-container" data-sticky-footer>
			<footer class="footer row">
				<div class="small-12 large-6 columns">

					<div class="footer__socials">
						<a href="https://www.facebook.com/ActionForRefugeesInLewisham/" target="_blank">
							<img src="/wp-content/uploads/2017/07/Facebook_Color-1.png" alt="Facebook icon" class="style_svg" width="42" height="42">
						</a>
						<a href="https://twitter.com/afril" target="_blank">
							<img src="/wp-content/uploads/2017/07/Twitter_Color.png" alt="Twitter icon" class="style_svg" width="42" height="42">
						</a>
						<a href="https://www.youtube.com/user/AFRILrefugees" target="_blank">
							<img src="/wp-content/uploads/2017/07/Youtube_Color.png" alt="YouTube icon" class="style_svg" width="42" height="42">
						</a>
					</div>
					<div class="footer_links">
						<p>
							<?php

							$footerLinks = array(
								'container' => false,
											      'menu-class' => 'no-bullet vertical',
							);

							wp_nav_menu( array(
								'theme_location' => 'footer-links',
								'container' => false,
								'menu-class' => 'no-bullet vertical'
								) );

							?>
						</p>
					</div>
					<p class="footer__copyright">&copy; <?php echo bloginfo() ." ". date("Y"); ?></p>
					<p>AFRIL is a registered charity in the UK. Charity number 1116344</p>
					<p class="credit_link">Website by <a href="http://jimmysaul.com" target="_blank" rel="noopener">jimmysaul.com</a></p>
				</div>
				<div class="small-12 large-6 columns">


				</div>

				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php do_action( 'foundationpress_after_footer' ); ?>

			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		</div><!-- Close off-canvas content -->
	</div><!-- Close off-canvas wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>

</body>
</html>
