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

Fancybox.bind();

var macy = Macy({
    container: '#macy-container',
    trueOrder: true,
    waitForImages: false,
    margin: 24,
    columns: 3,
    breakAt: {
        1200: 3,
        940: 3,
        520: 2,
        400: 1
    }
});


const hero = new Swiper('.mySwiper', {
	modules: [Navigation],
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	slidesPerView: 1,
});
