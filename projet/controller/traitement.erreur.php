<?php 

	if ($_SESSION['erreur'] == 1) {
		echo 'Mot de passe non confirmer. <a href="../vue/inscription.php">Réessayer</a>';
	}

	if ($_SESSION['erreur'] == 2) {
		echo 'Votre âge est mal renseigner. Un nombre est attendus <a href="../vue/inscription.php">Réessayer</a>';
	}

	if ($_SESSION['erreur'] == 3) {
	echo 'Format de l\'adresse mail non valide.<a href="../vue/inscription.php">Réessayer</a>';
	}

	if ($_SESSION['erreur'] == 4) {
	echo 'Un des champs n\'est pas renseigner. <a href="../vue/inscription.php">Réessayer</a>';
	}





	if ($_SESSION['erreur'] == 5) {
	echo 'Un des champs n\'est pas renseigner. <a href="../vue/profile.php">Réessayer</a>';
	
	}

	if ($_SESSION['erreur'] == 6) {
	echo 'Veuillez-renseignez les champs disponibles. <a href="../vue/derniere_activite.php">Réessayer</a>';
	}

	if ($_SESSION['erreur'] == 7) {
	echo 'Vos identifiants sont incorrects ! <a href="../vue/connexion.php">Réessayer</a>';
	}

	if ($_SESSION['erreur'] == 8) {
	echo 'Format de l\'adresse mail non valide. <a href="../vue/connexion.php">Réessayer</a>';
	}

	if ($_SESSION['erreur'] == 9) {
	echo 'Un des champs n\'est pas renseigner ! <a href="../vue/connexion.php">Réessayer</a>';
	}

?>