/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Vue from 'vue'

import request from './utils/request'
import router from './router'

import SignIn from '@app/components/SignIn.vue'
import SignOut from '@app/components/SignOut.vue'
import LikeLink from '@app/components/LikeLink.vue'
import FavoriteLink from '@app/components/FavoriteLink.vue'
import CommentForm from '@app/components/CommentForm.vue'
import SearchLink from '@app/components/SearchLink.vue'
import SocialShare from '@app/components/SocialShare.vue'

// Element UI
require('./element')

Vue.use(request);

const $ = window.jQuery = window.$ = require('jquery');

Vue.config.productionTip = false

const app = new Vue({
  components: {
    SignIn,
    SignOut,
    LikeLink,
    CommentForm,
    FavoriteLink,
    SearchLink,
    SocialShare
  },
  router,
  data () {
    return {

    }
  },
  mounted () {
    document.addEventListener('scroll', this.handleScroll, { passive: true });
    if ($('body').height() < $(window).height()) {
      const gap = $(window).height() - $('#app').height()
      if (gap > 0) {
        $('main').css('min-height', $('main').height() + gap + parseFloat($('main').css('padding-top')) + parseFloat($('main').css('padding-bottom')))
      }
    }
  },
  beforeDestroy () {
    document.removeEventListener('scroll', this.handleScroll);
  },
  methods: {
    handleScroll () {
      const scrollTop = document.body.scrollTop + document.documentElement.scrollTop;
      const el = document.getElementsByClassName('fixed-top')[0]
      if (el) {
        if (scrollTop > 72) {
          el.classList.add('scroll')
        } else {
          el.classList.remove('scroll')
        }
      }
    }
  }
}).$mount('#app')

window.event = event

export default app
