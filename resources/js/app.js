
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');
import Vue from 'vue'
import Material from './material'
import VueRouter from 'vue-router'
import routes from './routes';
let AppLayout = require('./components/master');


Vue.use(VueRouter);

// Vue.component('login-component',require('./components/LoginComponent'));
// Vue.component('register-component',require('./components/RegisterComponent'));

window.Vue = require('vue');



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const router = new VueRouter({ routes:routes})
 new Vue(
    Vue.util.extend(
        {router},
        AppLayout
    )
).$mount('#app')

