<?php 
$mysql_host              =  '127.0.0.1:8080';            // Gebruik IP of localhost
$mysql_gebruiker      =  'root';                    // Gebruikersnaam in MySQL
$mysql_wachtwoord  =  '';                          // Meestal leeg ‘’
$mysql_dbnaam         =  'mysqlphptest';     // Naam van de database
$mysql_poort             =  3306;                   // Poort MySQL server <optioneel>

// Maak de connectie met MySQL
$db_connect = mysqli_connect( $mysql_host, $mysql_gebruiker, $mysql_wachtwoord, 
                                                  $mysql_dbnaam, $mysql_poort );

// Check de verbinding met de database
if ( mysqli_connect_errno() ) {
    echo 'Fout bij verbinding met MySQL: ' . mysqli_connect_error();
}
?>