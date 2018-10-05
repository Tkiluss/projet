<?php
session_start();
require '../model/connectDb.php';
$_SESSION['erreur'] = 0;
?>


<!DOCTYPE html>
<html>
  <head>
	<link href="css/style.inscription.css" rel="stylesheet">
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
	  
		<div id="intro">
			<div class="texte">
				<p>Bonjour, laissez-moi-me présenté, Bearry pour vous servir ! Je vais vous expliquer mon fonctionnement.
				Si vous voyez ceci, cela veut dire que c'est la première fois que nous nous rencontrons ! Je vais donc vous proposer une série de questions, 
				histoire de vous connaitre un peu mieux ! (il est important de renseigner tous les champs pour mon bon fonctionnement) <br><br>
				Commençons dès que vous serez prêt... </p><br>
				<form> 
					<input type="button" value="Commencer" name="button" id="button1" onclick= hideIntro()>
				</form>
			</div>
		</div>


		<div id="formulaire">
			<form method='post' action="../controller/traitement.inscription.php">

					Quel-est ton nom ? <br><br>
			        	<input type="text" id="r1" name="nom_user"><br><br>

					Quel-est ton prenom ?<br><br>
						<input type="text" id="r2" name="prenom_user"><br><br>


				    Quel-est ton âge ?<br><br>
						<input type="text" id="r3" name="age_user"><br><br>


				    Quel-est ton adresse mail ?<br><br>
						<input type="text" id="r4" name="mail_user"><br><br>

			
				    Est-tu un homme ou une femme ?<br><br>
					    <input type="radio" id="r5" name="genre_user" value="homme" >Homme<br>
					    <input type="radio" id="r6" name="genre_user" value="femme">Femme<br><br>

				    Choisi ton mot de passe<br><br>
						<input type="password" id="r7" name="mdp_user"><br><br>
					

				    Confirme ton mot de passe<br><br>
						<input type="password" id="r8" name="validation_mdp_user"><br><br>
						<input type="submit" value="Valider" name="validation_formulaire" id="boutonValidation">
		
			</form>
		</div>

		    
			<script src="../script/jquery.js"></script>

			    <script>
				
			    $(document).ready(function(){
				
				    $('#formulaire').hide();	  
					$('#button1').on('click', function hideIntro(){
					  
						$('#intro').fadeOut(400);
						$('#formulaire').fadeIn(3000);

					});
					});

				</script>

	</div>
  </body>
</html>