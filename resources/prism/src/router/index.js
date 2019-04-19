import Vue from 'vue'
import store from '@/store'
import Router from 'vue-router'
import routes from './routes'
import { getBaseUrl } from '@/utils/utils'
import NProgress from 'nprogress'
import { getToken } from '@/utils/auth'
import { whiteList } from '@/config/route'

NProgress.configure({ showSpinner: false })

Vue.use(Router)

const router = createRouter(getBaseUrl())

const beforeResolve = async (to, from, next) => {
  NProgress.start()
  if (getToken()) {
    if (whiteList.indexOf(to.path) !== -1) {
      next({ path: '/' })
      NProgress.done()
    } else {
      if (store.getters['auth/roles'].length === 0) {
        store
          .dispatch('auth/GetInfo')
          .then(res => {
            const data = res.data
            const roles = data.roles
            store
              .dispatch('permission/GenerateRoutes', { roles })
              .then(() => {
                router.addRoutes(store.getters['permission/addRouters'])
                next({ ...to, replace: true })
              })
          }).catch(() => {
            store
              .dispatch('auth/Logout')
              .then(() => {
                location.reload()
              })
          })
      } else {
        next()
      }
    }
  } else {
    if (whiteList.indexOf(to.path) !== -1) {
      next()
    } else {
      if (to.fullPath === '/') {
        next({ path: '/login' })
      } else {
        next({ path: '/login', query: { redirect: to.fullPath } })
      }
      NProgress.done()
    }
  }
}

const afterEach = async (to, from) => {
  await router.app.$nextTick()
  NProgress.done()
}

router.beforeResolve(beforeResolve)
router.afterEach(afterEach)

export default router

function scrollBehavior (to, from, savedPosition) {
  if (savedPosition) {
    return savedPosition
  }

  if (to.hash) {
    return { selector: to.hash }
  }

  const [component] = router.getMatchedComponents({ ...to }).slice(-1)

  if (component && component.scrollToTop === false) {
    return {}
  }

  return { x: 0, y: 0 }
}

/**
 * The router factory
 */
function createRouter (base) {
  const router = new Router({
    base,
    scrollBehavior,
    mode: 'history',
    routes
  })

  return router
}