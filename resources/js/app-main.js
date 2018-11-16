/**
 * The loader js for the app
 */

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./app-bootstrap');

// window.Vue = require('vue');
// window.VueRouter = require('vue-router');

import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import App from './components/App'
import Formulaire from './components/Formulaire'
import Mission from './components/Mission'
import Option from './components/Option'
import PageProfil from './components/PageProfil'




const router = new VueRouter({
    routes: [{
            path: 'mission',
            name: 'mission',
            component: Mission,
            props: {
                title: 'THis is the Mission'
            }
        },
        {
            path: 'formulaire',
            name: 'formulaire',
            component: Formulaire,
            props: {
                formulaire: 'this is the formulaire'
            }
        },
        {
            path: 'option',
            name: 'option',
            component: Option,
            props: {
                formulaire: 'this is the Option'
            }
        },
        {
            path: 'pageprofil',
            name: 'pageprofil',
            component: PageProfil,
            props: {
                formulaire: 'this is the PageProfil'
            }
        }
    ]
})


Vue.config.productionTip = false

/* eslint-disable no-new */
const app = new Vue({
    el: '#app',
    date: {
        plus_icon: '/img/plus-icon.png',
    },
    router,
    components: {
        App
    },
    router,
    template: '<App/>'
})


/**
 * The App JQuery .ready(fonction)
 */
$(document).ready(function() {

    const colaps = document.querySelectorAll('.collapsible');
    const colapsInstances = M.Collapsible.init(colaps, {
        accordion: false,
        inDuration: 300,
        outDuration: 300
    });

    const selectForm = document.querySelectorAll('select');
    const formInstances = M.FormSelect.init(selectForm, {});
    console.log("App js loaded");
});
