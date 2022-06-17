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
  		<meta name="author" content="JG" />
  		<meta name="description" content="SAÉ 23" />
  		<meta name="keywords" content="HTML, CSS" />
 	</head>

 	<body>
 		<header>
   			<h1> Suppression d'un capteur </h1>
			<nav class="navbar" >
    		<ul>
		   		<li><a href="./index.html" class="first">Accueil</a></li>
				<li><a href="./login_admin.php">Administration</a></li>
		   		<li><a href="./login_gest.php">Gestion</a></li>
		   		<li><a href="./consultation.php">Consultation</a></li>
		   		<li><a href="./mentions_legales.html">Mentions l&eacute;gales</a></li>
    		</ul>
   			</nav>
   		</header>	
 
		<section>
			<br />
			<form action="ajoutbat.php" method="post" enctype="multipart/form-data">
				<fieldset>
					<legend> Suppression d'un capteur </legend>
					<label for="type"><strong>Type de la pi&egrave;ce à ajouter : <?php echo $type ?></strong></label>
					<input type="hidden" name="CodeType" value="<?php echo $type ?>" id ="type" />
					<br />
					<label for="libelle">  Libell&eacute; de la pi&egrave;ce : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
					<input type="text" name="LibellePiece" id ="libelle" />
					<br />
					<label for="prix">  Tarif de la pi&egrave;ce (en &#8364;) : </label>
					<input type="text" name="TarifPiece" id ="prix" />
				</fieldset>
				<div class="valid">
					<input type="submit" value="Enregistrez" />
				</div>
			</form>
		</section>

  		<footer>
    		<ul>
				<li>Groupe GFLI</li>
				<li>SAÉ 23</li>
				<li>IUT Blagnac&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br> tél: +33 (0)562747575</li>
			</ul>  
  		</footer>
  	</body> 
</html>
