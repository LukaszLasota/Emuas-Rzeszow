/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)

import '../scss/main.scss';

import 'lightbox2/dist/css/lightbox.min.css';

// Need jQuery? Install it with "yarn add jquery", then uncomment to import it.
import $ from 'jquery';

import 'lightbox2';

require('bootstrap');

$(document).ready(function() {
    $('[data-toggle="popover"]').popover();
});
 
import Swiper from 'swiper';

var swiper = new Swiper('.swiper-container', {
  loop: true,  
  pagination: {
        el: '.swiper-pagination',
      },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    keyboard: {
      enabled: true,
      onlyInViewport: false,
    },
  });

  
import './scrolling';
import './background';

$('#myModal').modal('hide')


lightbox.option({
  'resizeDuration': 200,
  'wrapAround': true
})
