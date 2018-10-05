<?php
session_start();

require '../model/connectDb.php';

//Insertion des post user dans des variables + hash mot de passe et echappemant des caracteres speciaux
$prenom_user = htmlentities($_POST['prenom_user']);
$nom_user	 = htmlentities($_POST['nom_user']);
$mdp_user	 = sha1($_POST['mdp_user']);
$mail_user	 = htmlentities($_POST['mail_user']);
$genre_user	 = htmlentities($_POST['genre_user']);
$age_user	 = htmlentities($_POST['age_user']);
$mdp_confirmation = sha1($_POST['validation_mdp_user']); 


//Verifie si les champs sont renseigner
if(!empty($prenom_user) && !empty($nom_user) && !empty($age_user) && !empty($mail_user) && !empty($mdp_user) && !empty($mdp_confirmation)){	

			//verifie si le post mail_user correspond au type d'entrer attendu par la fonction PHP filter_var 
			if (filter_var($mail_user, FILTER_VALIDATE_EMAIL)) {
			
				//verifie si le poste age_user correspond au format numérique
				if(is_numeric($age_user)){
					
					if ($mdp_confirmation == $mdp_user){

						//Si toutes les conditions ok appel du model insert_user, 
						//attribution de certains post user dans des variables de sessions 
						//redirection de l'user sur la page profile.php'

						session_start();

						require '../model/insert_user.php';

						$_SESSION['nom'] = $nom_user;
						$_SESSION['prenom'] = $prenom_user;
						$_SESSION['mail']= $mail_user;

						header('Location: ../vue/profile.php');
					
						


					}else{

						$_SESSION['erreur'] = 1; 
						header('Location: ../vue/erreur.php');
					}
					
				}else{
					$_SESSION['erreur'] = 2; 
					header('Location: ../vue/erreur.php');
					 }
					
			
			} else {	

					$_SESSION['erreur'] = 3; 
					header('Location: ../vue/erreur.php');
					}
			
}else{
	$_SESSION['erreur'] = 4; 
	header('Location: ../vue/erreur.php');
}
		
?>