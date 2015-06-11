
$(document).ready(function(){
   $('.ui.selection.dropdown')
        .dropdown()
    ;
    
});

function reply(id) {
    if (document.getElementById(id).style.display === "none") {
           document.getElementById(id).style.display = "block";
       } else {
           document.getElementById(id).style.display = "none";
       }          // The function returns the product of p1 and p2
}
