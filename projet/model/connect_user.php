<?php

		$req = $bdd->prepare('SELECT * FROM user
						WHERE mail_user=:mail_user AND mdp_user=:mdp_user');

						
			$req->execute(array(
			
				'mail_user'  => $mail_user,
				'mdp_user'	 => $mdp_user ));

			$resultat = $req->fetch();


?>