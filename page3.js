$("#type").click(function(){
    $("#type").css("cursor","default");
    $("#type_writer").addClass("blur");
    $("#macchina_da_scrivere").fadeIn(500);
});
$(document).ready(function(e) {
$("#type_writer").rwdImageMaps();
});
<<<<<<< HEAD
$("#terzo_enigma").on('input', function() {
    terzo_enigma();
});
function terzo_enigma(){
    var mirror = document.getElementById("terzo_enigma").value;
    if(mirror=="specchio"){
        alert("parola corretta");
        $("#type").css("cursor","default");
        $("#type").unbind('click').removeAttr("onclick")[0].onclick = null;
        parent.postMessage("terzo_enigma","*");
    }
<<<<<<< HEAD
}
=======
=======
};
>>>>>>> a392674 (okoko)
$("#esci_mds").click(function(){
    $("#type").css("cursor","pointer");
    $("#type_writer").removeClass("blur");
    $("#macchina_da_scrivere").fadeOut(500);
});
>>>>>>> c674fdc (.)
