<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MyTheme
 */

?>

<header id="masthead">
	<div class="container flex flex-wrap py-6 items-center">
		<div class="header_logo w-3/12 lg:px-0">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<?php if ( get_field( 'logo', 'option' ) ) : ?>
				<img src="<?php the_field( 'logo', 'option' ); ?>" />
			<?php endif ?>
			</a>
		</div>
		<nav id="site-navigation" class="w-9/12 flex justify-end items-center ml-auto" aria-label="<?php esc_attr_e( 'Main Navigation', 'mytheme' ); ?>">
			<button id="mobile-menu-toggle" class="lg:hidden" aria-controls="primary-menu" aria-expanded="false"><?php //esc_html_e( 'Primary Menu', 'mytheme' ); ?> 	<span><i class="fal fa-bars"></i></span>
			</button>

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
				)
			);
			?>

			<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
			<aside class="sm:flex justify-end hidden pr-5 lg:pr-0" role="complementary" aria-label="<?php esc_attr_e( 'Header', 'mytheme' ); ?>">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</aside>
			<?php endif; ?>
    	</nav><!-- #site-navigation -->
	</div>
</header><!-- #masthead -->
