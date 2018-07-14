<?php
    $mysql_host = '127.0.0.1';
    $mysql_gebruiker = 'root';
    $mysql_wachtwoord = '';
    $mysql_database = 'nynkegang';

    $con = mysqli_connect($mysql_host, $mysql_gebruiker, $mysql_wachtwoord, $mysql_database);


    $sql = 'UPDATE Klanten1 SET naam = "Jan de Groot" WHERE klantid = 4';
    $result = mysqli_query($con,$sql);
    if ($result) {
        echo "Het is gelukt";
    }else{
        echo "Niet gelukt";
    }
?>