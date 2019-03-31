import Vue from 'vue'
import VueRouter from 'vue-router'

import Landing from '@/js/views/Landing'
import Photo from '@/js/views/Photo'
import Confirmation from '@/js/views/Confirmation'

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    routes: [
        { path: '/', component: Landing },
        // { path: '/photo', component: Photo},
        // { path: '/confirmation', component: Confirmation}
    ]
});

export default router
