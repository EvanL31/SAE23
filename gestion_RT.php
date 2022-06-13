<!DOCTYPE html>
<html lang="fr">
 <head>
 <link rel="stylesheet" type="text/css" href="./styles/styleRWD.css" />
 <link rel="stylesheet" type="text/css" href="./styles/style.css" />
  <link rel="icon" href="./images/initiales.jpg" />
  <title> Gestionnaire RT </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- Pour bien gérer le RWD -->
  <meta name="author" content="JG" />
  <meta name="description" content="SAÉ 23" />
  <meta name="keywords" content="HTML, CSS" />
 </head>

 <body>
 
  <header>
   <h1>  Consultation des mesures du bâtiment RT </h1>
    <!-- Il faut placer la balise de fermeture </header> ici pour utiliser correctement le style1.css -->
	<nav class="navbar" >
    <ul>
		   <li><a href="./index.html" class="first">Accueil</a></li>
		   <li><a href="./login_admin.php">Administration</a></li>
		   <li><a href="./login_gest.php">Gestion</a></li>
		   <li><a href="./consultation.php">Consultation</a></li>
		   <li><a href="./mentions_legales.html">Mentions légales</a></li>
    </ul>
   </nav>
   </header><!-- Il faut placer la balise de fermeture </header> ici pour utiliser correctement le style2.css -->
  

<h1> Présentation de la page </h1>

<p> Tout d'abord, cette page sert à présenter les mesures des capteurs du bâtiment RT. </p>
<p> Dans le tableau ci-dessous, vous pouvez voir les salles avec leurs capteurs et dans quel bâtiment il se situe. 

<h2> Affichage des mesures des capteurs du bâtiment RT </h2>

<?php
include ("SAE23.php");

				/* Sélection des pieces en fonction de l'interet */
				$request = "SELECT * FROM `MESURE` WHERE CAPT_NOM = 'TE104' ORDER BY MES_DATE DESC LIMIT 15";
				$result = mysqli_query($id_bd, $request)
					or die("Execution de la requete impossible : $request");
				echo '<table>';
				/* Affichage de la liste des pièces  */
				while($ligne=mysqli_fetch_assoc($result))
				 {	
					extract($ligne);
					echo '<tr>';
					echo 	"<td> $CAPT_NOM </td>";
					echo 	"<td> $MES_DATE </td>";
					echo 	"<td> $MES_VAL </td>";
					echo '</tr>';
				 }
				echo '<table>';

				/* Sélection des pieces en fonction de l'interet */
				$request = "SELECT * FROM `MESURE` WHERE CAPT_NOM = 'CE104' ORDER BY MES_DATE DESC LIMIT 15";
				$result = mysqli_query($id_bd, $request)
					or die("Execution de la requete impossible : $request");
				echo '<table>';
				/* Affichage de la liste des pièces  */
				while($line=mysqli_fetch_assoc($result))
				 {	
					extract($line);
					echo '<tr>';
					echo 	"<td> $CAPT_NOM </td>";
					echo 	"<td> $MES_DATE </td>";
					echo 	"<td> $MES_VAL </td>";
					echo '</tr>';
				 }
				echo '<table>';

					/* Sélection des pieces en fonction de l'interet */
				$request = "SELECT * FROM `MESURE` WHERE CAPT_NOM = 'CE208' ORDER BY MES_DATE DESC LIMIT 15";
				$result = mysqli_query($id_bd, $request)
					or die("Execution de la requete impossible : $request");
				echo '<table>';
				/* Affichage de la liste des pièces  */
				while($line=mysqli_fetch_assoc($result))
				 {	
					extract($line);
					echo '<tr>';
					echo 	"<td> $CAPT_NOM </td>";
					echo 	"<td> $MES_DATE </td>";
					echo 	"<td> $MES_VAL </td>";
					echo '</tr>';
				 }
				echo '<table>';

					/* Sélection des pieces en fonction de l'interet */
				$request = "SELECT * FROM `MESURE` WHERE CAPT_NOM = 'TE208' ORDER BY MES_DATE DESC LIMIT 15";
				$result = mysqli_query($id_bd, $request)
					or die("Execution de la requete impossible : $request");
				echo '<table>';
				/* Affichage de la liste des pièces  */
				while($line=mysqli_fetch_assoc($result))
				 {	
					extract($line);
					echo '<tr>';
					echo 	"<td> $CAPT_NOM </td>";
					echo 	"<td> $MES_DATE </td>";
					echo 	"<td> $MES_VAL </td>";
					echo '</tr>';
				 }
				echo '<table>';
	mysqli_close($id_bd);
			?>


<aside id="last">
    <hr />
    <p><em> Validation de la page HTML5 - CSS3 </em></p>

	<a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fgarandet.atwebpages.com%2FSAE14%2Findex.html" target="_blank"> 
		<img class= "image-responsive" src="./images/html5-validator-badge-blue.png" alt="HTML5 Valide !" />
	</a>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <!-- style1RWD.css ou style2RWD.css selon votre choix -->
	<a href="https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fgarandet.atwebpages.com%2FSAE14%2Fstyles%2Fstyle.css&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=fr" target="_blank">
		<img class= "image-responsive" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="CSS Valide !" />
	</a>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <!-- style1RWD.css ou style2RWD.css selon votre choix -->
	<a href="https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fgarandet.atwebpages.com%2FSAE14%2Fstyles%2Fstyle2RWD.css&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=fr" target="_blank">
		<img class= "image-responsive" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="CSS2RWD Valide !" />

	</a>
  </aside>
  
  
  <footer>
    <ul>
		<li>Groupe GLFA</li>
		<li>SAÉ 23</li>
		<li>IUT Blagnac&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br> tel: +33 (0)562747575</li>
	</ul>  
  </footer>
  </body>
    
</html>
