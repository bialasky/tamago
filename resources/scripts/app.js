import domReady from '@roots/sage/client/dom-ready';
import Splide from '@splidejs/splide';

/**
 * Application entrypoint
 */
domReady(async () => {
  new Splide('.splide', {
    type: 'loop',
    perPage: 3,
    gap: '1rem', // Adjust the gap size as needed
    breakpoints: {
        640: {
            perPage: 1,
        },
    },
  }).mount();

});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
