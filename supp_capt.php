<?php  /* Authenticity verification of the person accessing to this page */
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
   			<h1> Suppression d'un capteur </h1>
   			<hr>
			<nav class="navbar" > <!-- Navigation toolbar -->
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
			<br />
			<form action="suppcapt.php" method="post" enctype="multipart/form-data"> <!-- Form to fill in, in order to delete a sensor, and all the values associated -->
				<fieldset>
					<legend> Suppression d'un capteur </legend>
					<?php /* Display of all the sensors in the DATABASE, in order for the administrator not to delete a sensor that doesn't exists */
						echo "<table> <th> Nom du capteur </th> <th> Type du capteur </th> <th> B&acirc;timent du capteur </th>";
						include ("SAE23.php");
						$requete = " SELECT * FROM `CAPTEUR`";
						$resultat = mysqli_query($id_bd, $requete)
							or die ("Execution de la requete impossible : $requete");
						while($ligne=mysqli_fetch_assoc($resultat))
				 		{
							extract($ligne);
							echo "<tr> <td> $CAPT_NOM </td> <td> $CAPT_TYPE </td> <td> $BAT_NOM </td> </tr>";
						}
						echo "</table>";
					?>
					<label for="Nom"><strong> Nom du capteur &agrave; supprimer : </strong></label>
					<input type="text" name="Nom_Capt" id ="Nom" />
				</fieldset>
				<div class="valid">
					<input type="submit" value="Enregistrez" />
				</div>
			</form>
		</section>

  		<footer> <!-- Footer toolbar -->
    		<ul>
				<li>Groupe GFLA</li>
				<li>SAÉ 23</li>
				<li>IUT Blagnac&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br> tél: +33 (0)562747575</li>
			</ul>  
  		</footer>

  		<aside>
			<hr />
			<p><em> Validation HTML5 - CSS 3 </em></p>
			<a href="https://validator.w3.org/#validate_by_input" target="_blank"> 
				<img src="./images/html5-validator-badge-blue.png" alt="HTML5 Valide !" />
			</a>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="https://jigsaw.w3.org/css-validator/#validate_by_input" target="_blank">
				<img src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="CSS Valide !" />
			</a>
		</aside>
  		
  	</body> 
</html>
