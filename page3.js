const suono_tastiera = new Audio("./audio/typewriter.mp3");
const suono_porta=new Audio("./audio/door.mp3");
var chiuso = true;
$(document).ready(function(e) {
    $("#type_writer").rwdImageMaps();
});

$("#type").click(function(){
    $("#type").css("cursor","default");
    $("#porta").css("cursor","default");
    $("#type_writer").addClass("blur");
    $("#macchina_da_scrivere").fadeIn(500);
    document.getElementById("tre").focus();
});
<<<<<<< HEAD
$(document).ready(function(e) {
$("#type_writer").rwdImageMaps();
});
<<<<<<< HEAD
<<<<<<< HEAD
$("#terzo_enigma").on('input', function() {
=======
=======

>>>>>>> 20b7111 (tiene il tempo)
$("#tre").on('input', function() {
<<<<<<< HEAD
>>>>>>> b6a92f6 (push)
=======
    suono_tastiera.play();
>>>>>>> 5ddf9e4 (typewriter)
    terzo_enigma();
});

function chiudi_mds(){
    $("#type").css("cursor","pointer");
    $("#porta").css("cursor","pointer");
    $("#type_writer").removeClass("blur");
    $("#macchina_da_scrivere").fadeOut(500);
    document.getElementById("tre").value = "";
}

function terzo_enigma(){
    var mirror = document.getElementById("tre").value;
    if(mirror == "specchio"){
        alert("parola corretta");
        chiudi_mds();
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
    chiudi_mds();
});
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c674fdc (.)
=======
=======
/*
>>>>>>> 8ae3d63 (ho sofferto per fare questa commit)

<<<<<<< HEAD
<<<<<<< HEAD
$("#door").click(function(){
    $("#type").css("cursor","default");
    $("#type_writer").addClass("blur");
    $("#porta").fadeIn(500);
    $(".lucchetto").fadeIn(500);
});

function verificaSoluzione(){
    var primo_numero = document.getElementById("primo_numero").innerText;
    var secondo_numero = document.getElementById("secondo_numero").innerText;
    var terzo_numero = document.getElementById("terzo_numero").innerText;
    if(primo_numero=="4" && secondo_numero=="6" && terzo_numero=="8"){
        alert("Complimenti! Hai trovato l'uscita");
        $("#porta").fadeOut(500);
        $(".lucchetto").fadeOut(500);
        $("#type_writer").removeClass("blur");
        $("#door").css("cursor","default");
        $("#door").unbind('click').removeAttr("onclick")[0].onclick = null;
        suono_porta.play();
    }
    else{
        alert('Ritenta la soluzione');
        document.getElementById("primo_numero").innerText="0";
        document.getElementById("secondo_numero").innerText="0";
        document.getElementById("terzo_numero").innerText="0";
    }

}

function uscita(){
    document.getElementById("primo_numero").innerText="0";
    document.getElementById("secondo_numero").innerText="0";
    document.getElementById("terzo_numero").innerText="0";
    $("#porta").fadeOut(500);
    $(".lucchetto").fadeOut(500);
    $("#type_writer").removeClass("blur");
<<<<<<< HEAD
}
>>>>>>> fbeb443 (suono e lucchetto)
=======
*/
=======

>>>>>>> 74840d5 (buongiornoo)
=======
$("#esci_lock").click(function chiudi_lock(){
=======
function chiudi_lock(){
>>>>>>> b23c88b (--)
    $("#type_writer").removeClass("blur");
    $(".lucchetto_popup").fadeOut(500);
}


$("#esci_lock").click(function(){
    $("#porta").css("cursor","pointer");
    $("#type").css("cursor","pointer");
    chiudi_lock();
});


>>>>>>> 20b7111 (tiene il tempo)
$("#porta").click(function(){
    if(chiuso){
        $("#porta").css("cursor","default");
        $("#type").css("cursor","default");
        $("#type_writer").addClass("blur");
        $(".lucchetto_popup").fadeIn(500);
    }
});

function addRotor1(){
    var primo_numero = document.getElementById("primo_numero").value;
    var n = parseInt(primo_numero);
    if(n == 9){
        n = 0;
    }
    else{
        n = n + 1;
    }
    var new_number = String(n);
    document.getElementById("primo_numero").value = new_number;
    ceck_lucchetto();
}
function addRotor2(){
    var primo_numero = document.getElementById("secondo_numero").value;
    var n = parseInt(primo_numero);
    if(n == 9){
        n = 0;
    }
    else{
        n = n + 1;
    }
    var new_number = String(n);
    document.getElementById("secondo_numero").value = new_number;
    ceck_lucchetto();
}
function addRotor3(){
    var primo_numero = document.getElementById("terzo_numero").value;
    var n = parseInt(primo_numero);
    if(n == 9){
        n = 0;
    }
    else{
        n = n + 1;
    }
    var new_number = String(n);
    document.getElementById("terzo_numero").value = new_number;
    ceck_lucchetto();
}
function subRotor1(){
    var primo_numero = document.getElementById("primo_numero").value;
    var n = parseInt(primo_numero);
    if(n == 0){
        n = 9;
    }
    else{
        n = n - 1;
    }
    var new_number = String(n);
    document.getElementById("primo_numero").value = new_number;
    ceck_lucchetto();
}
function subRotor2(){
    var primo_numero = document.getElementById("secondo_numero").value;
    var n = parseInt(primo_numero);
    if(n == 0){
        n = 9;
    }
    else{
        n = n - 1;
    }
    var new_number = String(n);
    document.getElementById("secondo_numero").value = new_number;
    ceck_lucchetto();
}
function subRotor3(){
    var primo_numero = document.getElementById("terzo_numero").value;
    var n = parseInt(primo_numero);
    if(n == 0){
        n = 9;
    }
    else{
        n = n - 1;
    }
    var new_number = String(n);
    document.getElementById("terzo_numero").value = new_number;
    ceck_lucchetto();
}

function ceck_lucchetto(){
    if(document.getElementById("primo_numero").value == "4" 
        && document.getElementById("secondo_numero").value == "6" 
        && document.getElementById("terzo_numero").value == "8"){
            alert("Hai trovato la combinazione giusta, sei libero!");
            suono_porta.play();
            $("#type_writer").removeClass("blur");
            $(".lucchetto_popup").fadeOut(500);
            $("#type_writer").attr("src","./img/stanza3_fine.png");
            chiuso = false;
            //Funzione da scrivere per essere reindirizzati alla pagina finale
            $("#porta").click(function(){
                $("#porta").unbind('click').removeAttr("onclick")[0].onclick = null;
                parent.postMessage("completata","*");
                return;
            });
    }
}
>>>>>>> 8ae3d63 (ho sofferto per fare questa commit)
