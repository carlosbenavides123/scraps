import Vue from 'vue'
import VueRouter from 'vue-router'

import Landing from './views/Landing'

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    routes: [
        { path: '/', component: Landing },
    ]
});

export default router
