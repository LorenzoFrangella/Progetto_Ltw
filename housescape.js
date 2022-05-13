var enabled = false;

//Funzione per andare avanti tra le stanze

function avanti(){
    if(enabled){
    $('.carousel').carousel('next');
    document.getElementById("stanza1").contentWindow.popup_close();
    }
}

// Funzione per andare indietro nelle stanze

function indietro(){
    if(enabled){
        $('.carousel').carousel('prev');
        document.getElementById("stanza1").contentWindow.popup_close();
    }
}

//Funzione per comunicare dalla iframe alla pagina principale

window.onmessage = function(e) {
    switch(e.data) {
        case 'abilita_movimenti':
            alert("Finalmente un po' di luce! Ora ci possiamo muovere senza problemi!");
            enabled = true;
            document.getElementById('indietro').style.display = 'inline';
            document.getElementById('avanti').style.display = 'inline';
        break;
        ///// Aggiungere altri 'case statements' per gestire le chiamate dai figli al padre
        /////
        default:
            alert("Messaggio ricevuto: " + e.data);
        break;      
} 
};

///funzione per mandare messaggi alla pagina principale

function messageToParent(message) {
    window.parent.postMessage(message, '*');
}

// funzione per eseguire funzioni all'interno della pagina child

// necessita come parametri l'id del figlio e la funzione da eseguire
function messageToChild(functionToCall,id_child){
    document.getElementById(id_child).contentWindow.functionToCall();
}

var interruttore = false;
var scala = 0.07;
var acceso = "off";
const suono_interruttore = new Audio("./audio/interruttore.mp3");


function illuminastanza(){
    acceso = "on";
    scala = 5;
    document.body.style.cursor = "default";
    moveTorch(event);
    if(interruttore == false){
        interruttore = true;
        acceso = "on";
        scala = 2;
        suono_interruttore.play();
        document.body.style.cursor = "default";
        moveTorch(event);
        //la riga successiva serve per permettere alla pagina principale di far muovere tra le varie stanze
        window.top.postMessage('abilita_movimenti', '*')
        //document.getElementById("torch")[0].style.removeProperty("clipPath");
    }
};


function moveTorch(event){
    var torch = document.getElementsByClassName("torch")[0];
    //alert($(window).height());
    var r = $(window).width()*scala;
    torch.style.clipPath = `circle(${r}px at ${event.offsetX}px ${event.offsetY}px)`;
}


function popup(){
    if(interruttore){
        var html = "<div class='sfondo'></div>"
        +"	<div class='corpo'>"
        +"		<p class='chiudi'>CHIUDI</p>"
        +"	</div>";
        $("body").prepend(html);
        $(document).ready(function(){
            $("#luce").css("-webkit-filter", "blur(10px)");
        });
        $(".sfondo, .chiudi").click(function() {popup_close();});
    }
}


function popup_close(){
$(".sfondo, .corpo").remove();
$(document).ready(function(){
        $("#luce").css("-webkit-filter", "blur(0px)");
    });
}

var array_utente = Array();
var mio_array=new Array("Fa","Mi","Re", "Sol", "Si");
function popup_piano(){
    $(document).getElementById("pianoforte").style.display = "inline";
}
var x=0;
function incrementa() {
    var i = document.getElementById("progress").value;
    document.getElementById("progress").value = parseInt(i) + 1;
    if(document.getElementById("progress").value >5){
        array_utente=[];
        document.getElementById("progress").value = 0;
        alert('Ritenta!');
    }
}