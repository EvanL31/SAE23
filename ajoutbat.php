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
   			<h1> Ajout d'un b&acirc;timent </h1>
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


	<?php
		include ("SAE23.php");
			$LOGIN= $_POST['Type_log'];
			$PASSWORD= $_POST['Type_passwd'];
			$BAT_NOM= $_POST['Type_bat'];
			$GEST_BAT= $_POST['Type_gest'];
			$requete = "INSERT INTO `GESTIONNAIRE` (`GEST_NOM`, `LOGIN`, `PASSWORD`) VALUES
				('$GEST_BAT', '$LOGIN', '$PASSWORD')";
			$resultat = mysqli_query($id_bd, $requete)
				or die("Execution de la requete impossible : $requete");
			$requete = "INSERT INTO `BATIMENT` (`BAT_NOM`, `GEST_NOM`) VALUES
				('$BAT_NOM', '$GEST_BAT')";	
			$resultat = mysqli_query($id_bd, $requete)
				or die("Execution de la requete impossible : $requete");
			mysqli_close($id_bd);
			echo "<p> Vous venez de créer le bâtiment $BAT_NOM</p>"; 
	?>
	<p class="boutonbis">
		<a href="./administration.php"> Retour &agrave; la page d'administration </a>
	</p>
  		<footer>
    		<ul>
				<li>Groupe GFLA</li>
				<li>SAÉ 23</li>
				<li>IUT Blagnac&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br> tél: +33 (0)562747575</li>
			</ul>  
  		</footer>
  	</body> 
</html>
