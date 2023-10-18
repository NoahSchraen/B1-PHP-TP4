<?php
	define( "NB_SIEGES" , 40 ) ;
	for($numSiege = 2 ; $numSiege <= NB_SIEGES ; $numSiege = $numSiege + 3 ){
		if( $numSiege % 1 == 0){
			echo "Siège numéro " , $numSiege , "\n" ;
		}
	}
	
?>
