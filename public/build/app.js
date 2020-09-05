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
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var swiper__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! swiper */ "./node_modules/swiper/js/swiper.esm.bundle.js");
/* harmony import */ var _scrolling__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./scrolling */ "./assets/js/scrolling.js");
/* harmony import */ var _scrolling__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_scrolling__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _background__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./background */ "./assets/js/background.js");
/* harmony import */ var _background__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_background__WEBPACK_IMPORTED_MODULE_4__);
/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */
// any CSS you import will output into a single css file (app.css in this case)
 // Need jQuery? Install it with "yarn add jquery", then uncomment to import it.



__webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.js");

jquery__WEBPACK_IMPORTED_MODULE_1___default()(document).ready(function () {
  jquery__WEBPACK_IMPORTED_MODULE_1___default()('[data-toggle="popover"]').popover();
});

var swiper = new swiper__WEBPACK_IMPORTED_MODULE_2__["default"]('.swiper-container', {
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


jquery__WEBPACK_IMPORTED_MODULE_1___default()('#myModal').modal('hide');

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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvYXBwLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9iYWNrZ3JvdW5kLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9zY3JvbGxpbmcuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3Njc3MvbWFpbi5zY3NzIl0sIm5hbWVzIjpbInJlcXVpcmUiLCIkIiwiZG9jdW1lbnQiLCJyZWFkeSIsInBvcG92ZXIiLCJzd2lwZXIiLCJTd2lwZXIiLCJsb29wIiwicGFnaW5hdGlvbiIsImVsIiwibmF2aWdhdGlvbiIsIm5leHRFbCIsInByZXZFbCIsImtleWJvYXJkIiwiZW5hYmxlZCIsIm9ubHlJblZpZXdwb3J0IiwibW9kYWwiLCJ1cGRhdGVCbGFja0NsYXNzIiwid2luZG93Iiwic2Nyb2xsVG9wIiwid2lkdGgiLCJhZGRDbGFzcyIsInJlbW92ZUNsYXNzIiwib24iLCJlIiwiYW5pbWF0ZSIsImF0dHIiLCJvZmZzZXQiLCJ0b3AiLCJzY3JvbGwiLCJmYWRlSW4iLCJmYWRlT3V0Il0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7O0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTs7Ozs7O0FBT0E7Q0FLQTs7QUFDQTs7QUFFQUEsbUJBQU8sQ0FBQyxnRUFBRCxDQUFQOztBQUVBQyw2Q0FBQyxDQUFDQyxRQUFELENBQUQsQ0FBWUMsS0FBWixDQUFrQixZQUFXO0FBQ3pCRiwrQ0FBQyxDQUFDLHlCQUFELENBQUQsQ0FBNkJHLE9BQTdCO0FBQ0gsQ0FGRDtBQUlBO0FBRUEsSUFBSUMsTUFBTSxHQUFHLElBQUlDLDhDQUFKLENBQVcsbUJBQVgsRUFBZ0M7QUFDM0NDLE1BQUksRUFBRSxJQURxQztBQUUzQ0MsWUFBVSxFQUFFO0FBQ05DLE1BQUUsRUFBRTtBQURFLEdBRitCO0FBS3pDQyxZQUFVLEVBQUU7QUFDVkMsVUFBTSxFQUFFLHFCQURFO0FBRVZDLFVBQU0sRUFBRTtBQUZFLEdBTDZCO0FBU3pDQyxVQUFRLEVBQUU7QUFDUkMsV0FBTyxFQUFFLElBREQ7QUFFUkMsa0JBQWMsRUFBRTtBQUZSO0FBVCtCLENBQWhDLENBQWI7QUFnQkE7QUFDQTtBQUVBZCw2Q0FBQyxDQUFDLFVBQUQsQ0FBRCxDQUFjZSxLQUFkLENBQW9CLE1BQXBCLEU7Ozs7Ozs7Ozs7O0FDMUNBLGtEQUFTQyxnQkFBVCxHQUE0QjtBQUN4QixNQUFJaEIsQ0FBQyxDQUFDaUIsTUFBRCxDQUFELENBQVVDLFNBQVYsTUFBeUJsQixDQUFDLENBQUNpQixNQUFELENBQUQsQ0FBVUUsS0FBVixNQUFxQixHQUFsRCxFQUF1RDtBQUNuRG5CLEtBQUMsQ0FBQyxTQUFELENBQUQsQ0FBYW9CLFFBQWIsQ0FBc0IsSUFBdEI7QUFDSCxHQUZELE1BRU87QUFDSHBCLEtBQUMsQ0FBQyxTQUFELENBQUQsQ0FBYXFCLFdBQWIsQ0FBeUIsSUFBekI7QUFDSDtBQUNKOztBQUFBO0FBRURyQixDQUFDLENBQUNpQixNQUFELENBQUQsQ0FBVUssRUFBVixDQUFhLFFBQWIsRUFBdUIsWUFBWTtBQUMvQk4sa0JBQWdCO0FBQ25CLENBRkQ7QUFHQUEsZ0JBQWdCLEc7Ozs7Ozs7Ozs7OztBQ1hoQjtBQUVBaEIsQ0FBQyxDQUFDLHdCQUFELENBQUQsQ0FBNEJzQixFQUE1QixDQUErQixPQUEvQixFQUF3QyxVQUFTQyxDQUFULEVBQVk7QUFDaEQ7QUFFRXZCLEdBQUMsQ0FBQyxZQUFELENBQUQsQ0FBZ0J3QixPQUFoQixDQUNFO0FBQ0VOLGFBQVMsRUFBRWxCLENBQUMsQ0FBQ0EsQ0FBQyxDQUFDLElBQUQsQ0FBRCxDQUFReUIsSUFBUixDQUFhLE1BQWIsQ0FBRCxDQUFELENBQXdCQyxNQUF4QixHQUFpQ0MsR0FBakMsR0FBc0M7QUFEbkQsR0FERixFQUlFLEdBSkYsRUFLRSxRQUxGO0FBT0QsQ0FWTDtBQVlJM0IsQ0FBQyxDQUFDaUIsTUFBRCxDQUFELENBQVVXLE1BQVYsQ0FBaUIsWUFBWTtBQUMzQixNQUFJNUIsQ0FBQyxDQUFDLElBQUQsQ0FBRCxDQUFRa0IsU0FBUixLQUFzQixHQUExQixFQUErQmxCLENBQUMsQ0FBQyxXQUFELENBQUQsQ0FBZTZCLE1BQWYsR0FBL0IsS0FDSzdCLENBQUMsQ0FBQyxXQUFELENBQUQsQ0FBZThCLE9BQWY7QUFDUixDQUhDLEU7Ozs7Ozs7Ozs7OztBQ2RKLHVDIiwiZmlsZSI6ImFwcC5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8qXG4gKiBXZWxjb21lIHRvIHlvdXIgYXBwJ3MgbWFpbiBKYXZhU2NyaXB0IGZpbGUhXG4gKlxuICogV2UgcmVjb21tZW5kIGluY2x1ZGluZyB0aGUgYnVpbHQgdmVyc2lvbiBvZiB0aGlzIEphdmFTY3JpcHQgZmlsZVxuICogKGFuZCBpdHMgQ1NTIGZpbGUpIGluIHlvdXIgYmFzZSBsYXlvdXQgKGJhc2UuaHRtbC50d2lnKS5cbiAqL1xuXG4vLyBhbnkgQ1NTIHlvdSBpbXBvcnQgd2lsbCBvdXRwdXQgaW50byBhIHNpbmdsZSBjc3MgZmlsZSAoYXBwLmNzcyBpbiB0aGlzIGNhc2UpXG5cbmltcG9ydCAnLi4vc2Nzcy9tYWluLnNjc3MnO1xuXG5cbi8vIE5lZWQgalF1ZXJ5PyBJbnN0YWxsIGl0IHdpdGggXCJ5YXJuIGFkZCBqcXVlcnlcIiwgdGhlbiB1bmNvbW1lbnQgdG8gaW1wb3J0IGl0LlxuaW1wb3J0ICQgZnJvbSAnanF1ZXJ5JztcblxucmVxdWlyZSgnYm9vdHN0cmFwJyk7XG5cbiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCkge1xuICAgICQoJ1tkYXRhLXRvZ2dsZT1cInBvcG92ZXJcIl0nKS5wb3BvdmVyKCk7XG59KTtcbiBcbmltcG9ydCBTd2lwZXIgZnJvbSAnc3dpcGVyJztcblxudmFyIHN3aXBlciA9IG5ldyBTd2lwZXIoJy5zd2lwZXItY29udGFpbmVyJywge1xuICBsb29wOiB0cnVlLCAgXG4gIHBhZ2luYXRpb246IHtcbiAgICAgICAgZWw6ICcuc3dpcGVyLXBhZ2luYXRpb24nLFxuICAgICAgfSxcbiAgICBuYXZpZ2F0aW9uOiB7XG4gICAgICBuZXh0RWw6ICcuc3dpcGVyLWJ1dHRvbi1uZXh0JyxcbiAgICAgIHByZXZFbDogJy5zd2lwZXItYnV0dG9uLXByZXYnLFxuICAgIH0sXG4gICAga2V5Ym9hcmQ6IHtcbiAgICAgIGVuYWJsZWQ6IHRydWUsXG4gICAgICBvbmx5SW5WaWV3cG9ydDogZmFsc2UsXG4gICAgfSxcbiAgfSk7XG5cbiAgXG5pbXBvcnQgJy4vc2Nyb2xsaW5nJztcbmltcG9ydCAnLi9iYWNrZ3JvdW5kJztcblxuJCgnI215TW9kYWwnKS5tb2RhbCgnaGlkZScpXG5cbiIsImZ1bmN0aW9uIHVwZGF0ZUJsYWNrQ2xhc3MoKSB7XG4gICAgaWYgKCQod2luZG93KS5zY3JvbGxUb3AoKSB8fCAkKHdpbmRvdykud2lkdGgoKSA8PSA4MDApIHtcbiAgICAgICAgJCgnLm5hdmJhcicpLmFkZENsYXNzKCdiZycpO1xuICAgIH0gZWxzZSB7XG4gICAgICAgICQoJy5uYXZiYXInKS5yZW1vdmVDbGFzcygnYmcnKTtcbiAgICB9XG59O1xuXG4kKHdpbmRvdykub24oXCJzY3JvbGxcIiwgZnVuY3Rpb24gKCkge1xuICAgIHVwZGF0ZUJsYWNrQ2xhc3MoKTtcbn0pO1xudXBkYXRlQmxhY2tDbGFzcygpOyIsIi8vU21vb3RoIHNjcm9sbGluZ1xuXG4kKCcubmF2YmFyIGEsIC5oNC1saW5rcyBhJykub24oJ2NsaWNrJywgZnVuY3Rpb24oZSkge1xuICAgIC8vIGUucHJldmVudERlZmF1bHQoKVxuICAgIFxuICAgICAgJCgnaHRtbCwgYm9keScpLmFuaW1hdGUoXG4gICAgICAgIHtcbiAgICAgICAgICBzY3JvbGxUb3A6ICQoJCh0aGlzKS5hdHRyKCdocmVmJykpLm9mZnNldCgpLnRvcCAtNTAsXG4gICAgICAgIH0sXG4gICAgICAgIDUwMCxcbiAgICAgICAgJ2xpbmVhcidcbiAgICAgIClcbiAgICB9KTtcbiAgXG4gICAgJCh3aW5kb3cpLnNjcm9sbChmdW5jdGlvbiAoKSB7XG4gICAgICBpZiAoJCh0aGlzKS5zY3JvbGxUb3AoKSA+IDMwMCkgJCgnLnNjcm9sbHVwJykuZmFkZUluKCk7XG4gICAgICBlbHNlICQoJy5zY3JvbGx1cCcpLmZhZGVPdXQoKTtcbiAgfSk7XG4iLCIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW4iXSwic291cmNlUm9vdCI6IiJ9