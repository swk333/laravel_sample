/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import Navigation from './components/Navigation.vue';
import Listings from './components/Listings.vue';
import Vue from 'vue';
import VueRouter from 'vue-router';
import Listing from './components/Listing.vue';

window.Vue = require('vue').default;

Vue.use(VueRouter);



/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('navigation', Navigation);
Vue.component('listings', Listings);
Vue.component('listing', Listing);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/listings',
            name: 'listings',
            component: Listings,
        },
        {
            path: '/listings/:id',
            name: 'listings.show',
            component: Listing,
        },
    ]
})

const app = new Vue({
    el: '#app',
    router
});
