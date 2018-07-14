<!DOCTYPE html>
<html>
	<body>
		<p>
			<?php
				class leerling {
					var $naam;
					var $idnummer;
					var $klas;
					
					function setnaam($naam) {
						$this->naam = $naam;
					}
					
					function setidnummer($id) {
						$this->idnummer = $id;
					}
					
					function setklas($klas) {
						$this->klas = $klas;
					}
				}
				
				$llng = new leerling();
				$llng->setnaam("Dian Kuijpens");
				$llng->setidnummer(119651);
				$llng->setklas("Vict4v1a");
				
				echo "Naam: ";
				echo $llng->naam;
				echo "<br>ID nummer: ";
				echo $llng->idnummer;
				echo "<br>Klas: ";
				echo $llng->klas;
			?>
        </p>
	</body>
</html>