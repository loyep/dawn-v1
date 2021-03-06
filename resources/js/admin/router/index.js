import Vue from 'vue';
import VueRouter from 'vue-router';

import cookies from '@/utils/cookies';

// import store from '@admin/store';

// 路由数据
import routes from './routes';

Vue.use(VueRouter);

// 导出路由 在 main.js 里使用
const router = new VueRouter({
    routes,
    mode: 'history'
});

/**
 * 路由拦截
 * 权限验证
 */

router.beforeEach((to, from, next) => {
    // 判断是否需要登录才可以进入
    if (to.matched.some(_ => _.meta.auth)) {
        // 这里依据 token 判断是否登录，可视情况修改
        const token = cookies.get('token');

        if (token && token !== 'undefined') {
            next();
        } else {
            // 没有登录的时候跳转到登录界面
            // 携带上登陆成功之后需要跳转的页面完整路径
            next({
                name: 'login',
                query: {
                    redirect: to.fullPath
                }
            });
        }
    } else {
        // 不需要身份校验 直接通过
        next();
    }
});

router.afterEach(to => {
    // 多页控制 打开新的页面
    // store.dispatch('page/open', to);
    // 更改标题
    // util.title({
    //     title: to.meta.title
    // });
    // 返回页面顶端
    window.scrollTo(0, 0);
});

export default router;
