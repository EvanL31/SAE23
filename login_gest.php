<?php /* Start of the session */
	session_start();
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Gestion</title>
		<link rel="stylesheet" type="text/css" href="./styles/style.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
  		<meta name="author" content="GFLA" />
 		<meta name="description" content="SAÉ 23" />
 		<meta name="keywords" content="HTML, CSS" />
	</head>

	<body>
		<header>
    		<h1>Gestionnaire</h1>
    		<hr />
			<nav class="navbar" > <!-- Navigation toolbar -->
			<ul>
				   	<li><a href="./index.html" class="first">Accueil</a></li>
				   	<li><a href="./login_admin.php">Administration</a></li>
				   	<li><a href="./login_gest.php">Gestion</a></li>
				   	<li><a href="./consultation.php">Consultation</a></li>
		   			<li><a href="./mentions_legales.html"> Mentions L&eacute;gales</a></li>
			</ul>
		   </nav>
		   </header>
		<section>
			<p>
				<br />
				<em><strong>Gestion de la base : Acc&egrave;s limit&eacute; aux personnes autoris&eacute;es</strong></em>
				<br />
			</p>
			<form action="log_gest.php" method="post" enctype="multipart/form-data"> <!-- Form to fill in, in order to authenticate as an administrative of a building -->
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
		</section>

 		<footer> <!-- Footer toolbar -->
   			<ul>
				<li>Groupe GFLA</li>
				<li>SAE 23</li>
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

