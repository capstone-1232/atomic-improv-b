<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package atomic-improv
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Atomic Improv’s interactive, custom and hilarious shows are the perfect fit for any audience. Fast, funny and tailored to the crowd, Atomic Improv is always a hit.">
	<meta name="keywords" content="">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<style>
	@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap');
	</style>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary" tabindex="0"><?php esc_html_e( 'Skip to content', 'atomic-improv' ); ?></a>

	<header id="masthead" class="site-header d-flex justify-content-between align-items-center">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$atomic_improv_description = get_bloginfo( 'description', 'display' );
			if ( $atomic_improv_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $atomic_improv_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<h1>Atomic Improv</h1>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" aria-label="Show Menu">
				<span class="line-1"></span>
				<span class="line-2"></span>
			</button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
