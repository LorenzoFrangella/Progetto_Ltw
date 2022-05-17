<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/exit.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./primolivello.css">
    <link rel="stylesheet" href="./stile_pg3.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="./js/jquery.rwdImageMaps.js"></script>
    <script src="./housescape.js"></script>
    <script src="./js/page3.js"></script>
    <title>HousEscape</title>
</head>
<body id="terzo">
<div class="bg_3"></div>
    <div class="stanza_3">
        <img src="./img/stanza_3.jpg" usemap="#typewriter" id="type_writer" width="1276" height="718">
        <map name="typewriter">
           <area id="type" shape="rect" coords="420,338,568,416" href="#" onclick="" title="macchina_da_scrivere"> 
        </map>
        <div id="macchina_da_scrivere" class="popup_macchina_da_scrivere">
            <div class="foglio">
                <form><input type="text" id="tre" name="indovinello" minlenght="1" size="10" class="campo_scrivibile"></form>
            </div>
            <img src="./img/macchina_da_scrivere.png" class="foto_mds">
            <p id="esci_mds" class="exit">Esci</p>
        </div>
        <div class="lucchetto">
        <table>
        <tr class="prima_riga"><td class="aumenta" onclick="aumenta_primo_numero()"> + </td><td class="aumenta" onclick="aumenta_secondo_numero()"> + </td> <td class="aumenta" onclick="aumenta_terzo_numero()"> + </td></tr>
        <tr class = "seconda_riga"><td id="primo_numero"> 0 </td><td id="secondo_numero"> 0 </td> <td id="terzo_numero"> 0 </td></tr>
        <tr class = "terza_riga"><td class="diminuisci" onclick="diminuisci_primo_numero()"> - </td><td class="diminuisci" onclick="diminuisci_secondo_numero()"> - </td> <td class="diminuisci" onclick="diminuisci_terzo_numero()"> - </td></tr>
        </table>
</div>
  <!--  <button>+   </button> 
    <button>+   </button> 
    <button>+   </button>
</br>
    <input readonly="text" size="1" id="primo_numero" style="z-index=9999"> 
    <input readonly="text" size="1" id="secondo_numero" style="z-index=9999"> 
    <input readonly="text" size="1" id="terzo_numero" style="z-index=9999"> 
</br>
    <button>-   </button> 
    <button>-   </button> 
    <button>-   </button>-->
    </div> 
    <script type="text/javascript">
    
    function aumenta_primo_numero(){
        var primo_numero = document.getElementById("primo_numero").innerText;
        var n = parseInt(primo_numero);
        if(n == 9){
            n = 0;
        }
        else{
            n = n + 1;
        }
        var new_number = String(n);
        document.getElementById("primo_numero").innerHTML = new_number;
    }
    function aumenta_secondo_numero(){
        var primo_numero = document.getElementById("secondo_numero").innerText;
        var n = parseInt(primo_numero);
        if(n == 9){
            n = 0;
        }
        else{
            n = n + 1;
        }
        var new_number = String(n);
        document.getElementById("secondo_numero").innerHTML = new_number;
    }
    function aumenta_terzo_numero(){
        var primo_numero = document.getElementById("terzo_numero").innerText;
        var n = parseInt(primo_numero);
        if(n == 9){
            n = 0;
        }
        else{
            n = n + 1;
        }
        var new_number = String(n);
        document.getElementById("terzo_numero").innerHTML = new_number;
    }
    function diminuisci_primo_numero(){
        var primo_numero = document.getElementById("primo_numero").innerText;
        var n = parseInt(primo_numero);
        if(n == 0){
            n = 9;
        }
        else{
            n = n - 1;
        }
        var new_number = String(n);
        document.getElementById("primo_numero").innerHTML = new_number;
    }
    function diminuisci_secondo_numero(){
        var primo_numero = document.getElementById("secondo_numero").innerText;
        var n = parseInt(primo_numero);
        if(n == 0){
            n = 9;
        }
        else{
            n = n - 1;
        }
        var new_number = String(n);
        document.getElementById("secondo_numero").innerHTML = new_number;
    }
    function diminuisci_terzo_numero(){
        var primo_numero = document.getElementById("terzo_numero").innerText;
        var n = parseInt(primo_numero);
        if(n == 0){
            n = 9;
        }
        else{
            n = n - 1;
        }
        var new_number = String(n);
        document.getElementById("terzo_numero").innerHTML = new_number;
    }
</script>
    <script src="page3.js"></script>
</body>
</html>