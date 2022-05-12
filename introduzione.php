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
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script type="text/javascript">
function page_scroll()
{
 $("html, body").animate({ scrollTop: $(document).height() }, 18000);
}
function stop_scroll()
{
 $("html, body").stop();
}
</script>
    <link rel="icon" href="./img/exit.png">
    <title>Introduzione</title>
</head>
<body id="sfondo_intro">
    <div class = "container" >
        <div class="box_intro" onmouseenter="stop_scroll()" onmouseleave="page_scroll()">
        <h2 class = "intro">
        Sei intrappolato all'interno di una casa abbandonata.
    </br>
    </br>
        Qualcuno ti ha fatto uno scherzo e ha spento le luci. Non ti puoi muovere se è tutto buio.
    </br>
    </br>
        Trova la chiave e accedi all'ultima stanza, qui troverai l'uscita celata dietro un ultimo indovinello nascosto all'interno della casa.</br>
    </h2>
    <div class="entra" style="text-align:center"><a href='./page1.php'><button type='button' class='btn btn-warning bottone_inizio'><b>Entra nella casa!</b>
</div></div>
<script>
        $(document).ready(function() {
                $("html, body").animate({
                    scrollTop: $(
                      'html, body').get(0).scrollHeight
                }, 18000);
            });
    </script>
</body>
</html>