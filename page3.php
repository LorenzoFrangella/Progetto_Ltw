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
        <!--img  class="lucchetto" src="./img/lucchetto.png"-->
        <img src="./img/macchina_da_scrivere.png" id="macchina_da_scrivere" class="popup_macchina_da_scrivere">
    </div>
    <script>
        $("#type").click(function(){
            $("#type").css("cursor","default");
            $("#type_writer").addClass("blur");
            $("#macchina_da_scrivere").fadeIn(500);
        });
        $(document).ready(function(e) {
        $("#type_writer").rwdImageMaps();
    });
    </script>
</body>
</html>