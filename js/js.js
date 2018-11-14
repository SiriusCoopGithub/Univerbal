// $(function () {
//    $(document).ready(function(){
//         $('.collapsible').collapsible();
//       });

// });

//debut ajout-mission
document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, {
        accordion: false,
        inDuration: 300,
        outDuration: 300
    });
    console.log(elem);

});

document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
});

/*document.addEventListener('DOMContentLoaded', function () {
 var elems = document.querySelectorAll('.datepicker');
 var instances = M.Datepicker.init(elems, options);
 });*/



$(document).ready(function () {
    $('select').material_select();
});

(function ($) {
    $(function () {
        // Plugin initialization
        $('select').not('.disabled').formSelect();
    });
})(jQuery); // end of jQuery name space

$(document).ready(function () {
    M.updateTextFields();
});
//fin ajout-mission
var datePicker = document.querySelectorAll('.datepicker');
var dateInstances = M.Datepicker.init(datePicker, {
    firstDay: 1,
    format: 'dd mmm yyyy',
    showClearBtn: true,
    i18n: {
        months: [
            'Janvier',
            'F�vrier',
            'Mars',
            'Avril',
            'Mai',
            'Juin',
            'Juillet',
            'Ao�t',
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
            'Ao�t',
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



$(document).ready(function () {
    $('select').material_select();
    M.updateTextFields();
    $('select').not('.disabled').formSelect();
});


document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, options);
});
/*DASBOARDUTILISATEUR JS*/

$(document).click(function(){
    $(".fa-chevron-up").click(function(){
     $(".menu-item-ul").toggle();
 });
 });


