/* resources/js/app.js */
import $ from 'jquery';
window.$ = window.jQuery = $;
import counterUp from 'counterup2'
// resources/js/app.js
import Splide from '@splidejs/splide';
import '@splidejs/splide/css';


$(window).ready(function () {
    // Preloader
    $('.loader').fadeOut();
    $('.loader-mask').delay(350).fadeOut('slow');

});

