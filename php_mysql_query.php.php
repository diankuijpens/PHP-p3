<?php
	// Voeg de database verbinding (uit de vorige sheet) toe
	require_once 'db_connect.php';

	$query = 'select * from employees';   // SQL code
	$result = mysqli_query($db_connect, $query);    // Voer SQL uit
	
	// Haal de gegevens op als een (assoc) array	
	while ( $data = mysqli_fetch_array($result, MYSQLI_ASSOC) )
	{
		// Schrijf de gegevens uit de MySQL-tabel naar het scherm
		echo 'Id = ' . $data['id'];
		echo 'Geboorte_datum = ' . $data['geboorte_datum'] . '<br>';
		echo 'Voornaam = ' . $data['voornaam'] . '<br>';
		echo 'Achternaam = ' . $data['achternaam'] . '<br>';
		echo 'Geslacht = ' . $data['geslacht'] . '<hr>';
	}		
?>
