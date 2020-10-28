$(document).ready(function() {
    if($(window).width()<415){
        $("#boxes .container .mb-3").css("max-width: 5.6rem !important;");
    }
    else{
        $("#boxes .container .mb-3").css("max-width: 5rem !important;");
    }
});