<?php
	echo"Saisir le nombre de passagers pour le groupe : ";
	$nbPassagers = rtrim(fgets(STDIN));
	$poidsTotal = 0;
	
	for($numeroPassager = 1 ; $numeroPassager <= $nbPassagers ; $numeroPassager = $numeroPassager + 1){
		echo "Saisir le poids (en kg) des bagages du passager " ;
		echo $numeroPassager , " : " ;
		$poids = rtrim(fgets(STDIN));
		$poidsTotal= $poidsTotal + $poids ;
	}
	echo "Le poids total des bagages de ce groupe est de ", $poidsTotal , " kg.\n"

?>
