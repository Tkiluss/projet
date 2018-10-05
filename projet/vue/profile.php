<?php
session_start();
require '../model/connectDb.php';
$_SESSION['erreur'] = 0;
?>


<!DOCTYPE html>
<html>
  <head>
	<link href="css/style.profile.css" rel="stylesheet">
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
  
  	<div id="questionProfile">
	<form method="post" action="../controller/traitement.profile.php">

        Estimes-tu que tu ne sors pas assez ?<br>
        <input type="radio" id="r4" name="sortie" value="1">Oui<br>
        <input type="radio" id="r5" name="sortie" value="2">Non<br><br>

	
        Aimerais-tu élargir ton cercle d'amis ?<br>
        <input type="radio" id="r6" name="cercle_amis" value="1">Oui<br>
        <input type="radio" id="r7" name="cercle_amis" value="2">Non<br><br>

        As-tu du mal à aller vers les autres ?<br>
        <input type="radio" id="r8" name="socialisation" value="1">Oui<br>
        <input type="radio" id="r9" name="socialisation" value="2">Non<br><br>


        Est-tu celibataire ou en couple ?<br>
        <input type="radio" id="r10" name="situation" value="celibataire">Célibataire<br>
        <input type="radio" id="r11" name="situation" value="couple">En couple<br><br>


        Dans quel état se trouve ton lieu de vie actuellement ?<br>
        <input type="radio" id="r12" name="etat_lieux" value="lieux_propre">C’est toujours ranger et propre<br>
        <input type="radio" id="r13" name="etat_lieux" value="lieux_moyennement_propre">Quelques petites choses trainent mais rien d’alarmant<br>
		<input type="radio" id="r14" name="etat_lieux" value="lieux_sale">C’est....humm...sale<br><br>
	

		<input type="submit" value="Valider" name="button" id="buttonVal">

	</form>
</div>
</div>

  </body>
</html>