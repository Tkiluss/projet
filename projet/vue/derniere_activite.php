<?php
session_start();
require '../model/connectDb.php';
$_SESSION['erreur']=0;
?>


<!DOCTYPE html>
<html>
  <head>
	<link href="css/style.derniere_activite.css" rel="stylesheet">
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
			<form method='post' action="../controller/traitement.derniere_activite.php">
					<div class="texte">
				    As-tu réaliser les dernières activités que je t'ai proposées ?<br><br>
						<input type="radio" id="1" name="activite" value="1">Oui<br>
						<input type="radio" id="2" name="activite" value="2">Non<br><br>
						<input type="submit" value="Valider" name="validation_formulaire" id="boutonValidation">
					</div>
			</form>
		</div>
	</div>
  </body>
</html>