/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import Navigation from './components/Navigation.vue';
import Listings from './components/Listings.vue';
import * as Vue from 'vue'

import * as VueRouter from 'vue-router';
import Listing from './components/Listing.vue';
import Register from './components/Register.vue';
import Login from './components/Login.vue';
import Edit from './components/Edit.vue';
import { store } from './store/auth';
import App from './App.vue';



window.Vue = require('vue').default;

// Vue.use(VueRouter);

const app = Vue.createApp(App);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

app.component('example-component', require('./components/ExampleComponent.vue').default);
app.component('listing', Listing);
app.component('register', Register);
app.component('edit', Edit);
app.component('navigation', Navigation);

const routes = [
            {
            path: '/',
            name: 'top',
            component: Listings,
        },
        {
            path: '/listings',
            name: 'listings',
            component: Listings,
        },
        {
            path: '/listings/:id',
            name: 'listings.show',
            component: Listing,
            props: true,
        },        
        {
            path: '/register',
            name: 'register',
            component: Register,
        },
        {
            path: '/login',
            name: 'login',
            component: Login,
        },
        {
            path: '/edit',
            name: 'edit',
            component: Edit,
        },
]


const router = VueRouter.createRouter({
    // 4. Provide the history implementation to use. We are using the hash history for simplicity here.
    history: VueRouter.createWebHashHistory(),
    routes, // short for `routes: routes`
  })
  
app.use(router);
app.use(store);
app.mount('#app');
