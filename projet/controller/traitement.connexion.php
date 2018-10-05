<?php
session_start();
require '../model/connectDb.php';

$mdp_user = sha1($_POST['mdp_user']);
$mail_user = htmlentities($_POST['mail_user']);


if (!empty($mdp_user) && !empty($mail_user)) {
	if (filter_var($mail_user, FILTER_VALIDATE_EMAIL)) {


		require '../model/connect_user.php';
			
			
		if ($resultat['mdp_user'] == $mdp_user && $resultat['mail_user'] == $mail_user) {
			
			session_start();

			$_SESSION['nom'] = $resultat['nom_user'];
			$_SESSION['prenom'] = $resultat['prenom_user'];
			$_SESSION['mail'] = $resultat['mail_user'];

			header('Location: ../vue/derniere_activite.php');
		}
		
		else {
				$_SESSION['erreur'] = 7;
				header('Location: ../vue/erreur.php');			
			}
			
	}else {

			$_SESSION['erreur'] = 8;
			header('Location: ../vue/erreur.php');
		}

}else {
		$_SESSION['erreur'] = 9;
		header('Location: ../vue/erreur.php');
		
		}

?>