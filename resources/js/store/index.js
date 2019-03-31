import Vue from 'vue';
import Vuex from 'vuex';

import Global from './modules/global';

import VueGeolocation from 'vue-browser-geolocation';
Vue.use(VueGeolocation);

Vue.use(Vuex);

export default new Vuex.Store({
    strict: process.env.NODE_ENV !== 'production',
    modules: {
        Global
    }
});
