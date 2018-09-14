import Vue from 'vue'
import VueRouter from 'vue-router'
import Nav from './Nav.vue';

Vue.use(VueRouter);
Vue.component('nav-component', Nav);

const router = new VueRouter({
    mode: 'history',
    routes: [
        { path: '/', component: require('../articles/Index.vue') },
        { path: '/works', component: require('../articles/Works.vue') },
        { path: '/private', component: require('../articles/Private.vue') },
        { path: '/contact', component: require('../articles/Contact.vue') },
    ]
});

new Vue({
    router,
    el: '.nav'
});
