/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/block/forms sync recursive ^\\.\\/[^/]+\\/[^/.]+\\.(js%7Ccss%7Cscss%7Csass%7Cless)$":
/*!************************************************************************************!*\
  !*** ./src/block/forms/ sync ^\.\/[^/]+\/[^/.]+\.(js%7Ccss%7Cscss%7Csass%7Cless)$ ***!
  \************************************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var map = {
	"./forms-form/forms-form.js": "./src/block/forms/forms-form/forms-form.js",
	"./forms-form/forms-form.scss": "./src/block/forms/forms-form/forms-form.scss",
	"./forms-input/forms-input.scss": "./src/block/forms/forms-input/forms-input.scss",
	"./forms-select/forms-select.scss": "./src/block/forms/forms-select/forms-select.scss",
	"./forms-submit-button/forms-submit-button.scss": "./src/block/forms/forms-submit-button/forms-submit-button.scss",
	"./forms-textarea/forms-textarea.scss": "./src/block/forms/forms-textarea/forms-textarea.scss"
};


function webpackContext(req) {
	var id = webpackContextResolve(req);
	return __webpack_require__(id);
}
function webpackContextResolve(req) {
	if(!__webpack_require__.o(map, req)) {
		var e = new Error("Cannot find module '" + req + "'");
		e.code = 'MODULE_NOT_FOUND';
		throw e;
	}
	return map[req];
}
webpackContext.keys = function webpackContextKeys() {
	return Object.keys(map);
};
webpackContext.resolve = webpackContextResolve;
module.exports = webpackContext;
webpackContext.id = "./src/block/forms sync recursive ^\\.\\/[^/]+\\/[^/.]+\\.(js%7Ccss%7Cscss%7Csass%7Cless)$";

/***/ }),

/***/ "./src/block/forms/forms-form/forms-form.js":
/*!**************************************************!*\
  !*** ./src/block/forms/forms-form/forms-form.js ***!
  \**************************************************/
/***/ (() => {

document.addEventListener('DOMContentLoaded', function () {
  let form = document.getElementById('form');
  const errors = document.getElementById('errors');
  form.addEventListener('submit', function (event) {
    errors.innerHTML = '';
    let nameInput = document.getElementById('name-input');
    let emailInput = document.getElementById('email-input');
    let messageInput = document.getElementById('message-input');
    let phoneInput = document.getElementById('phone-input');
    const reg = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    let errorsList = [];
    if (nameInput.value.toString().trim().length <= 1) {
      errorsList.push('<p>Введенное имя некорректно!</p>');
    }
    if (emailInput.value.toString().length == 0 && phoneInput.value.toString().trim().length == 0) {
      errorsList.push('<p>Заполните email или номер телефона!</p>');
    }
    if (emailInput.value.toString().match(reg) == null && phoneInput.value.toString().trim().length == 0) {
      errorsList.push('<p>Введенный email некорректен!</p>');
    }
    if (messageInput.value.toString().trim().length <= 1) {
      errorsList.push('<p>Введите сообщение!</p>');
    }
    if (errorsList.length != 0) {
      event.preventDefault();
      errors.innerHTML = errorsList.join(' ');
      return;
    }
  });
});

/***/ }),

/***/ "./src/block/forms/forms-form/forms-form.scss":
/*!****************************************************!*\
  !*** ./src/block/forms/forms-form/forms-form.scss ***!
  \****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
// extracted by mini-css-extract-plugin
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({});

/***/ }),

/***/ "./src/block/forms/forms-input/forms-input.scss":
/*!******************************************************!*\
  !*** ./src/block/forms/forms-input/forms-input.scss ***!
  \******************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
// extracted by mini-css-extract-plugin
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({});

/***/ }),

/***/ "./src/block/forms/forms-select/forms-select.scss":
/*!********************************************************!*\
  !*** ./src/block/forms/forms-select/forms-select.scss ***!
  \********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
// extracted by mini-css-extract-plugin
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({});

/***/ }),

/***/ "./src/block/forms/forms-submit-button/forms-submit-button.scss":
/*!**********************************************************************!*\
  !*** ./src/block/forms/forms-submit-button/forms-submit-button.scss ***!
  \**********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
// extracted by mini-css-extract-plugin
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({});

/***/ }),

/***/ "./src/block/forms/forms-textarea/forms-textarea.scss":
/*!************************************************************!*\
  !*** ./src/block/forms/forms-textarea/forms-textarea.scss ***!
  \************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
// extracted by mini-css-extract-plugin
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({});

/***/ }),

/***/ "./src/block/forms/forms.js":
/*!**********************************!*\
  !*** ./src/block/forms/forms.js ***!
  \**********************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

function requireAll(r) {
  r.keys().map(r);
}
requireAll(__webpack_require__("./src/block/forms sync recursive ^\\.\\/[^/]+\\/[^/.]+\\.(js%7Ccss%7Cscss%7Csass%7Cless)$"));

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry needs to be wrapped in an IIFE because it needs to be in strict mode.
(() => {
"use strict";
/*!****************************!*\
  !*** ./src/entry/forms.js ***!
  \****************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var block_forms__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! block/forms */ "./src/block/forms/forms.js");
/* harmony import */ var block_forms__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(block_forms__WEBPACK_IMPORTED_MODULE_0__);

})();

/******/ })()
;
//# sourceMappingURL=forms.1758624223746.js.map