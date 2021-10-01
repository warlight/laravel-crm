require('./bootstrap');

import Vue from 'vue';

Vue.component('home', require('./components/Home.vue').default);

const app = new Vue({
    el: "#app"
});
