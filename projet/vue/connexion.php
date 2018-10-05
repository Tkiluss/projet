<?php
session_start();
require '../model/connectDb.php';
$_SESSION['erreur']= 0;
print_r($_COOKIE);
?>


<!DOCTYPE html>
<html>
  <head>
	<link href="css/style.connexion.css" rel="stylesheet">
	<link href="css/normalize.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Bearry</title>
  </head>
  
  <body>
  	<div id="content">

	  	<div id="iaFace">
			<img src="css/iaFace.png">
		</div>


		<div id="formulaire">
			<form method='post' action="../controller/traitement.connexion.php">
					<div class="texte">
				    Quel est ton adresse mail ?<br><br>
						<input type="text" id="mail" name="mail_user"><br><br>

				    Quel est ton mot de passe ?<br><br>
						<input type="password" id="mdp" name="mdp_user"><br><br>
						<input type="submit" value="Valider" name="validation_formulaire" id="boutonValidation">
					<a href="inscription.php">Pas encore inscrit ?</a>
					</div>
			</form>
		</div>
	</div>
  </body>
</html>