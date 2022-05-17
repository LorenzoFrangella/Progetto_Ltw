$("#type").click(function(){
    $("#type").css("cursor","default");
    $("#type_writer").addClass("blur");
    $("#macchina_da_scrivere").fadeIn(500);
});
$(document).ready(function(e) {
$("#type_writer").rwdImageMaps();
});
$("#terzo_enigma").on('input', function() {
    terzo_enigma();
})
function terzo_enigma(){
    var mirror = document.getElementById("#terzo_enigma").value;
    alert(mirror);
    if(mirror=="specchio"){
        alert("parola corretta");
        $("#type").css("cursor","default");
        $("#type").unbind('click').removeAttr("onclick")[0].onclick = null;
        parent.postMessage("terzo_enigma","*");
    }
}