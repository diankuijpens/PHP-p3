<html>
	<head>
		<title>6.6.c</title>
	</head>
	<body>
		<form action="process.php" method="post">
			Eerste getal<br>
			<input type="text" name="getal1">
			<br>
			<select name="som">
				<option value="add">Optellen</option>
				<option value="subtract">Aftrekken</option>
				<option value="times">Vermenigvuldigen</option>
				<option value="divide">Delen</option>
				<option value="modulo">Modus</option>
			</select>
			<br>
			Tweede getal<br>
			<input type="text" name="getal2">
			<br><br>
			<input type="submit" value="Reken uit">
		</form>
<?php
			if (isset($_POST)) {
			$getal1=$_POST["getal1"];
			$getal2=$_POST["getal2"];		
			$som=$_POST["som"];
		
			if($_POST['som'] == 'add') {
			echo $getal1 + $getal2;
			}
			else if($_POST['som'] == 'subtract') {
			echo $getal1 - $getal2;
			}
			else if($_POST['som'] == 'times') {
			echo $getal1 * $getal2;
			} 
			else if($_POST['som'] == 'divide') {
			echo $getal1 / $getal2;
			}
			else if($_POST['som'] == 'modulo') {
			echo $getal1 % $getal2;
			}
		}
		?>
	</body>