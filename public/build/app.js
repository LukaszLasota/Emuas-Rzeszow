(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["app"],{

/***/ "./assets/js/app.js":
/*!**************************!*\
  !*** ./assets/js/app.js ***!
  \**************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _scss_main_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../scss/main.scss */ "./assets/scss/main.scss");
/* harmony import */ var _scss_main_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_scss_main_scss__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var lightbox2_dist_css_lightbox_min_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! lightbox2/dist/css/lightbox.min.css */ "./node_modules/lightbox2/dist/css/lightbox.min.css");
/* harmony import */ var lightbox2_dist_css_lightbox_min_css__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(lightbox2_dist_css_lightbox_min_css__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var lightbox2__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! lightbox2 */ "./node_modules/lightbox2/dist/js/lightbox.js");
/* harmony import */ var lightbox2__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(lightbox2__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var swiper__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! swiper */ "./node_modules/swiper/js/swiper.esm.bundle.js");
/* harmony import */ var _scrolling__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./scrolling */ "./assets/js/scrolling.js");
/* harmony import */ var _scrolling__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_scrolling__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var _background__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./background */ "./assets/js/background.js");
/* harmony import */ var _background__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(_background__WEBPACK_IMPORTED_MODULE_6__);
/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */
// any CSS you import will output into a single css file (app.css in this case)

 // Need jQuery? Install it with "yarn add jquery", then uncomment to import it.




__webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.js");

jquery__WEBPACK_IMPORTED_MODULE_2___default()(document).ready(function () {
  jquery__WEBPACK_IMPORTED_MODULE_2___default()('[data-toggle="popover"]').popover();
});

var swiper = new swiper__WEBPACK_IMPORTED_MODULE_4__["default"]('.swiper-container', {
  loop: true,
  pagination: {
    el: '.swiper-pagination'
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  },
  keyboard: {
    enabled: true,
    onlyInViewport: false
  }
});


jquery__WEBPACK_IMPORTED_MODULE_2___default()('#myModal').modal('hide');
lightbox.option({
  'resizeDuration': 200,
  'wrapAround': true
});

/***/ }),

/***/ "./assets/js/background.js":
/*!*********************************!*\
  !*** ./assets/js/background.js ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function($) {function updateBlackClass() {
  if ($(window).scrollTop() || $(window).width() <= 800) {
    $('.navbar').addClass('bg');
  } else {
    $('.navbar').removeClass('bg');
  }
}

;
$(window).on("scroll", function () {
  updateBlackClass();
});
updateBlackClass();
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

/***/ }),

/***/ "./assets/js/scrolling.js":
/*!********************************!*\
  !*** ./assets/js/scrolling.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function($) {//Smooth scrolling
$('.navbar a, .h4-links a').on('click', function (e) {
  // e.preventDefault()
  $('html, body').animate({
    scrollTop: $($(this).attr('href')).offset().top - 50
  }, 500, 'linear');
});
$(window).scroll(function () {
  if ($(this).scrollTop() > 300) $('.scrollup').fadeIn();else $('.scrollup').fadeOut();
});
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

/***/ }),

