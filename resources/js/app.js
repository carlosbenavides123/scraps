require('./bootstrap');
import Vue from 'vue'
import store from './store'
import App from "./App.vue";
import "../sass/app.scss";

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
    store,
    render: h => h(App)
});

export default app
