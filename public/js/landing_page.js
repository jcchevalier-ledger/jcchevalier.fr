/******/
(function (modules) { // webpackBootstrap
    /******/ 	// The module cache
    /******/
    var installedModules = {};
    /******/
    /******/ 	// The require function
    /******/
    function __webpack_require__(moduleId) {
        /******/
        /******/ 		// Check if module is in cache
        /******/
        if (installedModules[moduleId]) {
            /******/
            return installedModules[moduleId].exports;
            /******/
        }
        /******/ 		// Create a new module (and put it into the cache)
        /******/
        var module = installedModules[moduleId] = {
            /******/            i: moduleId,
            /******/            l: false,
            /******/            exports: {}
            /******/
        };
        /******/
        /******/ 		// Execute the module function
        /******/
        modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
        /******/
        /******/ 		// Flag the module as loaded
        /******/
        module.l = true;
        /******/
        /******/ 		// Return the exports of the module
        /******/
        return module.exports;
        /******/
    }

    /******/
    /******/
    /******/ 	// expose the modules object (__webpack_modules__)
    /******/
    __webpack_require__.m = modules;
    /******/
    /******/ 	// expose the module cache
    /******/
    __webpack_require__.c = installedModules;
    /******/
    /******/ 	// define getter function for harmony exports
    /******/
    __webpack_require__.d = function (exports, name, getter) {
        /******/
        if (!__webpack_require__.o(exports, name)) {
            /******/
            Object.defineProperty(exports, name, {enumerable: true, get: getter});
            /******/
        }
        /******/
    };
    /******/
    /******/ 	// define __esModule on exports
    /******/
    __webpack_require__.r = function (exports) {
        /******/
        if (typeof Symbol !== 'undefined' && Symbol.toStringTag) {
            /******/
            Object.defineProperty(exports, Symbol.toStringTag, {value: 'Module'});
            /******/
        }
        /******/
        Object.defineProperty(exports, '__esModule', {value: true});
        /******/
    };
    /******/
    /******/ 	// create a fake namespace object
    /******/ 	// mode & 1: value is a module id, require it
    /******/ 	// mode & 2: merge all properties of value into the ns
    /******/ 	// mode & 4: return value when already ns object
    /******/ 	// mode & 8|1: behave like require
    /******/
    __webpack_require__.t = function (value, mode) {
        /******/
        if (mode & 1) value = __webpack_require__(value);
        /******/
        if (mode & 8) return value;
        /******/
        if ((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
        /******/
        var ns = Object.create(null);
        /******/
        __webpack_require__.r(ns);
        /******/
        Object.defineProperty(ns, 'default', {enumerable: true, value: value});
        /******/
        if (mode & 2 && typeof value != 'string') for (var key in value) __webpack_require__.d(ns, key, function (key) {
            return value[key];
        }.bind(null, key));
        /******/
        return ns;
        /******/
    };
    /******/
    /******/ 	// getDefaultExport function for compatibility with non-harmony modules
    /******/
    __webpack_require__.n = function (module) {
        /******/
        var getter = module && module.__esModule ?
            /******/            function getDefault() {
                return module['default'];
            } :
            /******/            function getModuleExports() {
                return module;
            };
        /******/
        __webpack_require__.d(getter, 'a', getter);
        /******/
        return getter;
        /******/
    };
    /******/
    /******/ 	// Object.prototype.hasOwnProperty.call
    /******/
    __webpack_require__.o = function (object, property) {
        return Object.prototype.hasOwnProperty.call(object, property);
    };
    /******/
    /******/ 	// __webpack_public_path__
    /******/
    __webpack_require__.p = "/";
    /******/
    /******/
    /******/ 	// Load entry module and return exports
    /******/
    return __webpack_require__(__webpack_require__.s = 3);
    /******/
})
    /************************************************************************/
    /******/ ({

    /***/ "./resources/js/landing_page/form.js":
    /*!*******************************************!*\
      !*** ./resources/js/landing_page/form.js ***!
      \*******************************************/
    /*! no static exports found */
    /***/ (function (module, exports) {

        var regExp = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var button = document.getElementById('form-button');
        button.addEventListener("click", function () {
            if (button.classList.contains("contact-me")) {
                $(".collapse").collapse("show");
                button.innerHTML = 'Send !';
                button.classList.remove("contact-me");
                button.classList.add("send");
                button.classList.add("disabled");
                button.setAttribute("data-original-title", "The required fields are incomplete"); // noinspection JSUnresolvedFunction

                $('[data-toggle="tooltip"]').tooltip();
            } else if (button.classList.contains("send")) {
                if (regExp.test(document.form1.email.value) && !(document.form1.bmessage.value === '')) {
                    $.post("css_js/contact_me.php", {
                        email: document.form1.email.value,
                        bmessage: document.form1.bmessage.value
                    });
                    document.form1.reset();
                    button.classList.add("contact-me");
                    button.classList.remove("send");
                    $(".collapse").collapse("hide");
                    button.innerHTML = 'Contact me';
                    $("#thank-you").modal("show");
                    document.getElementById('email').classList.remove('valid-input');
                    document.getElementById('bmessage').classList.remove('valid-input');
                }
            }
        });
        document.form1.email.addEventListener('keyup', function () {
            activate_button();

            if (!regExp.test(document.form1.email.value)) {
                document.getElementById('invalid-feedback-email').innerHTML = 'Please fill out this field with an email address';
                document.getElementById('email').classList.add('invalid-input');
                document.getElementById('email').classList.remove('valid-input');
            } else {
                document.getElementById('invalid-feedback-email').innerHTML = '';
                document.getElementById('email').classList.add('valid-input');
                document.getElementById('email').classList.remove('invalid-input');
            }
        });
        document.form1.email.addEventListener('blur', function () {
            activate_button();

            if (document.form1.email.value === "" || !regExp.test(document.form1.email.value)) {
                document.getElementById('invalid-feedback-email').innerHTML = 'Please fill out this field with an email address';
                document.getElementById('email').classList.add('invalid-input');
                document.getElementById('email').classList.remove('valid-input');
                button.classList.add("disabled");
                button.setAttribute("title", "The required fields are incomplete");
            }

            if (regExp.test(document.form1.email.value)) {
                document.getElementById('invalid-feedback-email').innerHTML = '';
                document.getElementById('email').classList.add('valid-input');
                document.getElementById('email').classList.remove('invalid-input');
            }
        });
        document.form1.bmessage.addEventListener('blur', function () {
            activate_button();

            if (document.form1.bmessage.value === '') {
                document.getElementById('invalid-feedback-message').innerHTML = 'Please fill out this field';
                document.getElementById('bmessage').classList.add('invalid-input');
                document.getElementById('bmessage').classList.remove('valid-input');
                button.classList.add("disabled");
                button.setAttribute("title", "The required fields are incomplete");
            } else {
                document.getElementById('invalid-feedback-message').innerHTML = '';
                document.getElementById('bmessage').classList.add('valid-input');
                document.getElementById('bmessage').classList.remove('invalid-input');
            }
        });
        document.form1.bmessage.addEventListener('keyup', function () {
            activate_button();
        });

        function activate_button() {
            if (regExp.test(document.form1.email.value) && !(document.form1.bmessage.value === '')) {
                button.classList.remove("disabled");
                button.setAttribute("data-original-title", "");
                button.setAttribute("title", "");
            } else {
                button.classList.add("disabled");
                button.setAttribute("data-original-title", "The required fields are incomplete");
            }
        }

        document.addEventListener('keydown', function (event) {
            if (event.code === 'Escape') {
                button.classList.remove("disabled");
                button.setAttribute("data-original-title", "");
                button.setAttribute("title", "");
                button.classList.add("contact-me");
                button.classList.remove("send");
                $(".collapse").collapse("hide");
                button.innerHTML = 'Contact me';
                $("#thank-you").modal("hide");
            }
        });

        /***/
    }),

    /***/ "./resources/js/landing_page/landing_page.js":
    /*!***************************************************!*\
      !*** ./resources/js/landing_page/landing_page.js ***!
      \***************************************************/
    /*! no static exports found */
    /***/ (function (module, exports, __webpack_require__) {

        __webpack_require__(/*! ./form */ "./resources/js/landing_page/form.js");

        __webpack_require__(/*! ./social_medias */ "./resources/js/landing_page/social_medias.js");

        /***/
    }),

    /***/ "./resources/js/landing_page/social_medias.js":
    /*!****************************************************!*\
      !*** ./resources/js/landing_page/social_medias.js ***!
      \****************************************************/
    /*! no static exports found */
    /***/ (function (module, exports) {

        var linked_in = document.getElementById('linked-in');
        var github = document.getElementById('github');
        linked_in.addEventListener("click", function () {
            window.open('https://www.linkedin.com/in/jean-christophe-chevalier');
        });
        github.addEventListener("click", function () {
            window.open('https://github.com/jcchevalier');
        });

        /***/
    }),

    /***/ 3:
    /*!*********************************************************!*\
      !*** multi ./resources/js/landing_page/landing_page.js ***!
      \*********************************************************/
    /*! no static exports found */
    /***/ (function (module, exports, __webpack_require__) {

        module.exports = __webpack_require__(/*! /Users/jisse/PhpstormProjects/jcchevalier.fr/resources/js/landing_page/landing_page.js */"./resources/js/landing_page/landing_page.js");


        /***/
    })

    /******/
});
