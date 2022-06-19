<?php /* Start of the session */
	session_start();
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
	   	<meta charset="UTF-8" />
	   	<title>Identification erron&eacute;e</title>
	   	<link rel="stylesheet" type="text/css" href="./styles/style.css" />
  		<meta name="viewport" content="width=device-width, initial-scale=1" />
  		<meta name="author" content="GFLA" />
 		<meta name="description" content="SAÉ 23" />
 		<meta name="keywords" content="HTML, CSS" />
	 </head>

	<body>
		<?php

			/* Destruction of the session table */

			$_SESSION = array();
			session_destroy();
			unset($_SESSION);
		?>

		<header><h1> Acc&egrave;s limit&eacute; aux personnes autoris&eacute;es </h1></header>
		<br />
		<p>
			<em><h3> Identifiant ou mot de passe non saisi ou erron&eacute; !!! </h3></em>
		</p>

		<br />

		<!-- Redirecting links, to the choice of the user -->

		<p class="bouton">
			<a href="index.html"> Retour &agrave; l'acceuil </a>
		</p>

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
