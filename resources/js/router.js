import Vue from 'vue'
import VueRouter from 'vue-router'

import Landing from '@/js/views/Landing'
import TakePhoto from '@/js/views/TakePhoto'
import Photo from '@/js/views/Photo'

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    routes: [
        { path: '/', component: Landing },
        { path: '/takePhoto', component: TakePhoto},
        { path: '/photo', component: Photo}
    ]
});

export default router
