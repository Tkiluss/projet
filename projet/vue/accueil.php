<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
	<link href="css/style.accueil.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/normalize.css" rel="stylesheet">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <title>Bearry</title>
  </head>
  
  <body>
  	<div id="content">

			<div id="iaFace">
				<img src="css/iaSit.png">
			</div>
			
		<menu id="activite" class="animated bounceInDown">
			<div id="texte">
			<a href="#" id="lien-strasbourg" onclick=showSlide()>Strasbourg</a><br><br>
			<a href ="#" id="lien-colmar" onclick=showSlide()>Colmar</a><br><br>
			<a href="#" id="lien-haguenau" onclick=showSlide()>Haguenau</a><br><br>
			<a href ="#" id="lien-mulhouse" onclick=showSlide()>Mulhouse</a><br><br>
			
			</div>
		</menu>
		
	<div id="film">
		<iframe width="480" height="315" src="https://www.youtube.com/embed/sQp5tK6VMlA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>		
	</div>

			<!--todolist-->
		<div id="todolist" class="animated bounceInDown">
			<div id="myDIV" class="header">
			  <h2>Objectif à réaliser</h2>
			  <input type="text" id="myInput" placeholder="Ajouter..">
			  <span onclick="newElement()" class="addBtn">Add</span>
			</div>

			<ul id="myUL">
			  <?php include '../controller/activite.php' ?>
			</ul>
		</div>

	<div id="musique">
	<iframe width="480" height="200" src="https://www.youtube.com/embed/jyf0xKzDt8E" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	</div>


	<div class="slideshow-container" id="strasbourg">

		<div class="mySlides fade">
		  <div class="numbertext">1 / 3</div>
		  <img src="css/echange.jpg" style="width:100%">
		  <div class="text">Soirées : Language and Cultural Exchange<br>
		  Mardi 22/5/2018 Café Berlin 1 place d'Austerlitz 67000 Strasbourg</div>
		</div>

		<div class="mySlides fade">
		  <div class="numbertext">2 / 3</div>
		  <img src="css/cirque.jpg" style="width:100%">
		  <div class="text">Sports: <strong>Cours de cirque, </strong><br>
		Du Vendredi 15/9/2017<br>au Samedi 30/6/2018 La Clandestine - Strasbourg</div>
		</div>

		<div class="mySlides fade">
		  <div class="numbertext">3 / 3</div>
		  <img src="css/electro.jpg" style="width:100%">
		  <div class="text">Concert : <strong>Jungle</strong> 21/05/2018<br>
		  La Laiterie - Strasbourg
		  </div>
		</div>

		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>

		<br>

		<div style="text-align:center">
		  <span class="dot" onclick="currentSlide(1)"></span> 
		  <span class="dot" onclick="currentSlide(2)"></span> 
		  <span class="dot" onclick="currentSlide(3)"></span> 
		</div>
	</div>



	<div class="slideshow-container" id="colmar">

		<div class="mySlides fade">
		  <div class="numbertext">1 / 3</div>
		  <img src="css/aqme.jpg" style="width:100%">
		  <div class="text">Concert - Metal  : AqME<br>
		 Vendredi 25/5/2018 Le Grillen 19 rue des Jardins 68000  Colmar</div>
		</div>

		<div class="mySlides fade">
		  <div class="numbertext">2 / 3</div>
		  <img src="css/espoir.jpg" style="width:100%">
		  <div class="text">Manifestation : Fête de l'Amitié<br>
		Samedi 2/6/2018 Association Espoir - Colmar </div>
		</div>

		<div class="mySlides fade">
		  <div class="numbertext">3 / 3</div>
		  <img src="css/para.jpg" style="width:100%">
		  <div class="text">Sport :  Sauts en parachute<br>
		  Du Vendredi 8/6/2018 au Dimanche 10/6/2018 Colmar<br>
		  Renseignements : 03 89 86 01 84
		  </div>
		</div>

		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>

		<br>

		<div style="text-align:center">
		  <span class="dot" onclick="currentSlide(1)"></span> 
		  <span class="dot" onclick="currentSlide(2)"></span> 
		  <span class="dot" onclick="currentSlide(3)"></span> 
		</div>
	</div>



	<div class="slideshow-container" id="haguenau">

		<div class="mySlides fade">
		  <div class="numbertext">1 / 3</div>
		  <img src="css/kiosque.jpg" style="width:100%">
		  <div class="text">Exposition : Kiosque des Arts<br>
		  Dimanche 3/6/2018 Parc de la Gare 67500 Haguenau</div>
		</div>

		<div class="mySlides fade">
		  <div class="numbertext">2 / 3</div>
		  <img src="css/fete-music.jpg" style="width:100%">
		  <div class="text">Evênement: <strong>Fête de la musique, </strong><br>
		Jeudi 21/6/2018 Haguenau</div>
		</div>

		<div class="mySlides fade">
		  <div class="numbertext">3 / 3</div>
		  <img src="css/fete-juillet.jpg" style="width:100%">
		  <div class="text">Evênement: <strong>Fête nationale</strong><br>
		  Haguenau
		  </div>
		</div>

		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>

		<br>

		<div style="text-align:center">
		  <span class="dot" onclick="currentSlide(1)"></span> 
		  <span class="dot" onclick="currentSlide(2)"></span> 
		  <span class="dot" onclick="currentSlide(3)"></span> 
		</div>
	</div>


	<div class="slideshow-container" id="mulhouse">

		<div class="mySlides fade">
		  <div class="numbertext">1 / 3</div>
		  <img src="css/balade.jpg" style="width:100%">
		  <div class="text">Idées balades : le Haut-Rebberg<br>Du Dimanche 25/3/2018 au Dimanche 24/6/2018 à Mulhouse</div>
		</div>

		<div class="mySlides fade">
		  <div class="numbertext">2 / 3</div>
		  <img src="css/enquete.jpg" style="width:100%">
		  <div class="text">Soirées: <strong>Murder Party - La Grande Enquête, </strong><br> Samedi 26/5/2018<br> Cité du Train - Patrimoine SNCF - Mulhouse</div>
		</div>

		<div class="mySlides fade">
		  <div class="numbertext">3 / 3</div>
		  <img src="css/art.jpg" style="width:100%">
		  <div class="text">Expositions : Marché des Arts<br> Samedi 2/6/2018 - Square de la Bourse - Mulhouse</div>
		</div>

		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>

		<br>

		<div style="text-align:center">
		  <span class="dot" onclick="currentSlide(1)"></span> 
		  <span class="dot" onclick="currentSlide(2)"></span> 
		  <span class="dot" onclick="currentSlide(3)"></span> 
		</div>
	</div>
