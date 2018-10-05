<?php
session_start();

setcookie ("sortie", htmlentities($_POST['sortie']), time() + 365*24*3600);
setcookie ("cercle_amis", htmlentities($_POST['cercle_amis']), time() + 365*24*3600);
setcookie ("socialisation", htmlentities($_POST['socialisation']), time() + 365*24*3600);
setcookie ("situation", htmlentities($_POST['situation']), time() + 365*24*3600);
setcookie ("etat_lieux", htmlentities($_POST['etat_lieux']), time() + 365*24*3600);


require '../model/connectDb.php';

$sortie 	   = htmlentities($_POST['sortie']);
$cercle_amis   = htmlentities($_POST['cercle_amis']);
$socialisation = htmlentities($_POST['socialisation']);
$situation     = htmlentities($_POST['situation']);
$etat_lieux    = htmlentities($_POST['etat_lieux']);

$session_nom 	= $_SESSION['nom'];
$session_prenom = $_SESSION['prenom'];
$session_mail   = $_SESSION['mail'];

$_SESSION['sortie'] 	   = $sortie;
$_SESSION['cercle_amis']   = $cercle_amis;
$_SESSION['socialisation'] = $socialisation;
$_SESSION['situation']	   = $situation;
$_SESSION['etat_lieux']    = $etat_lieux;




if(!empty($sortie) && !empty($cercle_amis) && !empty($socialisation) && !empty($situation) && !empty($etat_lieux)){


			// Insertion des champs d'inscriptions à l'aide d'une requête préparée
			require '../model/update_profile.php';
			
			header('Location: ../vue/accueil.php');



}else{

		$_SESSION['erreur'] = 5 ;
		header('Location: ../vue/erreur.php');
	}








?>