import Vue from 'vue'
import router from  './router.js'
import store from './store'
import App from "./App.vue";
import "../sass/app.scss";
import VueGoogleHeatMap from 'vue-google-heatmap'

var mapApiKey = document.head.querySelector("[name~=api][content]").content
Vue.use(VueGoogleHeatMap, {
    apiKey: mapApiKey
})

require('./bootstrap');

const app = new Vue({
    el: '#app',
    store,
    router,
    render: h => h(App)
})

export default app
