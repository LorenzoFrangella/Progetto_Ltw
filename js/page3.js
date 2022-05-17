function terzo_enigma(){
    var mirror = document.getElementById("#terzo_enigma").value;
    if(mirror=="specchio"){
        alert("orario inserito corretto");
        $("#orologio").css("cursor","default");
        $("#orologio").unbind('click').removeAttr("onclick")[0].onclick = null;
        parent.postMessage("primo_enigma","*");
    }
}