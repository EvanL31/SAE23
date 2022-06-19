<!DOCTYPE html>
<html lang="fr">
 <head>
 <link rel="stylesheet" type="text/css" href="./styles/style.css" />
  <link rel="icon" href="./images/initiales.jpg" />
  <title> Gestionnaire RT </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="JG" />
  <meta name="description" content="SAÉ 23" />
  <meta name="keywords" content="HTML, CSS" />
 </head>

 <body>
 
  <header>
   <h1>  Consultation des mesures du bâtiment RT </h1>
	<nav class="navbar" > <!-- Navigation toolbar -->
    <ul>
		   <li><a href="./index.html" class="first">Accueil</a></li>
		   <li><a href="./login_admin.php">Administration</a></li>
		   <li><a href="./login_gest.php">Gestion</a></li>
		   <li><a href="./consultation.php">Consultation</a></li>
		   <li><a href="./mentions_legales.html">Mentions l&eacute;gales</a></li>
    </ul>
   </nav>
   </header>
  

<h1> Présentation de la page </h1>

<p> Tout d'abord, cette page sert à présenter les mesures des capteurs du bâtiment RT. </p>
<p> Dans le tableau ci-dessous, vous pouvez voir les salles avec leurs dates où les données ont été prises et leurs valeurs. 

<h2 class="centre"> Affichage des mesures des capteurs du bâtiment RT </h2>

<?php /* Display of the last 15 values of the building RT, using the login script */
	include ("SAE23.php");

				$request = "SELECT * FROM `MESURE` WHERE CAPT_NOM = 'TE104' ORDER BY MES_DATE DESC LIMIT 15";
				$result = mysqli_query($id_bd, $request)
					or die("Execution de la requete impossible : $request");
				echo '<table>';
					echo "<th> Salle </th>";
					echo "<th> Date et Heure </th>";
					echo "<th> Valeurs (°C)</th>";

				/* Display of the values, with its date of collection and sensor name */

				while($ligne=mysqli_fetch_assoc($result))
				 {	
					extract($ligne);
					echo '<tr>';
					echo 	"<td> $CAPT_NOM </td>";
					echo 	"<td> $MES_DATE </td>";
					echo 	"<td> $MES_VAL </td>";
					echo '</tr>';
				 }
				echo '</table>';

				$request = "SELECT * FROM `MESURE` WHERE CAPT_NOM = 'CE104' ORDER BY MES_DATE DESC LIMIT 15";
				$result = mysqli_query($id_bd, $request)
					or die("Execution de la requete impossible : $request");
				echo '<table>';
					echo "<th> Salle </th>";
					echo "<th> Date et Heure </th>";
					echo "<th> Valeurs (PPM)</th>";

				/* Display of the values, with its date of collection and sensor name */

				while($line=mysqli_fetch_assoc($result))
				 {	
					extract($line);
					echo '<tr>';
					echo 	"<td> $CAPT_NOM </td>";
					echo 	"<td> $MES_DATE </td>";
					echo 	"<td> $MES_VAL </td>";
					echo '</tr>';
				 }
				echo '</table>';

				$request = "SELECT * FROM `MESURE` WHERE CAPT_NOM = 'CE208' ORDER BY MES_DATE DESC LIMIT 15";
				$result = mysqli_query($id_bd, $request)
					or die("Execution de la requete impossible : $request");
				echo '<table>';

					echo "<th> Salle </th>";
					echo "<th> Date et Heure </th>";
					echo "<th> Valeurs (PPM)</th>";

				/* Display of the values, with its date of collection and sensor name */

				while($line=mysqli_fetch_assoc($result))
				 {	
					extract($line);
					echo '<tr>';
					echo 	"<td> $CAPT_NOM </td>";
					echo 	"<td> $MES_DATE </td>";
					echo 	"<td> $MES_VAL </td>";
					echo '</tr>';
				 }
				echo '</table>';

				$request = "SELECT * FROM `MESURE` WHERE CAPT_NOM = 'TE208' ORDER BY MES_DATE DESC LIMIT 15";
				$result = mysqli_query($id_bd, $request)
					or die("Execution de la requete impossible : $request");
				echo '<table class="fin">';

					echo "<th> Salle </th>";
					echo "<th> Date et Heure </th>";
					echo "<th> Valeurs (°C)</th>";

				/* Display of the values, with its date of collection and sensor name */
				
				while($line=mysqli_fetch_assoc($result))
				 {	
					extract($line);
					echo '<tr>';
					echo 	"<td> $CAPT_NOM </td>";
					echo 	"<td> $MES_DATE </td>";
					echo 	"<td> $MES_VAL </td>";
					echo '</tr>';
				 }
				echo '</table>';
	mysqli_close($id_bd);
			?>

  	<footer> <!-- Footer toolbar -->
   		 <ul>
				<li>Groupe GLFA</li>
				<li>SAÉ 23</li>
				<li>IUT Blagnac&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br> tel: +33 (0)562747575</li>
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
