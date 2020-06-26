(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["app"],{

/***/ "./assets/css/app.css":
/*!****************************!*\
  !*** ./assets/css/app.css ***!
  \****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./assets/js/app.js":
/*!**************************!*\
  !*** ./assets/js/app.js ***!
  \**************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_array_for_each__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.array.for-each */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_for_each__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_for_each__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.date.to-string */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.object.to-string */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_promise__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.promise */ "./node_modules/core-js/modules/es.promise.js");
/* harmony import */ var core_js_modules_es_promise__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_promise__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_web_dom_collections_for_each__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_for_each__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var regenerator_runtime_runtime__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! regenerator-runtime/runtime */ "./node_modules/regenerator-runtime/runtime.js");
/* harmony import */ var regenerator_runtime_runtime__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(regenerator_runtime_runtime__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var _css_app_css__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../css/app.css */ "./assets/css/app.css");
/* harmony import */ var _css_app_css__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(_css_app_css__WEBPACK_IMPORTED_MODULE_6__);







function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }

/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */
// any CSS you import will output into a single css file (app.css in this case)
 // Need jQuery? Install it with "yarn add jquery", then uncomment to import it.
// import $ from 'jquery';

catchData().then(function (response) {
  return console.log('All good, data fetched!');
})["catch"](function (error) {
  console.log(error);
});

function catchData() {
  return _catchData.apply(this, arguments);
}

function _catchData() {
  _catchData = _asyncToGenerator( /*#__PURE__*/regeneratorRuntime.mark(function _callee() {
    var xLabelsDate, yOperationsPlus, yOperationsMinus, yContent, yCategory, response, data;
    return regeneratorRuntime.wrap(function _callee$(_context) {
      while (1) {
        switch (_context.prev = _context.next) {
          case 0:
            xLabelsDate = [];
            yOperationsPlus = [];
            yOperationsMinus = [];
            yContent = [];
            yCategory = [];
            _context.next = 7;
            return fetch('/operationsJsonified');

          case 7:
            response = _context.sent;
            _context.next = 10;
            return response.json();

          case 10:
            data = _context.sent;
            console.log(data);
            data.forEach(function (operation) {
              var amount = operation.amount;

              if (operation.amount > 0) {
                var amountPlus = operation.amount;
                yOperationsPlus.push(amountPlus);
              } else {
                var amountMinus = operation.amount;
                yOperationsMinus.push(amountMinus);
              }

              var UNIXTimestamp = operation.date.timestamp;
              var date = new Date(UNIXTimestamp * 1000);
              var time = date.toDateString();
              xLabelsDate.push(time);
              var category = operation.category.title;
              yCategory.push(category);
              var content = operation.content;
              yContent.push(content);
            });
            return _context.abrupt("return", {
              yOperationsPlus: yOperationsPlus,
              yOperationsMinus: yOperationsMinus,
              xLabelsDate: xLabelsDate,
              yCategory: yCategory,
              yContent: yContent
            });

          case 14:
          case "end":
            return _context.stop();
        }
      }
    }, _callee);
  }));
  return _catchData.apply(this, arguments);
}

createChart();
createChart2();
createChart3();

function createChart() {
  return _createChart.apply(this, arguments);
}

function _createChart() {
  _createChart = _asyncToGenerator( /*#__PURE__*/regeneratorRuntime.mark(function _callee2() {
    var data, ctx, chart;
    return regeneratorRuntime.wrap(function _callee2$(_context2) {
      while (1) {
        switch (_context2.prev = _context2.next) {
          case 0:
            _context2.next = 2;
            return catchData();

          case 2:
            data = _context2.sent;
            ctx = document.getElementById('myChart').getContext('2d');
            chart = new Chart(ctx, {
              type: 'line',
              data: {
                labels: data.xLabelsDate,
                datasets: [{
                  label: "Positive amount",
                  fill: false,
                  borderColor: 'rgba(255, 0, 0, .7)',
                  data: data.yOperationsMinus
                }, {
                  label: "Positive amount",
                  fill: false,
                  borderColor: 'rgba(50, 205, 50, .7)',
                  data: data.yOperationsPlus
                }]
              },
              options: {}
            });

          case 5:
          case "end":
            return _context2.stop();
        }
      }
    }, _callee2);
  }));
  return _createChart.apply(this, arguments);
}

function createChart2() {
  return _createChart2.apply(this, arguments);
}

