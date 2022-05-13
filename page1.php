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
    </map>
</div>
<img src="./img/tastiera_colorata.png" id="foto_tastiera" class="popup_tastiera">
<p class="exit" id="esci"> Esci</p>
    <script>
        $(document).ready(function(e) {
            $("#luce").rwdImageMaps();
        });
        $("#lumus").click(function(){
            $("#pergamena").css("cursor","pointer");
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
                $("#foto_tastiera").fadeIn(500);
                $("#esci").fadeIn(500);
            }
        })
        $("#esci").click(function(){
            $(document).ready(function(){
            $("#luce").css("-webkit-filter", "blur(0px)");
            });
            $("#foto_tastiera").fadeOut(500);
            $("#esci").fadeOut(500);
        });
    </script>

</body>
</html>
