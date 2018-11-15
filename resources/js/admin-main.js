/**
 * The loader js for the admin dashboard
 */



/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./admin-bootstrap');



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('admin-component', require('./components/AdminComponent.vue'));
// Vue.component('vue-admin-create-user', require('./components/AdminCreateUser.vue'));

// const vueAdmin = new Vue({
//     el: '#vue-admin'
// });


/**
 * The Admin JQuery .ready(fonction)
 */
$(document).ready(function() {

    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems, {

    });

    console.log("Admin js loaded");
});
