<?php
	$nbAleatoire = rand(1, 100) ;
	echo "Saisir un nombre entier compris entre 1 et 100 : " ;
	$nbDevine = rtrim(fgets(STDIN)) ;
	$nbCoups = 0 ;
	
	while($nbDevine != $nbAleatoire){
		if($nbDevine == 0){
			echo "Au revoir Capitaine ! \n";
			break ;
		}
		elseif($nbDevine > 100 || $nbDevine < 0){
			echo "Valeur incorrecte !\n\n";
			echo "Saisir un nombre entier compris entre 1 et 100 : " ;
			$nbDevine = rtrim(fgets(STDIN));
		}
		elseif($nbDevine < $nbAleatoire){
			echo "Trop petit !\n\n" ;
			$nbCoups = $nbCoups + 1 ;
			echo "Saisir un nombre entier compris entre 1 et 100 : " ;
			$nbDevine = rtrim(fgets(STDIN));
		}
		elseif($nbDevine > $nbAleatoire){
			echo "Trop grand !\n\n" ;
			$nbCoups = $nbCoups + 1 ;
			echo "Saisir un nombre entier compris entre 1 et 100 : " ;
			$nbDevine = rtrim(fgets(STDIN));
		}
	}
	if($nbDevine == $nbAleatoire){
		echo "Féliciations Capitaine. Victoire en " , $nbCoups + 1 , " coups !\n";
	}
?>
