<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sydney
 */
?>
			</div>
		</div>
	</div><!-- #content -->

	<?php do_action('sydney_before_footer'); ?>

	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

    <a class="go-top"><i class="fa fa-angle-up"></i></a>
		
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<span> Copyright &copy </span><a href="<?php echo esc_url( __( 'http://www.ku.edu.np/', 'sydney' ) ); ?>"><?php printf( __( 'Kathmandu %s', 'sydney' ), 'University' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %2$s by %1$s', 'sydney' ), 'aThemes', '<a href="https://athemes.com/theme/sydney" rel="designer">Sydney</a>' ); ?>
			<span class="sep"> | </span>
			<span> Designed by </span><a href="<?php echo esc_url( __( 'https://www.facebook.com/manish.r.silwal/', 'sydney' ) ); ?>"><?php printf( __( 'Manish Raj %s', 'sydney' ), 'Silwal.' ); ?></a>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->

	<?php do_action('sydney_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
