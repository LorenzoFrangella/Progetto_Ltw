<?php
if (!(isset($_POST['reg']))) {
    header("Location: /");
    
}
else {
    /*$dbconn = pg_connect("host=ec2-52-18-116-67.eu-west-1.compute.amazonaws.com port=5432 dbname=d4bkh2i9corr5n 
    user=bfknyktpivqfnf password=77b57797fef1f71d2a56428d3460620c69aaf2fe90fc17b935b507c95576ce82")
        or die('Could not connect: ' . pg_last_error());*/
        $dbconn = pg_connect("host=localhost port=5432 dbname=HousEscape user=postgres password=biar")
        or die('Could not connect: ' . pg_last_error()); 
}
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
            if ($dbconn) {
                // Check email o nickname già utilizzati
                $email = $_POST['email'];
                $nickname = $_POST['reg_nick'];
                $q1="select * from utente where email= $1";
                $result = pg_query_params($dbconn, $q1, array($email));
                $q2="select * from utente where nickname= $1";
                $result_2 = pg_query_params($dbconn, $q2, array($nickname));
                if ($line=pg_fetch_array($result, null, PGSQL_ASSOC)) {
                    header("location: /registrazione.php?error=alr_reg");
                }
                else if ($line=pg_fetch_array($result_2, null, PGSQL_ASSOC)) {
                    header("location: /registrazione.php?error_nick=alr_reg");
                }
                
                else {
                    $nome = $_POST['reg_name'];
                    $cognome = $_POST['reg_surn'];
                    $password = md5($_POST['reg_pass']);
                    //INSERIMENTO NEL DATABASE DEL NUOVO UTENTE
                    $q2 = "insert into utente values ($1,$2,$3,$4,$5)";
                    $data = pg_query_params($dbconn, $q2,
                        array($nome,$cognome,$nickname,$email,$password));
                    if ($data) {
                        /*echo "<h1> Registration is completed. 
                            Start using the website <br/></h1>";
                        echo "<a href=../Welcome.php?name=$nome> Premi qui </a>
                            per inziare ad utilizzare il sito web";*/
                            header("Location: /");
                    }
                }
            }
        ?> 
    </body>
</html>