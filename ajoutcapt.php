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
   			<h1> Ajout d'un capteur </h1>
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
				$Nom_Capt= $_POST['Nom_Capt'];
				$Type_Capt= $_POST['Type_Capt'];
				$Bat_Capt= $_POST['Bat_Capt'];
				$request = "INSERT INTO `CAPTEUR` (`CAPT_NOM`, `CAPT_TYPE`, `BAT_NOM`) VALUES ('$Nom_Capt', '$Type_Capt', '$Bat_Capt')";
				$result = mysqli_query($id_bd, $request)
					or die("Execution de la requete impossible : $request");
				mysqli_close($id_bd);

				echo "<p><strong> Le capteur $Nom_Capt, de type $Type_Capt, &agrave; bien &eacute;t&eacute; ajout&eacute; dans le b&acirc;timent $Bat_Capt. </strong></p>"
			?>
			<hr />
			<p class="boutonbis">
				<a href="administration.php"> Retour &agrave; la page d'administration </a>
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