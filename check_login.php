<?php
if(!isset($_POST['log'])){
    header("Location: /");
}
else{
    $dbconn = pg_connect("host=localhost port=5432 dbname=HousEscape user=postgres password=biar")
    or die ('Could not connect: '. pg_last_error());
}
?>