/**
 * The JavaScript code you place here will be processed by esbuild, and the
 * output file will be created at `../theme/js/script.min.js` and enqueued by
 * default in `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

import Macy from 'macy'
import { Fancybox } from "@fancyapps/ui"
import "@fancyapps/ui/dist/fancybox/fancybox.css"

import Swiper, { Navigation } from 'swiper'
import 'swiper/css'
import 'swiper/css/navigation'

//menu
const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
const primaryMenu = document.getElementById('primary-menu');
    mobileMenuToggle.addEventListener('click', () => {
        primaryMenu.classList.toggle('responsive'); // Add or remove class "hidden"
    });

//Search
const searchIcon = document.querySelector('.wp-block-search__button')
const searchInput = document.querySelector('.wp-block-search__input')
	// Show search
	searchIcon.addEventListener('click', function (e) {
		searchInput.classList.toggle('block')
})

//Gallery
Fancybox.bind();

var macy = Macy({
    container: '#macy-container',
    trueOrder: true,
    waitForImages: false,
    margin: 24,
    columns: 3,
    breakAt: {
        1200: 3,
        940: 2,
        520: 1,
        400: 1
    }
});

var imgGallery = document.querySelectorAll('#macy-container img');
var btn = document.querySelector('#gallery-btn');
var curentImg = 9

for (let i = 0; i < imgGallery.length; i++) {
    if (i > 8) {
        imgGallery[i].classList.add('hidden');
    }
}

btn.addEventListener('click', function() {
    for (let i = 0; i < imgGallery.length; i++) {
        imgGallery[i].classList.remove('hidden');
				imgGallery[i].classList.add('z-60');
				macy.recalculate();
    }
    btn.classList.add('hidden');
});


//Slider
const hero = new Swiper('.mySwiper', {
	modules: [Navigation],
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	slidesPerView: 1,
});

