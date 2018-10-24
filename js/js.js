// $(function () {
//    $(document).ready(function(){
//         $('.collapsible').collapsible();
//       });
    
// });


document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, {
        accordion: false,
        inDuration :300,
        outDuration : 300
      });
console.log(elem);

  });
