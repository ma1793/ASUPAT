
$(document).ready(function(){
   $('.menu .item')
  .tab()
;
});

function mostrarForm(form) {
    if (document.getElementById(form).style.display === "none") {
           document.getElementById(form).style.display = "block";
       } else {
           document.getElementById(form).style.display = "none";
       }          // The function returns the product of p1 and p2
}

