import Vue from 'vue'
import VueRouter from 'vue-router'

import Landing from '@/js/views/Landing'
import Photo from '@/js/views/Photo'

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    routes: [
        { path: '/', component: Landing },
        { path: '/photo', component: Photo}
    ]
});

export default router
