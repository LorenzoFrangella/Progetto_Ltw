<?php
/*if(!isset($_POST['log'])){
    header("Location: /");
}
*/{
    $dbconn = pg_connect("host=localhost port=5432 dbname=HousEscape 
    user=postgres password=biar")
    or die ('Could not connect: '. pg_last_error());//questo va levato!!! 
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
            $q1 = "select * from utente where email = $1 || nickname = $1";
            $result = pg_query_params($dbconn,$q1,array($email));
            if($line= pg_fetch_array($result,null,PGSQL_ASSOC)){
                $password = md5($_POST['password']);
                $q2 = "select * from utente where (email = $1 || nickname = $1) and pass = $2";
                $result = pg_query_params($dbconn,$q2,array($email,$password));
                if($line=pg_fetch_array($result,null,PGSQL_ASSOC)){
                    //echo $line;
                    echo "<h1> Login completed successfully</h1>";
                    $_SESSION['email'] = $email;
                    $q3 = "select nickname from utente where email = $1";
                    $result = pg_query_params($dbconn,$q3,array($email));
                    $_SESSION['nickname'] = string($result);
                    
                }
            }
        }
    ?>
</body>
</html>