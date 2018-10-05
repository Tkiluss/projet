<?php 

if (isset($_COOKIE['etat_lieux'])){

	
 	header('Location: vue/connexion.php');
 
  }


else {

 header('Location: vue/connect_subscribe.php');

}

?>
