/*
Template Name: Skote - Admin & Dashboard Template
Author: Themesbrand
Version: 3.0.0
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Main Js File
*/


(function ($) {

    'use strict';

    function initHoriMenuActive() {
        $(".header-nav a").each(function () {
            var pageUrl = window.location.href.split(/[?#]/)[0];
            if (this.href == pageUrl) {
                $(this).addClass("active");
                $(this).parent().addClass("active");
                $(this).parent().parent().addClass("active");
                $(this).parent().parent().parent().addClass("active");
                $(this).parent().parent().parent().parent().addClass("active");
                $(this).parent().parent().parent().parent().parent().addClass("active");
                $(this).parent().parent().parent().parent().parent().parent().addClass("active");

                $(".header-nav li.active a.dropdown-toggle").each(function () {
                  $(this).addClass("active");
                });

                $(".header-nav li.active li.dropdown-submenu.active a.dropdown-toggle-child").each(function () {
                  $(this).addClass("active");
                });
            }
        });
    }

    function init() {
        initHoriMenuActive();
    }

    init();

})(jQuery)
