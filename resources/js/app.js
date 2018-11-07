/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#vue-root'
});

$(document).ready(function() {

    const colaps = document.querySelectorAll('.collapsible');
    const colapsInstances = M.Collapsible.init(colaps, {
        accordion: false,
        inDuration: 300,
        outDuration: 300
    });

    const datePicker = document.querySelectorAll('.datepicker');
    const dateInstances = M.Datepicker.init(datePicker, {
        firstDay: 1,
        format: 'dd mmm yyyy',
        showClearBtn: true,
        i18n: {
            months: [
                'Janvier',
                'Février',
                'Mars',
                'Avril',
                'Mai',
                'Juin',
                'Juillet',
                'Août',
                'Septembre',
                'Octobre',
                'Novembre',
                'Decembre'
            ],
            monthsShort: [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'Mai',
                'Juin',
                'Jul',
                'Août',
                'Sep',
                'Oct',
                'Nov',
                'Dec'
            ],
            weekdays: [
                'Dimanche',
                'Lundi',
                'Mardi',
                'Mercredi',
                'Jeudi',
                'Vendredi',
                'Samedi'
            ],
            weekdaysShort: [
                'Dim',
                'Lun',
                'Mar',
                'Mer',
                'Jeu',
                'Ven',
                'Sam'
            ],
            weekdaysAbbrev: ['D', 'L', 'M', 'M', 'J', 'V', 'S']
        }
    });

    const hourPicker = document.querySelectorAll('.timepicker');
    const instances = M.Timepicker.init(hourPicker, {
        defaultTime: 'now',
        twelveHour: false,
        showClearBtn: true,
    });

    const selectForm = document.querySelectorAll('select');
    const formInstances = M.FormSelect.init(selectForm, {});
    console.log("ready!");
});

// $('select').material_select();
// M.updateTextFields();
// $('select').not('.disabled').formSelect();
