<?php
if (!(isset($_POST['reg']))) {
    header("Location: /");
    
}
else {
    $dbconn = pg_connect("host=localhost port=5432 dbname=HousEscape 
                user=postgres password=lorenzo") 
                or die('Could not connect: ' . pg_last_error());
}
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
            if ($dbconn) {
                $email = $_POST['email'];
                $q1="select * from utente where email= $1";
                $result = pg_query_params($dbconn, $q1, array($email));
                if ($line=pg_fetch_array($result, null, PGSQL_ASSOC)) {
                    echo "<h1> Sorry, you are already a registered user</h1>
                        <a href=./login.php> Click here to login </a>";
                }
                else {
                    $nome = $_POST['reg_name'];
                    $cognome = $_POST['reg_surn'];
                    $password = md5($_POST['reg_pass']);
                    $nickname = $_POST['reg_nick'];
                    $q2 = "insert into utente values ($1,$2,$3,$4,$5)";
                    $data = pg_query_params($dbconn, $q2,
                        array($nome,$cognome,$nickname,$email,$password));
                    if ($data) {
                        echo "<h1> Registration is completed. 
                            Start using the website <br/></h1>";
                        echo "<a href=../Welcome.php?name=$nome> Premi qui </a>
                            per inziare ad utilizzare il sito web";
                    }
                }
            }
        ?> 
    </body>
</html>