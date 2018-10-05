<?php

			$req = $bdd->prepare('UPDATE user
								  SET sortie="3", cercle_amis="3", socialisation="3"
								  WHERE nom_user="'.$session_nom.'" AND prenom_user="'.$session_prenom.'" AND mail_user="'.$session_mail.'"');

			$req->execute();

?>