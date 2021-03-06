<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./stile.css">
    <script src="./js/bootstrap.bundle.js"></script>
    <script src="./js/bootstrap.esm.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script type="text/javascript">
        var scrolling = 0;
        function page_scroll(){
            //animazione di scrolltop dell'introduzione alla casa
            $("html, body").animate({ scrollTop: $(document).height() }, 18000);
        }
        function stop_scroll(){
            $("html, body").stop();
        }
    </script>
    <link rel="icon" href="./img/exit.png">
    <title>Introduzione</title>
</head>
<body id="sfondo_intro">
    <div class = "container" >
        <!-- gestione dello scrolling se un utente scrolla per conto suo l'animazione si ferma -->
        <div class="box_intro" onwheel="stop_scroll()" onmouseleave="page_scroll()">
        <h2 class = "intro">
        Sei intrappolato all'interno di una casa abbandonata.
        </br>
        </br>
        All'interno delle stanze troverai degli enigmi, risolvili per poter uscire.</br>
        </br>
        </br>
        Qualcuno ti ha fatto uno scherzo e ha spento le luci, accendile prima di iniziare a muoverti.
        </h2>
        <div class="entra" style="text-align:center"><a href='./page1.php'><button type='button' onclick="avviatimer();"class='btn btn-warning bottone_inizio' id="entra_nella_casa"><b>Entra nella casa!</b></div>
        </div>
    </div>
<script>
    //avvio scrolling
        $(document).ready(function() {
                $("html, body").animate({
                    scrollTop: $(
                      'html, body').get(0).scrollHeight
                }, 18000);
        });
        function avviatimer(){
            window.parent.postMessage('avvia_timer', '*');
        }
</script>
</body>
</html>