<?php

	require '../model/connectDb.php';
	
	$session_nom 	= $_SESSION['nom'];
	$session_prenom = $_SESSION['prenom'];
	$session_mail   = $_SESSION['mail'];
	

	require '../model/select_activite.php';

	
	while ($data = $req->fetch())
	{
		
		if($data['sortie'] == 1){
			echo '<li>Essayé de sortir une dizaine de minute par jours</li>'; 
		}
		
		if($data['cercle_amis'] == 1){
			echo '<li>Inscris-toi a un cours du soir</li>';
		
		}
		
		if($data['socialisation'] == 1){
			echo '<li>Entamé une discution <br>avec un/une inconnue</li>';
		}
		
		if($data['etat_lieux'] == 'lieux_sale' Or $data['etat_lieux'] == 'lieux_moyennement_propre') {
			 echo '<li>Nettoyer son habitation</li>'; 
		}
		
		
		if($data['sortie'] == 3){
			echo '<li>Sortir 30 minutes par jours</li>'; 
		}
		
		if($data['cercle_amis'] == 3){
			echo '<li>Entamé une discution avec une personne de ton voisinage</li>';
		}
		
		if($data['socialisation'] == 3){
			echo '<li>Ce mettre à la pratique du yoga</li>';
		}
	}
?>