function _createChart2() {
  _createChart2 = _asyncToGenerator( /*#__PURE__*/regeneratorRuntime.mark(function _callee3() {
    var data, ctx, chart;
    return regeneratorRuntime.wrap(function _callee3$(_context3) {
      while (1) {
        switch (_context3.prev = _context3.next) {
          case 0:
            _context3.next = 2;
            return catchData();

          case 2:
            data = _context3.sent;
            ctx = document.getElementById('myChart2').getContext('2d');
            chart = new Chart(ctx, {
              type: 'bar',
              data: {
                labels: data.xLabelsDate,
                datasets: [{
                  label: "Positive amount",
                  backgroundColor: 'rgba(255, 0, 0, .7)',
                  data: data.yOperationsMinus
                }, {
                  label: "Positive amount",
                  backgroundColor: 'rgba(50, 205, 50, .7)',
                  data: data.yOperationsPlus
                }]
              },
              options: {}
            });

          case 5:
          case "end":
            return _context3.stop();
        }
      }
    }, _callee3);
  }));
  return _createChart2.apply(this, arguments);
}

function createChart3() {
  return _createChart3.apply(this, arguments);
}

function _createChart3() {
  _createChart3 = _asyncToGenerator( /*#__PURE__*/regeneratorRuntime.mark(function _callee4() {
    var data, ctx, myPieChart;
    return regeneratorRuntime.wrap(function _callee4$(_context4) {
      while (1) {
        switch (_context4.prev = _context4.next) {
          case 0:
            _context4.next = 2;
            return catchData();

          case 2:
            data = _context4.sent;
            ctx = document.getElementById("myChart3").getContext('2d');
            myPieChart = new Chart(ctx, {
              data: {
                datasets: [{
                  data: data.yOperationsMinus,
                  backgroundColor: ['rgb(50, 205, 50)', 'rgb(255, 0, 0)', 'rgb(238,188,188)', 'rgb(238,222,171)', 'rgb(200,236,181)', 'rgb(188,194,242', 'rgb(232,182,238)']
                }],
                labels: data.yCategory
              },
              type: 'doughnut'
            });

          case 5:
          case "end":
            return _context4.stop();
        }
      }
    }, _callee4);
  }));
  return _createChart3.apply(this, arguments);
}