/***/ "./assets/scss/main.scss":
/*!*******************************!*\
  !*** ./assets/scss/main.scss ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ })

},[["./assets/js/app.js","runtime","vendors~app"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvYXBwLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9iYWNrZ3JvdW5kLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9zY3JvbGxpbmcuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3Njc3MvbWFpbi5zY3NzIl0sIm5hbWVzIjpbInJlcXVpcmUiLCIkIiwiZG9jdW1lbnQiLCJyZWFkeSIsInBvcG92ZXIiLCJzd2lwZXIiLCJTd2lwZXIiLCJsb29wIiwicGFnaW5hdGlvbiIsImVsIiwibmF2aWdhdGlvbiIsIm5leHRFbCIsInByZXZFbCIsImtleWJvYXJkIiwiZW5hYmxlZCIsIm9ubHlJblZpZXdwb3J0IiwibW9kYWwiLCJsaWdodGJveCIsIm9wdGlvbiIsInVwZGF0ZUJsYWNrQ2xhc3MiLCJ3aW5kb3ciLCJzY3JvbGxUb3AiLCJ3aWR0aCIsImFkZENsYXNzIiwicmVtb3ZlQ2xhc3MiLCJvbiIsImUiLCJhbmltYXRlIiwiYXR0ciIsIm9mZnNldCIsInRvcCIsInNjcm9sbCIsImZhZGVJbiIsImZhZGVPdXQiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7Ozs7OztBQU9BO0FBRUE7Q0FJQTs7QUFDQTtBQUVBOztBQUVBQSxtQkFBTyxDQUFDLGdFQUFELENBQVA7O0FBRUFDLDZDQUFDLENBQUNDLFFBQUQsQ0FBRCxDQUFZQyxLQUFaLENBQWtCLFlBQVc7QUFDekJGLCtDQUFDLENBQUMseUJBQUQsQ0FBRCxDQUE2QkcsT0FBN0I7QUFDSCxDQUZEO0FBSUE7QUFFQSxJQUFJQyxNQUFNLEdBQUcsSUFBSUMsOENBQUosQ0FBVyxtQkFBWCxFQUFnQztBQUMzQ0MsTUFBSSxFQUFFLElBRHFDO0FBRTNDQyxZQUFVLEVBQUU7QUFDTkMsTUFBRSxFQUFFO0FBREUsR0FGK0I7QUFLekNDLFlBQVUsRUFBRTtBQUNWQyxVQUFNLEVBQUUscUJBREU7QUFFVkMsVUFBTSxFQUFFO0FBRkUsR0FMNkI7QUFTekNDLFVBQVEsRUFBRTtBQUNSQyxXQUFPLEVBQUUsSUFERDtBQUVSQyxrQkFBYyxFQUFFO0FBRlI7QUFUK0IsQ0FBaEMsQ0FBYjtBQWdCQTtBQUNBO0FBRUFkLDZDQUFDLENBQUMsVUFBRCxDQUFELENBQWNlLEtBQWQsQ0FBb0IsTUFBcEI7QUFHQUMsUUFBUSxDQUFDQyxNQUFULENBQWdCO0FBQ2Qsb0JBQWtCLEdBREo7QUFFZCxnQkFBYztBQUZBLENBQWhCLEU7Ozs7Ozs7Ozs7O0FDaERBLGtEQUFTQyxnQkFBVCxHQUE0QjtBQUN4QixNQUFJbEIsQ0FBQyxDQUFDbUIsTUFBRCxDQUFELENBQVVDLFNBQVYsTUFBeUJwQixDQUFDLENBQUNtQixNQUFELENBQUQsQ0FBVUUsS0FBVixNQUFxQixHQUFsRCxFQUF1RDtBQUNuRHJCLEtBQUMsQ0FBQyxTQUFELENBQUQsQ0FBYXNCLFFBQWIsQ0FBc0IsSUFBdEI7QUFDSCxHQUZELE1BRU87QUFDSHRCLEtBQUMsQ0FBQyxTQUFELENBQUQsQ0FBYXVCLFdBQWIsQ0FBeUIsSUFBekI7QUFDSDtBQUNKOztBQUFBO0FBRUR2QixDQUFDLENBQUNtQixNQUFELENBQUQsQ0FBVUssRUFBVixDQUFhLFFBQWIsRUFBdUIsWUFBWTtBQUMvQk4sa0JBQWdCO0FBQ25CLENBRkQ7QUFHQUEsZ0JBQWdCLEc7Ozs7Ozs7Ozs7OztBQ1hoQjtBQUVBbEIsQ0FBQyxDQUFDLHdCQUFELENBQUQsQ0FBNEJ3QixFQUE1QixDQUErQixPQUEvQixFQUF3QyxVQUFTQyxDQUFULEVBQVk7QUFDaEQ7QUFFRXpCLEdBQUMsQ0FBQyxZQUFELENBQUQsQ0FBZ0IwQixPQUFoQixDQUNFO0FBQ0VOLGFBQVMsRUFBRXBCLENBQUMsQ0FBQ0EsQ0FBQyxDQUFDLElBQUQsQ0FBRCxDQUFRMkIsSUFBUixDQUFhLE1BQWIsQ0FBRCxDQUFELENBQXdCQyxNQUF4QixHQUFpQ0MsR0FBakMsR0FBc0M7QUFEbkQsR0FERixFQUlFLEdBSkYsRUFLRSxRQUxGO0FBT0QsQ0FWTDtBQVlJN0IsQ0FBQyxDQUFDbUIsTUFBRCxDQUFELENBQVVXLE1BQVYsQ0FBaUIsWUFBWTtBQUMzQixNQUFJOUIsQ0FBQyxDQUFDLElBQUQsQ0FBRCxDQUFRb0IsU0FBUixLQUFzQixHQUExQixFQUErQnBCLENBQUMsQ0FBQyxXQUFELENBQUQsQ0FBZStCLE1BQWYsR0FBL0IsS0FDSy9CLENBQUMsQ0FBQyxXQUFELENBQUQsQ0FBZWdDLE9BQWY7QUFDUixDQUhDLEU7Ozs7Ozs7Ozs7OztBQ2RKLHVDIiwiZmlsZSI6ImFwcC5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8qXG4gKiBXZWxjb21lIHRvIHlvdXIgYXBwJ3MgbWFpbiBKYXZhU2NyaXB0IGZpbGUhXG4gKlxuICogV2UgcmVjb21tZW5kIGluY2x1ZGluZyB0aGUgYnVpbHQgdmVyc2lvbiBvZiB0aGlzIEphdmFTY3JpcHQgZmlsZVxuICogKGFuZCBpdHMgQ1NTIGZpbGUpIGluIHlvdXIgYmFzZSBsYXlvdXQgKGJhc2UuaHRtbC50d2lnKS5cbiAqL1xuXG4vLyBhbnkgQ1NTIHlvdSBpbXBvcnQgd2lsbCBvdXRwdXQgaW50byBhIHNpbmdsZSBjc3MgZmlsZSAoYXBwLmNzcyBpbiB0aGlzIGNhc2UpXG5cbmltcG9ydCAnLi4vc2Nzcy9tYWluLnNjc3MnO1xuXG5pbXBvcnQgJ2xpZ2h0Ym94Mi9kaXN0L2Nzcy9saWdodGJveC5taW4uY3NzJztcblxuLy8gTmVlZCBqUXVlcnk/IEluc3RhbGwgaXQgd2l0aCBcInlhcm4gYWRkIGpxdWVyeVwiLCB0aGVuIHVuY29tbWVudCB0byBpbXBvcnQgaXQuXG5pbXBvcnQgJCBmcm9tICdqcXVlcnknO1xuXG5pbXBvcnQgJ2xpZ2h0Ym94Mic7XG5cbnJlcXVpcmUoJ2Jvb3RzdHJhcCcpO1xuXG4kKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpIHtcbiAgICAkKCdbZGF0YS10b2dnbGU9XCJwb3BvdmVyXCJdJykucG9wb3ZlcigpO1xufSk7XG4gXG5pbXBvcnQgU3dpcGVyIGZyb20gJ3N3aXBlcic7XG5cbnZhciBzd2lwZXIgPSBuZXcgU3dpcGVyKCcuc3dpcGVyLWNvbnRhaW5lcicsIHtcbiAgbG9vcDogdHJ1ZSwgIFxuICBwYWdpbmF0aW9uOiB7XG4gICAgICAgIGVsOiAnLnN3aXBlci1wYWdpbmF0aW9uJyxcbiAgICAgIH0sXG4gICAgbmF2aWdhdGlvbjoge1xuICAgICAgbmV4dEVsOiAnLnN3aXBlci1idXR0b24tbmV4dCcsXG4gICAgICBwcmV2RWw6ICcuc3dpcGVyLWJ1dHRvbi1wcmV2JyxcbiAgICB9LFxuICAgIGtleWJvYXJkOiB7XG4gICAgICBlbmFibGVkOiB0cnVlLFxuICAgICAgb25seUluVmlld3BvcnQ6IGZhbHNlLFxuICAgIH0sXG4gIH0pO1xuXG4gIFxuaW1wb3J0ICcuL3Njcm9sbGluZyc7XG5pbXBvcnQgJy4vYmFja2dyb3VuZCc7XG5cbiQoJyNteU1vZGFsJykubW9kYWwoJ2hpZGUnKVxuXG5cbmxpZ2h0Ym94Lm9wdGlvbih7XG4gICdyZXNpemVEdXJhdGlvbic6IDIwMCxcbiAgJ3dyYXBBcm91bmQnOiB0cnVlXG59KVxuIiwiZnVuY3Rpb24gdXBkYXRlQmxhY2tDbGFzcygpIHtcbiAgICBpZiAoJCh3aW5kb3cpLnNjcm9sbFRvcCgpIHx8ICQod2luZG93KS53aWR0aCgpIDw9IDgwMCkge1xuICAgICAgICAkKCcubmF2YmFyJykuYWRkQ2xhc3MoJ2JnJyk7XG4gICAgfSBlbHNlIHtcbiAgICAgICAgJCgnLm5hdmJhcicpLnJlbW92ZUNsYXNzKCdiZycpO1xuICAgIH1cbn07XG5cbiQod2luZG93KS5vbihcInNjcm9sbFwiLCBmdW5jdGlvbiAoKSB7XG4gICAgdXBkYXRlQmxhY2tDbGFzcygpO1xufSk7XG51cGRhdGVCbGFja0NsYXNzKCk7IiwiLy9TbW9vdGggc2Nyb2xsaW5nXG5cbiQoJy5uYXZiYXIgYSwgLmg0LWxpbmtzIGEnKS5vbignY2xpY2snLCBmdW5jdGlvbihlKSB7XG4gICAgLy8gZS5wcmV2ZW50RGVmYXVsdCgpXG4gICAgXG4gICAgICAkKCdodG1sLCBib2R5JykuYW5pbWF0ZShcbiAgICAgICAge1xuICAgICAgICAgIHNjcm9sbFRvcDogJCgkKHRoaXMpLmF0dHIoJ2hyZWYnKSkub2Zmc2V0KCkudG9wIC01MCxcbiAgICAgICAgfSxcbiAgICAgICAgNTAwLFxuICAgICAgICAnbGluZWFyJ1xuICAgICAgKVxuICAgIH0pO1xuICBcbiAgICAkKHdpbmRvdykuc2Nyb2xsKGZ1bmN0aW9uICgpIHtcbiAgICAgIGlmICgkKHRoaXMpLnNjcm9sbFRvcCgpID4gMzAwKSAkKCcuc2Nyb2xsdXAnKS5mYWRlSW4oKTtcbiAgICAgIGVsc2UgJCgnLnNjcm9sbHVwJykuZmFkZU91dCgpO1xuICB9KTtcblxuXG5cbiIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpbiJdLCJzb3VyY2VSb290IjoiIn0=