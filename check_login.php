<?php
if(!isset($_POST['log'])){
    echo "sium";
   //header("Location: /");
}
{
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
            $q1 = "select * from utente where email = $1 or nickname = $1";
            $result = pg_query_params($dbconn,$q1,array($nick_email));
            if($line= pg_fetch_array($result,null,PGSQL_ASSOC)){
                $password = md5($_POST['password']);
                $q2 = "select * from utente where (email = $1 or nickname = $1) and pass = $2";
                $data = pg_query_params($dbconn,$q2,array($nick_email,$password));
                if($data){
                    echo "<h1> Login completed successfully</h1>";
                    //$_SESSION['email'] = $nick_email;
                    $q3 = "select nickname from utente where email = $1 or nickname = $1";
                    $result = pg_query_params($dbconn,$q3,array($nick_email));

                    $_SESSION['nickname'] = pg_fetch_result($result,0,0);
                    //echo $_SESSION['nickname'];
                   // echo $_SESSION['nickname'];

                    
                }
            }
        }
    ?>
</body>
</html>