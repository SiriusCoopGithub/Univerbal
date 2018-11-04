window._ = require('lodash');

window.Popper = require('popper.js').default;

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */
try {
    window.$ = window.jQuery = require('jquery');
    $(document).ready(function() {
        $('select').material_select();
        M.updateTextFields();
        $('select').not('.disabled').formSelect();
    });
    // require('bootstrap');
} catch (e) {}

// require('materialize-css');
/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     encrypted: true
// });



document.addEventListener('DOMContentLoaded', function(e) {
    e.preventDefault();
    var colaps = document.querySelectorAll('.collapsible');
    var colapsInstances = M.Collapsible.init(colaps, {
        accordion: false,
        inDuration: 300,
        outDuration: 300
    });

    var datePicker = document.querySelectorAll('.datepicker');
    var dateInstances = M.Datepicker.init(datePicker, {
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

    var hourPicker = document.querySelectorAll('.timepicker');
    var instances = M.Timepicker.init(hourPicker, {
        defaultTime: 'now',
        twelveHour: false,
        showClearBtn: true,
    });

    var selectForm = document.querySelectorAll('select');
    var formInstances = M.FormSelect.init(selectForm, options);

});
