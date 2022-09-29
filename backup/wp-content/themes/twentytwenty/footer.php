<?php

/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<footer id="site-footer" class="header-footer-group">

	<div class="section-inner">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="custom-flex-left">
						<p>Copyright &copy; 2022 Swazei. All Rights Reserved</p>
					</div>

				</div>
				<div class="col-md-6">
					<div class="custom-flex-right">
						<a class="to-the-top" href="#site-header">
							<span class="to-the-top-long">
								<?php
								/* translators: %s: HTML character for up arrow. */
								printf(__('To the top %s', 'twentytwenty'), '<span class="arrow" aria-hidden="true">&uarr;</span>');
								?>
							</span><!-- .to-the-top-long -->
							<span class="to-the-top-short">
								<?php
								/* translators: %s: HTML character for up arrow. */
								printf(__('Up %s', 'twentytwenty'), '<span class="arrow" aria-hidden="true">&uarr;</span>');
								?>
							</span><!-- .to-the-top-short -->
						</a><!-- .to-the-top -->
					</div>


				</div>
			</div>
		</div>
		<!-- <div class="footer-credits">

			<p class="footer-copyright">&copy;
				<?php
				echo date_i18n(

					_x('Y', 'copyright date format', 'twentytwenty')
				);
				?>
				<a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
			</p>

			<?php
			if (function_exists('the_privacy_policy_link')) {
				the_privacy_policy_link('<p class="privacy-policy">', '</p>');
			}
			?>

			<p class="powered-by-wordpress">
				<a href="<?php echo esc_url(__('https://wordpress.org/', 'twentytwenty')); ?>">
					<?php _e('Powered by WordPress', 'twentytwenty'); ?>
				</a>
			</p>
		</div> -->


	</div><!-- .section-inner -->

</footer><!-- #site-footer -->

<?php wp_footer(); ?>

</body>

</html>