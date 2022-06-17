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
  		<meta name="viewport" content="width=device-width, initial-scale=1" />
  		<meta name="author" content="GFLA" />
  		<meta name="description" content="SAÉ 23" />
  		<meta name="keywords" content="HTML, CSS" />
 	</head>

 	<body>
 		<header>
   			<h1> Suppression d'un b&acirc;timent </h1>
   			<hr>
			<nav class="navbar" >
    		<ul>
		   		<li><a href="./index.html" class="first">Accueil</a></li>
				<li><a href="./login_admin.php">Administration</a></li>
		   		<li><a href="./login_gest.php">Gestion</a></li>
		   		<li><a href="./consultation.php">Consultation</a></li>
		   		<li><a href="./mentions_legales.html" class="last">Mentions l&eacute;gales</a></li>
    		</ul>
   			</nav>
   		</header>

   		<section>
			<?php
				include ("SAE23.php");
				$BAT_NOM = $_POST['Nom_Bat'];
				$requete = "SELECT * FROM `BATIMENT` WHERE (`BAT_NOM`='$BAT_NOM')";
				$resultat = mysqli_query($id_bd, $requete)
					or die("Execution de la requete impossible : $requete");

				while($ligne=mysqli_fetch_assoc($resultat))
				 {
					extract($ligne);
					$GESTNOM= "$GEST_NOM";
					} 

				$requete = "DELETE FROM `GESTIONNAIRE` WHERE (`GEST_NOM`='$GESTNOM')";
				$resultat = mysqli_query($id_bd, $requete)
					or die("Execution de la requete impossible : $requete");
				mysqli_close($id_bd);

				echo "<p> Le batiment $BAT_NOM a été supprimé <p>"
				?>
			<hr>
			<p class="boutonbis">
				<a href="./administration.php" class="bouton">Retour &agrave; la page administration</a>
			</p>
		</section>
	<footer>
    		<ul>
				<li>Groupe GFLA</li>
				<li>SAÉ 23</li>
				<li>IUT Blagnac&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br> tél: +33 (0)562747575</li>
			</ul>  
  		</footer>
  	</body> 
</html>
