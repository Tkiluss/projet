<?php
session_start();
require '../model/connectDb.php';

$activite = $_POST['activite'];

$session_nom 	= $_SESSION['nom'];
$session_prenom = $_SESSION['prenom'];
$session_mail   = $_SESSION['mail'];

if(!empty($activite)){
	if($activite == 1){
			
			require '../model/update_derniere_activite.php';
			
			header('Location: ../vue/accueil.php');
			
		}else{
			
			header('Location: ../vue/accueil.php');

		}
	
	


}else{
	$_SESSION['erreur'] = 6;
	header('Location: ../vue/erreur.php');
}

 
?>