<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Match
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site-wrapper site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">

		<div class="sitebar">
			<div class="container">
				<div class="sitebar-inside">

					<div class="site-branding">
						<h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
						<h3 class="site-description"><?php bloginfo( 'description' ); ?></h3>
					</div>

					<nav id="site-navigation" class="main-navigation" role="navigation">
						<div class="menu-toggle-wrapper">
							<a href="#" tabindex="0" class="fa fa-bars fa-2x slicknav-btn slicknav-collapsed"><span class="slicknav-btn-text">Menu</span></a>
						</div>
						<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'match' ); ?></a>

						<?php
						wp_nav_menu( apply_filters( 'match_wp_nav_menu_args', array(
							'container'       => 'div',
							'container_class' => 'site-primary-menu',
							'theme_location'  => 'primary',
							'menu_class'      => 'primary-menu sf-menu',
							'depth'           => 3,
						) ) );
						?>
					</nav>

				</div>
			</div>
		</div> <!-- .sitebar -->

		<?php if ( get_header_image() ): ?>
		<div class="header-custom">
			<img src="<?php esc_url( header_image() ); ?>" class="img-responsive" alt="" />
		</div>
		<?php endif; ?>

	</header> <!-- #masthead -->
