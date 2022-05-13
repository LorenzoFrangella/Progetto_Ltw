<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="primolivello.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="./js/jquery.rwdImageMaps.js"></script>
    <script src="./housescape.js"></script>
    <script src="./orologio/script.js"></script>
    <link rel="stylesheet" href="./orologio/style.css">
    <title>Document</title>
</head>
<body id="primo">
   
<div class="bg" onmousemove="moveTorch(event)"></div>
<div class="torch" >
    <img src="./img/casa_quattro.png" usemap="#interruttore" id="luce" width="1360" height="765">
    <map name="interruttore">
        <area id="lumus" shape="rect" alt="parte 1 immagine" coords="93,238,127,282" href="#" onclick="illuminastanza();" title="interruttore">
        <area id="pergamena" shape="rect" alt="parte 2 immagine" coords="42,643,125,680" href="#" onclick="javascript:popup();" title="pergamena" style="cursor:url('./img/torcia.png'),auto">
        <area shape="rect" coords="1128,126,1292,242" href="#" id="tastiera_colorata">
        <area shape="rect" coords="500,239,538,277" href="#" id="orologio_fisso">
        <area shape="rect" coords="178,300,207,353" href="#" id="orologio">
    </map>
</div>
<!--
<img src="./img/orologio.png" id="foto_orologio" class="popup_orologio">-->
<img src="./img/tastiera_colorata.png" id="foto_tastiera" class="popup_tastiera">
<p class="exit" id="esci"> Esci</p>
<p class="exit" id="esci_due"> Esci</p>
    <div class="clock">
        <div id="clockContainer">
            <div id="hour"></div>
            <div id="minute"></div>
        </div>
        <input class="tasto" type="time" id="time">
        <button  class="tasto" id="orario" onclick="inserisci_orario()">inserisci orario </button> 
    </div>

    <script>
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
            if(interruttore){
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
            if(interruttore){
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
                $(document).ready(function(){
                    $("#luce").css("-webkit-filter", "blur(0px)");});
                    $("#pergamena").css("cursor","pointer");
                    $("#tastiera_colorata").css("cursor","pointer");
            $("#orologio").css("cursor","pointer");
            $("#orologio_fisso").css("cursor","pointer");
            $(".clock").fadeOut(500);
            $("#esci_due").fadeOut(500);
        });
        /*
        $("#orologio_fisso").click(function(){
            $(document).ready(function(){
                $("#luce").css("-webkit-felter","blur(10px)");
            });
            $("#foto_orologio").fadeIn(500);
            $("#esci").fadeIn(500);
        });
        $("#esci").click(function(){
            $(document).ready(function(){
            $("#luce").css("-webkit-filter", "blur(0px)");
            });
            $("#foto_orologio").fadeOut(500);
            $("#esci").fadeOut(500);
        });*/
    </script>

</body>
</html>
