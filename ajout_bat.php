<?php /* Authenticity verification of the person accessing to this page */
	session_start(); 
	if ($_SESSION["auth"]!=TRUE)
		header("Location:login_error.php");
?>

<!DOCTYPE html>
	<html lang="fr">
 	<head>
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


		<section>
			<br />
			<form action="ajoutbat.php" method="post" enctype="multipart/form-data"> <!-- Form to fill in, in order to create a new building with its personnal administrator login and password-->
				<fieldset>
					<legend>Ajout d'un bâtiment</legend>

						<table>
						<th> Id du batiment </th>
						<th> Nom du batiment </th>
						<th> Nom du gestionnaire</th>
					<?php /* Display all the building in the DATABASE, to help the administrator not to create the same building twice */
					include ("SAE23.php");
					$requete = "SELECT * FROM `BATIMENT`";
					$resultat = mysqli_query($id_bd, $requete)
						or die("Execution de la requete impossible : $requete");
						mysqli_close($id_bd);
					
					while($ligne=mysqli_fetch_array($resultat))
						 {
							extract($ligne);
							echo "<tr> 
								<td> $BAT_ID </td>
								<td> $BAT_NOM </td>
								<td> $GEST_NOM </td>
								</tr>";
						}
					?>
				</table>

					<label for="type"><strong>Type de bâtiment à ajouter :</strong></label>
					<input type="hidden" name="CodeType" id ="type" />
					<br />
					<label for="NOM">  Nom du bâtiment : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
					<input type="text" name="Type_bat" id ="Type" />
					<br />
					<label for="NOM_GEST">  Nom du Gestionnaire : </label>
					<input type="text" name="Type_gest" id ="Type" />
					<br />
					<label for="ID">  Login Gestionnaire : </label>
					<input type="text" name="Type_log" id ="Type" />
					<br />
					<label for="MDP">  Password Gestionnaire : </label>
					<input type="password" name="Type_passwd" id ="Type" />
				</fieldset>
				<div class="valid">
					<input type="submit" value="Enregistrez" />
				</div>
			</form>
		</section>

  		<footer> <!-- Footer toolbar -->
    		<ul>
				<li>Groupe GLFA</li>
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