/***/ })

},[["./assets/js/app.js","runtime","vendors~app"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvY3NzL2FwcC5jc3MiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2FwcC5qcyJdLCJuYW1lcyI6WyJjYXRjaERhdGEiLCJ0aGVuIiwicmVzcG9uc2UiLCJjb25zb2xlIiwibG9nIiwiZXJyb3IiLCJ4TGFiZWxzRGF0ZSIsInlPcGVyYXRpb25zUGx1cyIsInlPcGVyYXRpb25zTWludXMiLCJ5Q29udGVudCIsInlDYXRlZ29yeSIsImZldGNoIiwianNvbiIsImRhdGEiLCJmb3JFYWNoIiwib3BlcmF0aW9uIiwiYW1vdW50IiwiYW1vdW50UGx1cyIsInB1c2giLCJhbW91bnRNaW51cyIsIlVOSVhUaW1lc3RhbXAiLCJkYXRlIiwidGltZXN0YW1wIiwiRGF0ZSIsInRpbWUiLCJ0b0RhdGVTdHJpbmciLCJjYXRlZ29yeSIsInRpdGxlIiwiY29udGVudCIsImNyZWF0ZUNoYXJ0IiwiY3JlYXRlQ2hhcnQyIiwiY3JlYXRlQ2hhcnQzIiwiY3R4IiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50QnlJZCIsImdldENvbnRleHQiLCJjaGFydCIsIkNoYXJ0IiwidHlwZSIsImxhYmVscyIsImRhdGFzZXRzIiwibGFiZWwiLCJmaWxsIiwiYm9yZGVyQ29sb3IiLCJvcHRpb25zIiwiYmFja2dyb3VuZENvbG9yIiwibXlQaWVDaGFydCJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7O0FBQUEsdUM7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7O0FDQUE7Ozs7OztBQU9BO0NBR0E7QUFDQTs7QUFFQUEsU0FBUyxHQUFHQyxJQUFaLENBQWlCLFVBQUFDLFFBQVE7QUFBQSxTQUFJQyxPQUFPLENBQUNDLEdBQVIsQ0FBWSx5QkFBWixDQUFKO0FBQUEsQ0FBekIsV0FBMkUsVUFBQUMsS0FBSyxFQUFJO0FBQ2hGRixTQUFPLENBQUNDLEdBQVIsQ0FBWUMsS0FBWjtBQUNILENBRkQ7O1NBSWVMLFM7Ozs7O3VFQUFmO0FBQUE7QUFBQTtBQUFBO0FB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YixrQkFEYSxFQUViLGdCQUZhLEVBR2Isa0JBSGEsRUFJYixrQkFKYSxFQUtiLGtCQUxhLEVBTWIsaUJBTmEsRUFPYixrQkFQYTtBQUZyQixpQkFETSxDQURSO0FBZ0JGTixzQkFBTSxFQUFFMUIsSUFBSSxDQUFDSDtBQWhCWCxlQURzQjtBQW9CNUI0QixrQkFBSSxFQUFFO0FBcEJzQixhQUFmLENBSnJCOztBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBLEciLCJmaWxlIjoiYXBwLmpzIiwic291cmNlc0NvbnRlbnQiOlsiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luIiwiLypcbiAqIFdlbGNvbWUgdG8geW91ciBhcHAncyBtYWluIEphdmFTY3JpcHQgZmlsZSFcbiAqXG4gKiBXZSByZWNvbW1lbmQgaW5jbHVkaW5nIHRoZSBidWlsdCB2ZXJzaW9uIG9mIHRoaXMgSmF2YVNjcmlwdCBmaWxlXG4gKiAoYW5kIGl0cyBDU1MgZmlsZSkgaW4geW91ciBiYXNlIGxheW91dCAoYmFzZS5odG1sLnR3aWcpLlxuICovXG5cbi8vIGFueSBDU1MgeW91IGltcG9ydCB3aWxsIG91dHB1dCBpbnRvIGEgc2luZ2xlIGNzcyBmaWxlIChhcHAuY3NzIGluIHRoaXMgY2FzZSlcbmltcG9ydCAnLi4vY3NzL2FwcC5jc3MnO1xuXG4vLyBOZWVkIGpRdWVyeT8gSW5zdGFsbCBpdCB3aXRoIFwieWFybiBhZGQganF1ZXJ5XCIsIHRoZW4gdW5jb21tZW50IHRvIGltcG9ydCBpdC5cbi8vIGltcG9ydCAkIGZyb20gJ2pxdWVyeSc7XG5cbmNhdGNoRGF0YSgpLnRoZW4ocmVzcG9uc2UgPT4gY29uc29sZS5sb2coJ0FsbCBnb29kLCBkYXRhIGZldGNoZWQhJykpLmNhdGNoKGVycm9yID0+IHtcbiAgICBjb25zb2xlLmxvZyhlcnJvcik7XG59KVxuXG5hc3luYyBmdW5jdGlvbiBjYXRjaERhdGEoKSB7XG5cbiAgICBjb25zdCB4TGFiZWxzRGF0ZSA9IFtdO1xuICAgIGNvbnN0IHlPcGVyYXRpb25zUGx1cyA9IFtdO1xuICAgIGNvbnN0IHlPcGVyYXRpb25zTWludXMgPSBbXTtcbiAgICBjb25zdCB5Q29udGVudCA9IFtdO1xuICAgIGNvbnN0IHlDYXRlZ29yeSA9IFtdO1xuXG4gICAgY29uc3QgcmVzcG9uc2UgPSBhd2FpdCBmZXRjaCgnL29wZXJhdGlvbnNKc29uaWZpZWQnKTtcbiAgICBjb25zdCBkYXRhID0gYXdhaXQgcmVzcG9uc2UuanNvbigpO1xuICAgIGNvbnNvbGUubG9nKGRhdGEpO1xuXG4gICAgZGF0YS5mb3JFYWNoKG9wZXJhdGlvbiA9PiB7XG4gICAgICAgIGNvbnN0IGFtb3VudCA9IG9wZXJhdGlvbi5hbW91bnQ7XG4gICAgICAgIGlmIChvcGVyYXRpb24uYW1vdW50ID4gMCkge1xuICAgICAgICAgICAgY29uc3QgYW1vdW50UGx1cyA9IG9wZXJhdGlvbi5hbW91bnRcblxuICAgICAgICAgICAgeU9wZXJhdGlvbnNQbHVzLnB1c2goYW1vdW50UGx1cyk7XG5cbiAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgIGNvbnN0IGFtb3VudE1pbnVzID0gb3BlcmF0aW9uLmFtb3VudFxuICAgICAgICAgICAgeU9wZXJhdGlvbnNNaW51cy5wdXNoKGFtb3VudE1pbnVzKTtcblxuICAgICAgICB9XG5cbiAgICAgICAgY29uc3QgVU5JWFRpbWVzdGFtcCA9IG9wZXJhdGlvbi5kYXRlLnRpbWVzdGFtcDtcbiAgICAgICAgY29uc3QgZGF0ZSA9IG5ldyBEYXRlKFVOSVhUaW1lc3RhbXAgKiAxMDAwKTtcbiAgICAgICAgY29uc3QgdGltZSA9IGRhdGUudG9EYXRlU3RyaW5nKCk7XG4gICAgICAgIHhMYWJlbHNEYXRlLnB1c2godGltZSk7XG5cbiAgICAgICAgY29uc3QgY2F0ZWdvcnkgPSBvcGVyYXRpb24uY2F0ZWdvcnkudGl0bGU7XG4gICAgICAgIHlDYXRlZ29yeS5wdXNoKGNhdGVnb3J5KTtcbiAgICAgICAgY29uc3QgY29udGVudCA9IG9wZXJhdGlvbi5jb250ZW50O1xuICAgICAgICB5Q29udGVudC5wdXNoKGNvbnRlbnQpO1xuXG5cbiAgICB9KVxuICAgIHJldHVybiB7XG4gICAgICAgIHlPcGVyYXRpb25zUGx1cyxcbiAgICAgICAgeU9wZXJhdGlvbnNNaW51cyxcbiAgICAgICAgeExhYmVsc0RhdGUsXG4gICAgICAgIHlDYXRlZ29yeSxcbiAgICAgICAgeUNvbnRlbnRcbiAgICB9XG59XG5cbmNyZWF0ZUNoYXJ0KCk7XG5jcmVhdGVDaGFydDIoKTtcbmNyZWF0ZUNoYXJ0MygpO1xuXG5hc3luYyBmdW5jdGlvbiBjcmVhdGVDaGFydCgpIHsgLy8gY2FsbCBlbiBhd2FpdCBsYSBmdW5jdGlvbiBxdWkgcsOpY3Vww6hyZSBsZXMgZGF0YSBldCBhdHRlbmQgcXUnZWxsZXMgc29pZW50IHLDqWN1cFxuICAgIGNvbnN0IGRhdGEgPSBhd2FpdCBjYXRjaERhdGEoKTtcbiAgICBjb25zdCBjdHggPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnbXlDaGFydCcpLmdldENvbnRleHQoJzJkJyk7XG4gICAgY29uc3QgY2hhcnQgPSBuZXcgQ2hhcnQoY3R4LCB7XG4gICAgICAgIHR5cGU6ICdsaW5lJyxcbiAgICAgICAgZGF0YToge1xuICAgICAgICAgICAgbGFiZWxzOiBkYXRhLnhMYWJlbHNEYXRlLFxuICAgICAgICAgICAgZGF0YXNldHM6IFtcbiAgICAgICAgICAgICAgICB7XG4gICAgICAgICAgICAgICAgICAgIGxhYmVsOiBcIlBvc2l0aXZlIGFtb3VudFwiLFxuICAgICAgICAgICAgICAgICAgICBmaWxsOiBmYWxzZSxcbiAgICAgICAgICAgICAgICAgICAgYm9yZGVyQ29sb3I6ICdyZ2JhKDI1NSwgMCwgMCwgLjcpJyxcbiAgICAgICAgICAgICAgICAgICAgZGF0YTogZGF0YS55T3BlcmF0aW9uc01pbnVzXG4gICAgICAgICAgICAgICAgfSwge1xuICAgICAgICAgICAgICAgICAgICBsYWJlbDogXCJQb3NpdGl2ZSBhbW91bnRcIixcbiAgICAgICAgICAgICAgICAgICAgZmlsbDogZmFsc2UsXG4gICAgICAgICAgICAgICAgICAgIGJvcmRlckNvbG9yOiAncmdiYSg1MCwgMjA1LCA1MCwgLjcpJyxcbiAgICAgICAgICAgICAgICAgICAgZGF0YTogZGF0YS55T3BlcmF0aW9uc1BsdXNcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICBdXG4gICAgICAgIH0sXG4gICAgICAgIG9wdGlvbnM6IHt9XG4gICAgfSk7XG59XG5cbmFzeW5jIGZ1bmN0aW9uIGNyZWF0ZUNoYXJ0MigpIHsgLy8gY2FsbCBlbiBhd2FpdCBsYSBmdW5jdGlvbiBxdWkgcsOpY3Vww6hyZSBsZXMgZGF0YSBldCBhdHRlbmQgcXUnZWxsZXMgc29pZW50IHLDqWN1cFxuICAgIGNvbnN0IGRhdGEgPSBhd2FpdCBjYXRjaERhdGEoKTtcbiAgICBjb25zdCBjdHggPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnbXlDaGFydDInKS5nZXRDb250ZXh0KCcyZCcpO1xuICAgIGNvbnN0IGNoYXJ0ID0gbmV3IENoYXJ0KGN0eCwge1xuICAgICAgICB0eXBlOiAnYmFyJyxcbiAgICAgICAgZGF0YToge1xuICAgICAgICAgICAgbGFiZWxzOiBkYXRhLnhMYWJlbHNEYXRlLFxuICAgICAgICAgICAgZGF0YXNldHM6IFtcbiAgICAgICAgICAgICAgICB7XG4gICAgICAgICAgICAgICAgICAgIGxhYmVsOiBcIlBvc2l0aXZlIGFtb3VudFwiLFxuICAgICAgICAgICAgICAgICAgICBiYWNrZ3JvdW5kQ29sb3I6ICdyZ2JhKDI1NSwgMCwgMCwgLjcpJyxcbiAgICAgICAgICAgICAgICAgICAgZGF0YTogZGF0YS55T3BlcmF0aW9uc01pbnVzXG5cbiAgICAgICAgICAgICAgICB9LCB7XG4gICAgICAgICAgICAgICAgICAgIGxhYmVsOiBcIlBvc2l0aXZlIGFtb3VudFwiLFxuICAgICAgICAgICAgICAgICAgICBiYWNrZ3JvdW5kQ29sb3I6ICdyZ2JhKDUwLCAyMDUsIDUwLCAuNyknLFxuICAgICAgICAgICAgICAgICAgICBkYXRhOiBkYXRhLnlPcGVyYXRpb25zUGx1c1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIF1cbiAgICAgICAgfSxcblxuXG4gICAgICAgIG9wdGlvbnM6IHt9XG4gICAgfSk7XG59XG5cbmFzeW5jIGZ1bmN0aW9uIGNyZWF0ZUNoYXJ0MygpIHtcbiAgICBjb25zdCBkYXRhID0gYXdhaXQgY2F0Y2hEYXRhKCk7XG5cbiAgICBjb25zdCBjdHggPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcIm15Q2hhcnQzXCIpLmdldENvbnRleHQoJzJkJyk7XG4gICAgdmFyIG15UGllQ2hhcnQgPSBuZXcgQ2hhcnQoY3R4LCB7XG4gICAgICAgIGRhdGE6IHtcbiAgICAgICAgICAgIGRhdGFzZXRzOiBbXG4gICAgICAgICAgICAgICAge1xuICAgICAgICAgICAgICAgICAgICBkYXRhOiBkYXRhLnlPcGVyYXRpb25zTWludXMsXG4gICAgICAgICAgICAgICAgICAgIGJhY2tncm91bmRDb2xvcjogW1xuICAgICAgICAgICAgICAgICAgICAgICAgJ3JnYig1MCwgMjA1LCA1MCknLFxuICAgICAgICAgICAgICAgICAgICAgICAgJ3JnYigyNTUsIDAsIDApJyxcbiAgICAgICAgICAgICAgICAgICAgICAgICdyZ2IoMjM4LDE4OCwxODgpJyxcbiAgICAgICAgICAgICAgICAgICAgICAgICdyZ2IoMjM4LDIyMiwxNzEpJyxcbiAgICAgICAgICAgICAgICAgICAgICAgICdyZ2IoMjAwLDIzNiwxODEpJyxcbiAgICAgICAgICAgICAgICAgICAgICAgICdyZ2IoMTg4LDE5NCwyNDInLFxuICAgICAgICAgICAgICAgICAgICAgICAgJ3JnYigyMzIsMTgyLDIzOCknXG5cbiAgICAgICAgICAgICAgICAgICAgXVxuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIF0sXG4gICAgICAgICAgICBsYWJlbHM6IGRhdGEueUNhdGVnb3J5XG5cbiAgICAgICAgfSxcbiAgICAgICAgdHlwZTogJ2RvdWdobnV0J1xuICAgIH0pO1xufSJdLCJzb3VyY2VSb290IjoiIn0=