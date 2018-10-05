<?php

	$req = $bdd->prepare('SELECT sortie, cercle_amis, socialisation, etat_lieux FROM user
						  WHERE nom_user="'.$session_nom.'" AND prenom_user="'.$session_prenom.'" AND mail_user="'.$session_mail.'"');
	
	$req->execute();

?>