<?php 
    session_start();
    $dbconn = pg_connect("host=ec2-52-18-116-67.eu-west-1.compute.amazonaws.com port=5432 dbname=d4bkh2i9corr5n 
    user=bfknyktpivqfnf password=77b57797fef1f71d2a56428d3460620c69aaf2fe90fc17b935b507c95576ce82")
        or die('Could not connect: ' . pg_last_error()); //questo va levato!!!

?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/exit.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./stile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <title>HousEscape</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a href="./index.php" class="logo d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img src="./img/exit.png" style="width:40px;">
          <h3 style="padding-top: 8px; padding-left:5px">HousEscape</h3>
        </a>
      </div>
    </nav>
    <div class="container" id="cont_class">
        <h1 id="class_title" class="titolo animated bounceInDown">Classifica</h1>
        <div class="container">
            <div class="row">
              <table>
                <tr><th>Posizione</th><th>Nickname</th><th>Tempo</th></tr>
                <?php
                if($dbconn){
                  $q1 = "select nickname, minuti,secondi from classifica order by totale_secondi";
                  $result = pg_query_params($dbconn, $q1, array());
                  $i = 1;
                  while($row = pg_fetch_row($result)){
                    echo "<tr><td>" .$i. "</td>
                    <td>" .$row[0]. "</td>
                    <td>" .$row[1]. ":" .$row[2]. "</td></tr>";
                    $i = $i + 1;
                  }
                }
                ?>
                </table>
        </div>
    </div>
</body>
</html>