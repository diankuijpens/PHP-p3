<?php
// Method = POST
if ( isset($_POST['verzenden']) ) { // Is op de button verzenden geklikt ?
$naam = $_POST['naam'];
$wachtwoord = $_POST['wachtwoord'];
echo "Naam is: $naam en het wachtwoord is: $wachtwoord !";
}
// Method = GET  Let op de url: verwerk.php?naam=????&wachtwoord=????
if ( isset($_GET['verzenden']) ) { // Is op de button verzenden geklikt ?
$naam = $_GET['naam'];
$wachtwoord = $_GET['wachtwoord'];
echo "Naam is: $naam en het wachtwoord is: $wachtwoord !";
}
?>