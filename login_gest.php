<?php
	// Démarrage de la session
	session_start();
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Gestion</title>
		<link rel="stylesheet" type="text/css" href="./styles/style.css" />
		<link rel="stylesheet" type="text/css" href="./styles/styleRWD.css" />
	</head>

	<body>
		<!-- Affichage entete -->
		<?php 
			include("entete_gest.html"); 
		?>
		<section>
			<p>
				<br />
				<em><strong>Gestion de la base : Acc&egrave;s limit&eacute; aux personnes autoris&eacute;es</strong></em>
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
			<p><a href="consultation.php">Page de consultation</a></p>
			<p><a href="login_admin.php">Page d'administration</a></p>
			<p><a href="index.html">Retour à l'accueil</a></p>
		</footer>
	</body>
</html>

