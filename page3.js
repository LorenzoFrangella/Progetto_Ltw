const suono_tastiera = new Audio("./audio/typewriter.mp3");
const suono_porta=new Audio("./audio/door.mp3");

$(document).ready(function(e) {
    $("#type_writer").rwdImageMaps();
});

$("#type").click(function(){
    $("#type").css("cursor","default");
    $("#type_writer").addClass("blur");
    $("#macchina_da_scrivere").fadeIn(500);
    document.getElementById("tre").focus();
});

$("#tre").on('input', function() {
    suono_tastiera.play();
    terzo_enigma();
});

function chiudi_mds(){
    $("#type").css("cursor","pointer");
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
};
$("#esci_mds").click(function(){
    chiudi_mds();
});

$("#esci_lock").click(function chiudi_lock(){
    $("#type_writer").removeClass("blur");
    $(".lucchetto_popup").fadeOut(500);
});


$("#porta").click(function(){
    $("#porta").css("cursor","default");
    $("#type_writer").addClass("blur");
    $(".lucchetto_popup").fadeIn(500);
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
            $("#porta").css("cursor","default");
            $("#type_writer").removeClass("blur");
            $(".lucchetto_popup").fadeOut(500);
            $("#type_writer").attr("src","./img/stanza3_fine.png");
            //Funzione da scrivere per essere reindirizzati alla pagina finale
            $("#porta").click(function(){
                parent.postMessage("completata","*");
                return;
            });
    }
}