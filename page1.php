<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="primolivello.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="./js/jquery.rwdImageMaps.js"></script>
    
    <title>Document</title>
</head>
<body>
<div class="bg" onmousemove="moveTorch(event)"></div>
    <div class="torch" >
      <img src="./img/casa_quattro.png" usemap="#interruttore" id="luce" width="1360" height="765">
      <map name="interruttore">
        <area shape="rect" alt="parte 1 immagine" coords="93,238,127,282" href="#" onclick="illuminastanza();" title="interruttore">
        <area shape="rect" alt="parte 2 immagine" coords="42,643,125,680" href="#" onclick="javascript:popup();" title="interruttore">

</map>
    </div>
    <script>
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
	    var html = "<div class='sfondo'></div>"
		  +"	<div class='corpo'>"
		  +"		<p class='chiudi'>CHIUDI</p>"
		  +"	</div>";
	    $("body").prepend(html);
        $(".sfondo, .chiudi").click(function() {popup_close();});
    }
    function popup_close(){
	$(".sfondo, .corpo").remove();
    }
    
        </script>
        <script>
            $(document).ready(function(e) {
                $("#luce").rwdImageMaps();
            });
        </script>
    </div>    
    </div>
</body>
</html>
