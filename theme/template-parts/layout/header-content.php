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

    <div>
        <?php
		if ( is_front_page() ) :
			?>
        <h1><?php bloginfo( 'name' ); ?></h1>
        <?php
		else :
			?>
        <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
        <?php
		endif;

		$mytheme_description = get_bloginfo( 'description', 'display' );
		if ( $mytheme_description || is_customize_preview() ) :
			?>
        <p><?php echo $mytheme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
        <?php endif; ?>
    </div>

    <nav id="site-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'mytheme' ); ?>">
        <button aria-controls="primary-menu"
            aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'mytheme' ); ?></button>

        <?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
			)
		);
		?>
    </nav><!-- #site-navigation -->
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <aside role="complementary" aria-label="<?php esc_attr_e( 'Header', 'mytheme' ); ?>">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </aside>
    <?php endif; ?>

</header><!-- #masthead -->