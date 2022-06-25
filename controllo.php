<?php 

/*$dbconn = pg_connect("host=ec2-52-18-116-67.eu-west-1.compute.amazonaws.com port=5432 dbname=d4bkh2i9corr5n 
    user=bfknyktpivqfnf password=77b57797fef1f71d2a56428d3460620c69aaf2fe90fc17b935b507c95576ce82")
or die('Could not connect: ' . pg_last_error()); 
$dbconn = pg_connect("host=ec2-99-80-170-190.eu-west-1.compute.amazonaws.com
    port=5432 
    dbname=da7su439m4ci8v
    user=hlqbluotyefoma
    password=ca73cdab6879cd6f699413b7b4c0b71c93ba2b18b046497f816bd304a2f6c24b
    ") or die('Could not connect: ' . pg_last_error());*/
    $dbconn = pg_connect("host=localhost port=5432 dbname=HousEscape user=postgres password=biar")
        or die('Could not connect: ' . pg_last_error());

$q1="select * from utente where email= $1";
$q2="select * from utente where nickname= $1";


if(isset($_GET['nickname'])){
    $nickname = $_GET['nickname'];
    $result = pg_query_params($dbconn, $q2, array($nickname));
    if($line=pg_fetch_array($result, null, PGSQL_ASSOC)){
        echo "Nome utente già utilizzato";
    }
}

if(isset($_GET['email'])){
    $email = $_GET['email'];
    $result_2 = pg_query_params($dbconn, $q1, array($email));
    if($line=pg_fetch_array($result_2, null, PGSQL_ASSOC)){
        echo "Email già utilizzata";
    }
}
?>