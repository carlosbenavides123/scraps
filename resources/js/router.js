import Vue from 'vue'
import VueRouter from 'vue-router'

import Landing from './views/Landing'
import takePhoto from './views/takePhoto'

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    routes: [
        { path: '/', component: Landing },
        { path: '/takePhoto', component: takePhoto}
    ]
});

export default router
