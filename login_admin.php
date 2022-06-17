<?php
	// Démarrage de la session
	session_start();
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
   			<h1>Administration</h1>
    		<hr />
			<nav class="navbar" >
			<ul>
				   	<li><a href="./index.html" class="first">Accueil</a></li>
				   	<li><a href="./login_admin.php">Administration</a></li>
					<li><a href="./login_gest.php">Gestion</a></li>
				   	<li><a href="./consultation.php">Consultation</a></li>
		   			<li><a href="./mentions_legales.html" class="last"> Mentions L&eacute;gales</a></li>
			</ul>
		   </nav>
		   </header>
		<section>
			<p>
				<br />
				<em><strong>Administration de la base : Acc&egrave;s limit&eacute; aux personnes autoris&eacute;es</strong></em>
				<br />
			</p>
			<form action="log_admin.php" method="post" enctype="multipart/form-data">
				<fieldset>
					<legend>Saisissez le login !!</legend>
					<label for="log">Login : </label>
					<input type="text" name="log" id="log" />
					<legend>Saisissez le mot de passe !!</legend>
					<label for="mdp">Mot de passe : </label>
					<input type="password" name="mdp" id="mdp" />
				</fieldset>
				<p>
					<input type="submit" value="Valider" />
				</p>
			</form>
			<hr />
		</section>
	  	<footer>
			<ul>
				<li>Groupe GFLA</li>
				<li>SAE 23</li>
				<li>IUT Blagnac&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br> tél: +33 (0)562747575</li>
			</ul>  
	  	</footer>
	</body>
</html>

