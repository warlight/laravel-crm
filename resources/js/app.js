require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';

Vue.use(VueRouter);
Vue.component('home', require('./components/Home.vue').default);

let router = new VueRouter({ routes, mode: 'history' });
const app = new Vue({
    el: "#app",
    router
});
