<?php
	do{
		echo "Confirmez vous la modification (oui/non) ? \n";
		$reponse = rtrim(fgets(STDIN));
		if($reponse != "oui" && $reponse != "non"){
			echo"Réponse incorrecte !\n";
		}
	}while($reponse != "oui" && $reponse != "non");
		#echo "Confirmez-vous la modification (oui/non) ? \n" ;
		#$reponse = rtrim(fgets(STDIN));
		#echo "Réponse incorecte !\n";

	
	if($reponse == "oui"){
		echo "\n Modification en cours ... \n" ;
	}
	else{
		echo "\n Modification annulée \n" ;
	}
?>
