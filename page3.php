<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <div class="stanza_3">
        <img src="./img/stanza3.png" usemap="#typewriter" id="type_writer" width="1276" height="718">
        <map name="typewriter">
           <area id="type" shape="rect" coords="420,338,568,416" href="#" title="macchina_da_scrivere">
           <area id="porta" shape="rect" coords="913,177,1161,519" href="#" title="porta" style="cursor: pointer">  
        </map>
        <div id="macchina_da_scrivere" class="popup_macchina_da_scrivere">
            <div class="foglio">
                <form autocomplete="off"><input type="text" id="tre" name="indovinello" minlenght="1" size="10" class="campo_scrivibile"></form>
            </div>
            <img src="./img/macchina_da_scrivere.png" class="foto_mds">
            <p id="esci_mds" class="exit">Esci</p>
        </div>
    <div class="lucchetto_popup">
        <p id="esci_lock" class="exit_lucchetto" >Esci</p>
        <div class="lucchetto">
            <ul>
                <li class="rotor">
                    <ul>
                        <li><button class="bottone_rotore" onclick="addRotor1();">+</button></li>
                        <li><input class="inserire_numero" id="primo_numero" type="number" readonly value="0"></li>
                        <li><button class="bottone_rotore" onclick="subRotor1()">-</button></li>
                    </ul>
                </li>
                <li class="rotor">
                    <ul>
                        <li><button class="bottone_rotore" onclick="addRotor2()";>+</button></li>
                        <li><input class="inserire_numero"  id="secondo_numero" type="number" readonly value="0";></li>
                        <li><button class="bottone_rotore" onclick="subRotor2()">-</button></li>
                    </ul>
                </li>
                <li class="rotor">
                    <ul>
                        <li><button class="bottone_rotore" onclick="addRotor3()";>+</button></li>
                        <li><input class="inserire_numero"  id="terzo_numero" type="number" readonly value="0"></li>
                        <li><button class="bottone_rotore" onclick="subRotor3()">-</button></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <script src="./page3.js"></script>
</body>
</html>