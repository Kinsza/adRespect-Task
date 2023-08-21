<?php
/**
 *
 *Template name: Home
 *
 */

get_header();
?>

<!--START SLIDER -->
<section class="relative">
	<!-- Swiper -->
	<div class="swiper mySwiper relative">
		<div class="swiper-wrapper">
		<?php if ( have_rows( 'slider' ) ) : ?>
			<?php while ( have_rows( 'slider' ) ) : the_row(); ?>
				<div class="swiper-slide">
					<div class="bg-slider_opacity"></div>
					<div class="container mx-auto items-center flex min-h-[737px]">
						<div class="w-full md:w-1/2 h-full relative z-40 md:z-20 pr-0 sm:pr-16">
							<h1 class="pb-11"><?php the_sub_field( 'slider-title' ); ?></h1>
								<?php the_sub_field( 'slider-text' ); ?>
							<div class="group-btn flex flex-row justify-start pt-[72px]">
								<a class="btn-green" href="<?php the_sub_field( 'green-btn-link' ); ?>"><?php the_sub_field( 'green-btn-text' ); ?></a>
								<a class="btn-transparent ml-9 border-primary-100 text-primary-100 hover:bg-primary-400" href="<?php the_sub_field( 'transparent-btn-link' ); ?>">
									<span><?php the_sub_field( 'transparent-btn-text' ); ?></span>
									<span class="ml-2">
										<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M16 8.49529L15.1043 7.59959L8.63642 14.0769L8.63642 0.5L7.36358 0.5L7.36358 14.0675L0.895699 7.59959L9.54553e-08 8.49529L8.00471 16.5L16 8.49529Z" fill="#1B5B31"/>
										</svg>
									</span>
								</a>
							</div>
						</div>
						<?php if ( get_sub_field( 'slider-img' ) ) : ?>
							<img class="w-full md:w-1/2 h-full absolute right-0 top-0 z-30 object-cover" src="<?php the_sub_field( 'slider-img' ); ?>" />
						<?php endif ?>
					</div>
				</div>
			<?php endwhile; ?>
			<?php else : ?>
				<?php // Brak slajdów ?>
			<?php endif; ?>
		</div>
		<div class="bg-[#F5F0EC] lg:py-6 py-4 px-8 w-48 lg:h-24 h-16 absolute right-0 bottom-0 z-10">
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
	</div>
</section>
<!--END SLIDER -->
<!--START OFFER -->
<section class="bg-primary-300 pt-[120px] pb-40">
	<div class="container p-0">
		<div class="pb-24 max-w-[1040px] mx-auto px-4 lg:px-0">
			<h4 class="text-primary-100"><?php the_field( 'offer-subtitle' ); ?></h4>
			<h2 class="pt-4 pb-8"><?php the_field( 'offer-title' ); ?> <span class="italic"><?php the_field( 'offer-title-italic' ); ?></span></h2>
				<p class="w-full lg:w-[70.4%]"><?php the_field( 'offer-text', false, false ); ?></p>
		</div>
		<div class="flex flex-col lg:flex-row justify-between px-0">
		<?php if ( have_rows( 'offer-box' ) ) : ?>
			<?php while ( have_rows( 'offer-box' ) ) : the_row(); ?>
			<a class="mb-6 lg:mb-0 px-4 lg:px-0" href="<?php the_sub_field( 'offer-box-btn-link' ); ?>">
				<div class="offer-box bg-white py-12 px-10 w-auto xl:w-[378px] mx-5 xl:mx-0 rounded-[12px] hover:shadow-lg">
					<div class="min-h-[40px] pb-8">
						<?php if ( get_sub_field( 'offer-icon' ) ) : ?>
							<img src="<?php the_sub_field( 'offer-icon' ); ?>" />
						<?php endif ?>
					</div>
					<h3 class="hover:text-primary-100"><?php the_sub_field( 'offer-box-title' ); ?></h3>
						<p class="text-sm leading-[21px] tracking-[-0.14px] pt-3"><?php the_sub_field( 'offer-box-text', false, false ); ?></p>
						<div class="flex items-end mt-16">
							<button class="btn-arrow" href="<?php the_sub_field( 'offer-box-btn-link' ); ?>">
								<span><?php the_sub_field( 'offer-box-btn-title' ); ?></span>
								<span class=" ml-[10px]">
									<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.99528 -1.20755e-06L7.09959 0.895696L13.5769 7.36358L-7.5502e-07 7.36358L-6.43745e-07 8.63642L13.5675 8.63642L7.09959 15.1043L7.99529 16L16 7.99529L7.99528 -1.20755e-06Z" fill="#1B5B31"/>
									</svg>
								</span>
							</button>
						</div>
				</div>
			</a>
			<?php endwhile; ?>
			<?php else : ?>
				<?php // Brak treści ?>
			<?php endif; ?>
		</div>
	</div>
