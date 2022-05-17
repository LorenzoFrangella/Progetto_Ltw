$(document).ready(function(e) {
    $("#luce").rwdImageMaps();
});
$("#lumus").click(function(){
    $("#pergamena").css("cursor","pointer");
    $("#tastiera_colorata").css("cursor","pointer");
    $("#orologio").css("cursor","pointer");
    $("#orologio_fisso").css("cursor","pointer");
    $("#lumus").unbind('click').removeAttr("onclick")[0].onclick = null;
    $("#lumus").css("cursor","default");
})
window.onmessage = function(e) {
    if (e.data == 'rimuovifiltro') {
        popup_close();
    }
};
$("#tastiera_colorata").click(function(){
    if(interruttore && tocco == false){
        tocco = true;
        $(document).ready(function(){
            $("#luce").css("-webkit-filter", "blur(10px)");
        });
        $("#pergamena").css("cursor","default");
        $("#orologio").css("cursor","deafult");
        $("#orologio_fisso").css("cursor","default");
        $("#tastiera_colorata").css("cursor","default");
        $("#foto_tastiera").fadeIn(500);
        $("#esci").fadeIn(500);
    }
});
$("#esci").click(function(){
    tocco = false;
    $(document).ready(function(){
        $("#luce").css("-webkit-filter", "blur(0px)");
    });
    $("#tastiera_colorata").css("cursor","pointer");
    $("#pergamena").css("cursor","pointer");
    $("#orologio").css("cursor","pointer");
    $("#orologio_fisso").css("cursor","pointer");
    $("#foto_tastiera").fadeOut(500);
    $("#esci").fadeOut(500);
});

$("#orologio").click(function(){
    if(interruttore && tocco == false){
        tocco = true;
        $(document).ready(function(){
            $("#luce").css("-webkit-filter", "blur(10px)");});
            $("#pergamena").css("cursor","default");
            $("#orologio").css("cursor","deafult");
            $("#orologio_fisso").css("cursor","default");
            $("#tastiera_colorata").css("cursor","default");
            $(".clock").fadeIn(500);
            $("#esci_due").fadeIn(500);
        }
    });
    
    $("#esci_due").click(function(){
        tocco = false;
        $(document).ready(function(){
            $("#luce").css("-webkit-filter", "blur(0px)");});
            $("#pergamena").css("cursor","pointer");
            $("#tastiera_colorata").css("cursor","pointer");
    $("#orologio").css("cursor","pointer");
    $("#orologio_fisso").css("cursor","pointer");
    $(".clock").fadeOut(500);
    $("#esci_due").fadeOut(500);
});
$("#orologio_fisso").click(function(){
    if(interruttore && tocco == false){
        tocco = true;
        $(document).ready(function(){
            $("#luce").css("-webkit-filter", "blur(10px)");});
            $("#pergamena").css("cursor","default");
            $("#orologio").css("cursor","deafult");
            $("#orologio_fisso").css("cursor","default");
            $("#tastiera_colorata").css("cursor","default");
            $("#foto_orologio").fadeIn(500);
            $("#esci_due").fadeIn(500);
        }
    });
    
    $("#esci_due").click(function(){
        tocco = false;
        $(document).ready(function(){
            $("#luce").css("-webkit-filter", "blur(0px)");});
            $("#pergamena").css("cursor","pointer");
            $("#tastiera_colorata").css("cursor","pointer");
    $("#orologio").css("cursor","pointer");
    $("#orologio_fisso").css("cursor","pointer");
    $("#foto_orologio").fadeOut(500);
    $("#esci_due").fadeOut(500);
});