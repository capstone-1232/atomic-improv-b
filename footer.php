<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package atomic-improv
 */

?>

	<footer id="colophon" class="site-footer">

		<?php the_custom_logo(); ?>

		<div>
			<nav class="footer-navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav>
		</div>

		<div class="site-info">
			<span>Copyright &copy; <?= date('Y');?> Atomic Improv</span>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'atomic-improv' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				// printf( esc_html__( 'Proudly powered by %s', 'atomic-improv' ), 'WordPress' );
				?>
			</a>
			<!-- <span class="sep"> | </span> -->
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				// printf( esc_html__( 'Theme: %1$s by %2$s.', 'atomic-improv' ), 'atomic-improv', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
