<?php 

session_start();
require '../model/connectDb.php';

?>


<!DOCTYPE html>
<html>
  <head>
	<link href="css/style.erreur.css" rel="stylesheet">
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


		<div id="erreur">
			<div class="texte">
			Erreur : <?php include '../controller/traitement.erreur.php'; ?>
			</div>
		</div>
	</div>
  </body>
</html>