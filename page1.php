<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="primolivello.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="./js/jquery.rwdImageMaps.js"></script>
    <script language="JavaScript" type="text/javascript"  src="./housescape.js"></script>
    <script language="JavaScript" type="text/javascript"  src="./orologio/script.js"></script>
    <script language="JavaScript" type="text/javascript"  src="page1.js"></script>
    <link rel="stylesheet" href="./orologio/style.css">
    <title>HouseEscape</title>
</head>
<body id="primo">
<div class="bg" onmousemove="moveTorch(event)"></div>
<div class="torch">
    <img src="./img/casa_quattro.png" usemap="#interruttore" id="luce" width="1360" height="765">
    <map name="interruttore">
        <area id="lumus" shape="rect" alt="parte 1 immagine" coords="93,238,127,282" href="#" onclick="illuminastanza();" title="interruttore">
        <area id="pergamena" shape="rect" alt="parte 2 immagine" coords="42,643,125,680" href="#" onclick="javascript:popup();" title="pergamena" style="cursor:url('./img/torcia.png'),auto">
        <area shape="rect" coords="1128,126,1292,242" href="#" id="tastiera_colorata" style="cursor:url('./img/torcia.png'),auto">
        <area shape="rect" coords="500,239,538,277" href="#" id="orologio_fisso">
        <area shape="rect" coords="178,300,207,353" href="#" id="orologio">
    </map>
</div>
<img src="./img/orologio_fisso.png" id="foto_orologio" class="popup_orologio">
<img src="./img/tastiera_colorata.png" id="foto_tastiera" class="popup_tastiera">
<p class="exit" id="esci"> Esci</p>
<p class="exit" id="esci_due"> Esci</p>
    <div class="clock">
        <div id="clockContainer">
            <div id="hour"></div>
            <div id="minute"></div>
        </div>
        <div class="inserisci_orario">
        <input class="tasto" type="time" id="time">
        <button  class="tasto" id="orario" onclick="inserisci_orario()">inserisci orario </button> 
    </div>
</div>
</body>
</html>
