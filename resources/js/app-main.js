/**
 * The loader js for the app
 */

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./app-bootstrap');



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
// Vue.component('example-component', require('./components/ExampleComponent.vue'));

const vueApp = new Vue({
    el: '#vue-app'
});


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

// $('select').material_select();
// M.updateTextFields();
// $('select').not('.disabled').formSelect();
