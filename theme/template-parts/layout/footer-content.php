<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MyTheme
 */

?>

<footer id="colophon" class="bg-primary-400 pb-10 pt-20 sm:py-20">
	<div class="container max-w-[1040px] mx-auto p-0">
		<div class="flex flex-col md:flex-row justify-between items-center py-3">
			<div class="footer_logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<?php if ( get_field( 'logo-footer', 'option' ) ) : ?>
					<img src="<?php the_field( 'logo-footer', 'option' ); ?>" />
				<?php endif ?>
				</a>
			</div>
			<div class="flex flex-col md:flex-row items-center">
				<p class="text-primary-300 pr-0 md:pr-6 py-6 md:py-0 tracking-[-0.16px]"><?php the_field( 'text-footer', 'option' ); ?></p>
				<div class="p-0 flex justify-center">
					<a class="btn-green mb-0" href="<?php the_field( 'green-btn-footer-link', 'option' ); ?>"><?php the_field( 'green-btn-footer-text', 'option' ); ?></a>
				</div>
			</div>
		</div>
		<div class="py-[62px]">
			<hr class="text-[#F5F0EC] h-[1px]">
		</div>
		<div class="flex flex-col md:flex-row justify-center md:justify-between text-primary-300">
			<div class="social">
				<ul class="flex flex-col sm:flex-row justify-center pb-6 md:pb-0">
				<?php if ( have_rows( 'social_media', 'option' ) ) : ?>
					<?php while ( have_rows( 'social_media', 'option' ) ) : the_row(); ?>
					<li class="pr-12 pb-3 sm:pb-0 hover:text-primary-100"><a href="http://adrespect-task/kontakt">Kontakt</a></li>
					<li class="pr-12 pb-3 sm:pb-0 hover:text-primary-100"><a href="<?php the_sub_field( 'instagram-footer-link' ); ?>">Instagram</a></li>
					<li class="pr-12 pb-3 sm:pb-0 hover:text-primary-100"><a href="<?php the_sub_field( 'facebook-footer-link' ); ?>">Facebook</a></li>
					<li class="hover:text-primary-100"><a href="<?php the_sub_field( 'linkedin-footer-link' ); ?>">LinkedIn</a></li>
					<?php endwhile; ?>
				<?php endif; ?>
				</ul>
			</div>
			<div class="flex flex-col sm:flex-row justify-center">
				<div class="phone pr-12 pb-3 sm:pb-0 pt-3 sm:pt-0 hover:text-primary-100"><a href="tel:<?php the_field( 'phone-footer', 'option' ); ?>"><?php the_field( 'phone-footer', 'option' ); ?></a></div>
				<div class="mail hover:text-primary-100"><a href="mailto:<?php the_field( 'mail-footer', 'option' ); ?>"><?php the_field( 'mail-footer', 'option' ); ?></a></div>
			</div>
		</div>
		<div class="flex flex-col sm:flex-row justify-between text-primary-300 pt-20 sm:pt-[120px]">
			<div class="copyright mb-3 sm:mb-0">
				<p>Prawa zastrzeżone © <?php echo date('Y');  ?></p>
			</div>
			<div class="design flex flex-row">
				<p>made by</p>
					<a class="pl-4" href="https://adrespect.pl/" taret="_blank" rel="nofollow">
						<img src="<?php echo get_template_directory_uri() ?>/img/logo-full-light.svg" alt="">
					</a>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