</div>


	<script type="text/javascript" src="../script/script_todolist.js"></script>
	<script type="text/javascript" src="../script/script_slideshow.js"></script>
	<script type="text/javascript" src="../script/jquery.js"></script>
	<script type="text/javascript">
		
		$(document).ready(function(){
				  $('.slideshow-container').hide();	
					$('#lien-strasbourg').on('click', function showSlide(){
					  
						$('#strasbourg').fadeIn(3000);
						$('#colmar').fadeOut(400);
						$('#haguenau').fadeOut(400);
						$('#mulhouse').fadeOut(400);
					});

					$('#lien-colmar').on('click', function showSlide(){
					  
						$('#colmar').fadeIn(3000);
						$('#strasbourg').fadeOut(400);
						$('#haguenau').fadeOut(400);
						$('#mulhouse').fadeOut(400);
					});

					$('#lien-haguenau').on('click', function showSlide(){
					  
						$('#haguenau').fadeIn(3000);
						$('#colmar').fadeOut(400);
						$('#strasbourg').fadeOut(400);
						$('#mulhouse').fadeOut(400);
					});
					
					$('#lien-mulhouse').on('click', function showSlide(){
					  
						$('#mulhouse').fadeIn(3000);
						$('#colmar').fadeOut(400);
						$('#haguenau').fadeOut(400);
						$('#strasbourg').fadeOut(400);
					
					});

					});


					
	</script>
  </body>
</html>