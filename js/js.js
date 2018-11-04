// $(function () {
//    $(document).ready(function(){
//         $('.collapsible').collapsible();
//       });
    
// });

//debut ajout-mission
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, {
        accordion: false,
        inDuration :300,
        outDuration : 300
      });
console.log(elem);

  });

  document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
});

document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems, options);
});



$(document).ready(function () {
    $('select').material_select();
});

(function($){
  $(function(){
    // Plugin initialization
    $('select').not('.disabled').formSelect();
  }); 
})(jQuery); // end of jQuery name space

  $(document).ready(function() {
    M.updateTextFields();
  });
  //fin ajout-mission