</section>
<!--END OFFER -->
<!--START ABOUT -->
<section class="relative bg-primary-100">
	<div class="container mx-auto items-center flex flex-col md:flex-row min-h-[720px] justify-end p-0 md:px-4">
		<div class="w-full md:w-1/2 min-h-[600px] md:h-full pr-16 relative md:absolute left-0 top-0 bg-cover bg-no-repeat" style="background-image: url(<?php the_field( 'about-img' ); ?>);"></div>
		<div class="w-full md:w-1/2 h-full relative px-4 md:pl-14 lg:pl-24 py-[138px] bg-primary-100">
			<h4 class="text-primary-300"><?php the_field( 'about-subtitle' ); ?></h4>
			<h2 class="pt-4 pb-10 max-w-[100%] md:max-w-[55%] lg:max-w-[45%] text-primary-300"><?php the_field( 'about-title' ); ?> <span class="italic"><?php the_field( 'about-title-italic' ); ?></span></h2>
				<p class="text-primary-300 pb-20"><?php the_field( 'about-text', false, false ); ?></p>
					<a class="btn-transparent border-primary-300 text-primary-300 hover:bg-primary-400" href="<?php the_field( 'about-btn-link' ); ?>">
						<span><?php the_field( 'about-btn-title' ); ?></span>
						<span class="ml-2">
							<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M16 8.49529L15.1043 7.59959L8.63642 14.0769L8.63642 0.5L7.36358 0.5L7.36358 14.0675L0.895699 7.59959L9.54553e-08 8.49529L8.00471 16.5L16 8.49529Z" fill="#F5F0EC"/>
							</svg>
						</span>
					</a>
		</div>
	</div>
</section>
<!--END ABOUT -->
<!--START GALLERY -->
<section class="bg-primary-200">
	<div class="container pt-[120px]">
		<h4 class="text-primary-100"><?php the_field( 'gallery-subtitle' ); ?></h4>
		<h2 class="pt-4 pb-24"><?php the_field( 'gallery-title' ); ?> <span class="italic"><?php the_field( 'gallery-title-italic' ); ?></span></h2>
	</div>
		<div id="macy-container" class="gallery pb-5">
		<?php $gallery_urls = get_field( 'gallery' ); ?>
			<?php if ( $gallery_urls ) :  ?>
				<?php foreach ( $gallery_urls as $gallery_url ): ?>
					<img class="cursor-pointer" data-fancybox="gallery" src="<?php echo esc_url( $gallery_url ); ?>" />
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
		<div class="container text-center">
		<button id="gallery-btn" class="btn-transparent relative top-[-89.5px] z-20 border-primary-100 text-primary-100 hover:bg-primary-400" type="button">
				<span>Rozwiń</span>
				<span class="ml-2">
					<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M16 8.49529L15.1043 7.59959L8.63642 14.0769L8.63642 0.5L7.36358 0.5L7.36358 14.0675L0.895699 7.59959L9.54553e-08 8.49529L8.00471 16.5L16 8.49529Z" fill="#1B5B31"/>
					</svg>
				</span>
			</button>
		</div>
</section>
<!--END GALLERY -->
<!--START INSTAGRAM_BLOCK -->
<section class="py-0 lg:py-[60px]">
	<div class="container max-w-[1040px] mx-auto flex flex-col md:flex-row bg-primary-100 text-primary-300 py-[120px] px-4 lg:px-[110px]">
		<div class="w-full md:w-4/5 pr-0 md:pr-4 pt-3">
			<h2 class="text-3xl lg:text-[40px] leading-[48px]"><?php the_field( 'instagram-title' ); ?> <span class="italic"><?php the_field( 'instagram-title-italic' ); ?></span></h2>
		</div>
		<div class="w-full md:w-1/5 pt-12 md:pt-0">
			<p class="pb-6"><?php the_field( 'instagram-text', false, false ); ?></p>
			<a class="btn pt-[10px] pb-3 px-6 bg-primary-300 text-primary-100 rounded-[200px] font-['Inter'] hover:bg-transparent border border-primary-300 hover:text-primary-300 transition-all" href="<?php the_field( 'instagram-btn-link' ); ?>" target="_blank"><?php the_field( 'instagram-btn-title' ); ?></a>
		</div>
	</div>
</section>
<!--END INSTAGRAM_BLOCK -->

<?php
get_footer();
