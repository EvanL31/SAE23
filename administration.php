<?php 
	session_start(); 
	if ($_SESSION["auth"]!=TRUE)
		header("Location:login_error.php");
?>

<!DOCTYPE html>
<html lang="fr">
 <head>
 <link rel="stylesheet" type="text/css" href="./styles/styleRWD.css" />
 <link rel="stylesheet" type="text/css" href="./styles/style.css" />
  <link rel="icon" href="./images/initiales.jpg" />
  <title> Administrateur </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- Pour bien gérer le RWD -->
  <meta name="author" content="JG" />
  <meta name="description" content="SAÉ 23" />
  <meta name="keywords" content="HTML, CSS" />
 </head>

 <body>
 
  <header>
   <h1>  Consultation des mesures </h1>
    <!-- Il faut placer la balise de fermeture </header> ici pour utiliser correctement le style1.css -->
	<nav class="navbar" >
    <ul>
		   <li><a href="./index.html" class="first">Accueil</a></li>
		   <li><a href="./login_gest.php">Gestion</a></li>
		   <li><a href="./consultation.php">Consultation</a></li>
		   <li><a href="./mentions_legales.html">Mentions légales</a></li>
    </ul>
   </nav>
   </header><!-- Il faut placer la balise de fermeture </header> ici pour utiliser correctement le style2.css -->
  
  <footer>
    <ul>
		<li>Groupe GFLI</li>
		<li>SAÉ 23</li>
		<li>IUT Blagnac&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br> tél: +33 (0)562747575</li>
	</ul>  
  </footer>
  </body>
    
</html>
