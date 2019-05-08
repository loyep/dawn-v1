
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('back-top', require('./components/BackTop').default);
Vue.component('notice-bar', require('./components/NoticeBar').default);
Vue.component('like-button', require('./components/LikeButton').default);
Vue.component('bigger-cover', require('./components/BiggerCover').default);
Vue.component('load-more', require('./components/LoadMore').default);

import './directives/highlight'
import {prPopup} from './popup'

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data() {
        return {
            Like: new Vue()
        }
    },
});

function scrollTop() {
    var $window = $(window),
        $window_width = $window.width(),
        $window_height = $window.height(),
        scroll = $window.scrollTop(),
        startPoint = $window_height / 2,
        scrTopBtn = $("#nice-back-to-top");
    if (scroll >= startPoint && $window_width >= 1024) {
        scrTopBtn.addClass('active');
    } else {
        scrTopBtn.removeClass('active');
    }
    scrTopBtn.on("click", function () {
        $("html, body").stop().animate({
            scrollTop: 0
        }, 600);
    });
};

$(document).scroll(function ($) {
    scrollTop()
});

$(window).ready(function ($) {
    $(".main-menu li:has(>ul)").addClass("has-children");
    if ($(".main-menu li").hasClass("has-children")) {
        $(".main-menu li.has-children>a").prepend('<span class="sub-menu-icon text-xs iconfont icon-sub-menu"></span>')
    };

    $(".search-popup").bind('click', function () {
        var $search = $('#search-popup-wrap')
        prPopup('full', $search.html())
    });

    $(".sidebar").length > 0 && $(".sidebar").theiaStickySidebar({
        additionalMarginTop: 20,
        additionalMarginBottom: 100
    });
});

function ajax_load_posts(data) {
    $('.ajax-loading').show();

    var loadButton = $('.dposts-ajax-load');
    loadButton.hide();

    $.ajax({
         url: document.ajax_url,
         type: 'POST',
         dataType: 'html',
         data: data,
     })
     .done(function (response) {
         loadButton.removeAttr('disabled');
         if (response.trim()) {
             loadButton.data('paged', data.paged * 1 + 1);
             $('.' + data.append).append(response);
             loadButton.removeClass('loading').show();
         } else {
             loadButton.attr('disabled', 'disabled');
             loadButton.text(__.reached_the_end).show();
         }
     })
     .fail(function () {
         $('.ajax-loading').hide();
     })
     .always(function () {
         $('.ajax-loading').hide();
     });
}

