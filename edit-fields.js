// ========= EDIT BUTTONS =========

// Universe - Overview
jQuery(document).ready(function( $ ){
    $("#edit-Button, #cancel-Button").click(function(){
        $("#display-Fields").toggle();
        $("#edit-Fields").toggle();
    });
});
