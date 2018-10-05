<?php

			$req = $bdd->prepare('UPDATE user
								  SET sortie="'.$sortie.'", cercle_amis="'.$cercle_amis.'", socialisation="'.$socialisation.'", situation="'.$situation.'", etat_lieux="'.$etat_lieux.'"
								  WHERE nom_user="'.$session_nom.'" AND prenom_user="'.$session_prenom.'" AND mail_user="'.$session_mail.'"');

			$req->execute();

?>