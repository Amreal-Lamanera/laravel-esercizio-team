/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/babel-loader/lib/index.js):\nError: Error while parsing JSON - Unexpected token < in JSON at position 981");

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/css-loader/index.js):\nModuleBuildError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\nSassError: Can't find stylesheet to import.\n  ╷\n8 │ @import '~bootstrap/scss/bootstrap';\r\n  │         ^^^^^^^^^^^^^^^^^^^^^^^^^^^\n  ╵\n  C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\resources\\sass\\app.scss 8:9  root stylesheet\n    at C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\webpack\\lib\\NormalModule.js:316:20\n    at C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\loader-runner\\lib\\LoaderRunner.js:367:11\n    at C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\loader-runner\\lib\\LoaderRunner.js:233:18\n    at context.callback (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\loader-runner\\lib\\LoaderRunner.js:111:13)\n    at C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass-loader\\dist\\index.js:73:7\n    at Function.call$2 (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:101257:16)\n    at render_closure1.call$2 (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:86329:12)\n    at _RootZone.runBinary$3$3 (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:30053:18)\n    at _FutureListener.handleError$1 (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:28582:21)\n    at _Future__propagateToListeners_handleError.call$0 (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:28889:49)\n    at Object._Future__propagateToListeners (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:3911:77)\n    at _Future._completeError$2 (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:28735:9)\n    at _AsyncAwaitCompleter.completeError$2 (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:28383:12)\n    at Object._asyncRethrow (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:3713:17)\n    at C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:20081:20\n    at _wrapJsFunctionForAsync_closure.$protected (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:3738:15)\n    at _wrapJsFunctionForAsync_closure.call$2 (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:28402:12)\n    at _awaitOnObject_closure0.call$2 (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:28396:25)\n    at _RootZone.runBinary$3$3 (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:30053:18)\n    at _FutureListener.handleError$1 (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:28582:21)\n    at _Future__propagateToListeners_handleError.call$0 (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:28889:49)\n    at Object._Future__propagateToListeners (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:3911:77)\n    at _Future._completeError$2 (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:28735:9)\n    at _AsyncAwaitCompleter.completeError$2 (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:28383:12)\n    at Object._asyncRethrow (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:3713:17)\n    at C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:15495:20\n    at _wrapJsFunctionForAsync_closure.$protected (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:3738:15)\n    at _wrapJsFunctionForAsync_closure.call$2 (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:28402:12)\n    at _awaitOnObject_closure0.call$2 (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:28396:25)\n    at _RootZone.runBinary$3$3 (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:30053:18)\n    at _FutureListener.handleError$1 (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:28582:21)\n    at _Future__propagateToListeners_handleError.call$0 (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:28889:49)\n    at Object._Future__propagateToListeners (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:3911:77)\n    at _Future._completeError$2 (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:28735:9)\n    at _AsyncAwaitCompleter.completeError$2 (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:28383:12)\n    at Object._asyncRethrow (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:3713:17)\n    at C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:15530:20\n    at _wrapJsFunctionForAsync_closure.$protected (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:3738:15)\n    at _wrapJsFunctionForAsync_closure.call$2 (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:28402:12)\n    at _awaitOnObject_closure0.call$2 (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:28396:25)\n    at _RootZone.runBinary$3$3 (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:30053:18)\n    at _FutureListener.handleError$1 (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:28582:21)\n    at _Future__propagateToListeners_handleError.call$0 (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:28889:49)\n    at Object._Future__propagateToListeners (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:3911:77)\n    at _Future._completeError$2 (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:28735:9)\n    at _AsyncAwaitCompleter.completeError$2 (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:28383:12)\n    at Object._asyncRethrow (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:3713:17)\n    at C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:73958:20\n    at _wrapJsFunctionForAsync_closure.$protected (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:3738:15)\n    at _wrapJsFunctionForAsync_closure.call$2 (C:\\Users\\Danilo\\Desktop\\LARAVEL\\laravel-esercizio-team\\node_modules\\sass\\sass.dart.js:28402:12)");

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\Users\Danilo\Desktop\LARAVEL\laravel-esercizio-team\resources\js\app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! C:\Users\Danilo\Desktop\LARAVEL\laravel-esercizio-team\resources\sass\app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });