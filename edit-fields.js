// ========= EDIT BUTTONS =========

// Universe - Overview
jQuery(document).ready(function( $ ){
    $("#edit-Button, #cancel-Button").click(function(){
        $("#display-Fields").toggle();
        $("#edit-Fields").toggle();
    });
});
/* create new drop down */
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
