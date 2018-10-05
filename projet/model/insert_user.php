<?php

	$req = $bdd->prepare('INSERT INTO user (nom_user, prenom_user, age_user, mail_user, genre_user, mdp_user) 
									  VALUES(:nom_user, :prenom_user, :age_user, :mail_user, :genre_user, :mdp_user)');

	$req->execute(array(

						'nom_user' 	  => $nom_user, 
						'prenom_user' => $prenom_user, 
						'age_user' 	  => $age_user, 
						'mail_user'   => $mail_user, 
						'genre_user'  => $genre_user,
						'mdp_user'	  => $mdp_user  ));