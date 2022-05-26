<?php
session_start();
if(!isset($_POST['log'])){
    header("Location: /");
}
else{
    /*$dbconn = pg_connect("host=localhost port=5432 dbname=HousEscape user=postgres password=biar") or die('Could not connect: ' . pg_last_error());*/

    

    $dbconn = pg_connect("host=ec2-52-18-116-67.eu-west-1.compute.amazonaws.com port=5432 dbname=d4bkh2i9corr5n 
    user=bfknyktpivqfnf password=77b57797fef1f71d2a56428d3460620c69aaf2fe90fc17b935b507c95576ce82")
        or die('Could not connect: ' . pg_last_error()); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
        if($dbconn){
            $nick_email = $_POST['nick_email'];
            $q1 = "select * from utente where email = $1 or nickname = $1";
            $result = pg_query_params($dbconn,$q1,array($nick_email));
            if($line= pg_fetch_array($result,null,PGSQL_ASSOC)){
                $password = md5($_POST['password']);

                $q2 = "select * from utente where (email = $1 or nickname=$1) and pass = $2";
                $data = pg_query_params($dbconn,$q2,array($nick_email,$password));
                $num_risultati = pg_num_rows($data);
                if($num_risultati==1){
                    $username = pg_fetch_result($data,0,2);
                    $_SESSION['nickname'] = $username;
                    //echo $_SESSION['nickname'];
                    echo $_SESSION['nickname'];
                    $_SESSION['render'] = 1;

                    if(!isset($_SESSION['begin_game']))header("Location: /");

                    else header("Location: /primo_livello.php");
                }
                else{
                    header("Location: /login.php?error=error_username_or_pass");
                }
            }
            else{
                header("Location: /login.php?error=usr_not_found");
            }
        }
    ?>
</body>
</html>