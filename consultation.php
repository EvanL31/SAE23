<!DOCTYPE html>
<html lang="fr">
 <head>
  <link rel="stylesheet" type="text/css" href="./styles/style.css" />
  <link rel="icon" href="./images/initiales.jpg" />
  <title> Consultation </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- Pour bien gérer le RWD -->
  <meta name="author" content="JG" />
  <meta name="description" content="SAÉ 23" />
  <meta name="keywords" content="HTML, CSS" />
 </head>

 <body>
 
  <header>
   <h1>  Consultation des mesures </h1>
    <!-- Il faut placer la balise de fermeture </header> ici pour utiliser correctement le style1.css -->
	<nav class="navbar" >
    <ul>
		   <li><a href="./index.html" class="first">Accueil</a></li>
		   <li><a href="./login_admin.php">Administration</a></li>
		   <li><a href="./login_gest.php">Gestion</a></li>
		   <li><a href="./consultation.php">Consultation</a></li>
		   <li><a href="./mentions.html" class="first">Mentions legales</a></li>
    </ul>
   </nav>
   </header>

	<?php
	include ("SAE23.php");
	$requete = " SELECT * FROM MESURE WHERE CAPT_NOM = 'CE208' ORDER BY MES_DATE DESC LIMIT 1";
		$resultat = mysqli_query($id_bd, $requete)
			or die ("Execution de la requete impossible : $requete");
					while($ligne=mysqli_fetch_assoc($resultat))
				 {
					extract($ligne);
					$CE208= "$MES_VAL";
					}
	$requete = " SELECT * FROM MESURE WHERE CAPT_NOM = 'TE208' ORDER BY MES_DATE DESC LIMIT 1";
	$resultat = mysqli_query($id_bd, $requete)
			or die ("Execution de la requete impossible : $requete");
					while($ligne=mysqli_fetch_assoc($resultat))
				 {
					extract($ligne);
					$TE208= "$MES_VAL";
					}
	$requete = " SELECT * FROM MESURE WHERE CAPT_NOM = 'TE104' ORDER BY MES_DATE DESC LIMIT 1";
	$resultat = mysqli_query($id_bd, $requete)
			or die ("Execution de la requete impossible : $requete");
					while($ligne=mysqli_fetch_assoc($resultat))
				 {
					extract($ligne);
					$TE104= "$MES_VAL";
					}
	$requete = " SELECT * FROM MESURE WHERE CAPT_NOM = 'CE104' ORDER BY MES_DATE DESC LIMIT 1";
	$resultat = mysqli_query($id_bd, $requete)
			or die ("Execution de la requete impossible : $requete");
					while($ligne=mysqli_fetch_assoc($resultat))
				 {
					extract($ligne);
					$CE104= "$MES_VAL";
					}
	$requete = " SELECT * FROM MESURE WHERE CAPT_NOM = 'CB103' ORDER BY MES_DATE DESC LIMIT 1";
		$resultat = mysqli_query($id_bd, $requete)
			or die ("Execution de la requete impossible : $requete");
					while($ligne=mysqli_fetch_assoc($resultat))
				 {
					extract($ligne);
					$CB103= "$MES_VAL";
					}
	$requete = " SELECT * FROM MESURE WHERE CAPT_NOM = 'TB103' ORDER BY MES_DATE DESC LIMIT 1";
	$resultat = mysqli_query($id_bd, $requete)
			or die ("Execution de la requete impossible : $requete");
					while($ligne=mysqli_fetch_assoc($resultat))
				 {
					extract($ligne);
					$TB103= "$MES_VAL";
					}
	$requete = " SELECT * FROM MESURE WHERE CAPT_NOM = 'TB204' ORDER BY MES_DATE DESC LIMIT 1";
	$resultat = mysqli_query($id_bd, $requete)
			or die ("Execution de la requete impossible : $requete");
					while($ligne=mysqli_fetch_assoc($resultat))
				 {
					extract($ligne);
					$TB204= "$MES_VAL";
					}
	$requete = " SELECT * FROM MESURE WHERE CAPT_NOM = 'CB204' ORDER BY MES_DATE DESC LIMIT 1";
	$resultat = mysqli_query($id_bd, $requete)
			or die ("Execution de la requete impossible : $requete");
					while($ligne=mysqli_fetch_assoc($resultat))
				 {
					extract($ligne);
					$CB204= "$MES_VAL";
					}
	mysqli_close($id_bd);
echo "
	<table>
  <tr> 
    <td COLSPAN=\"4\">BAT RT</td>
  </tr>
  <tr> 
    <td COLSPAN=\"2\">Salle E208</td>
    <td COLSPAN=\"2\">Salle E104</td>
  </tr>
  <tr> 
    <td>Temp</td>
    <td>CO2</td>
    <td>Temp</td>
    <td>CO2</td>
  </tr>
  <tr> 
    <td>$TE208</td>
    <td>$CE208</td>
    <td>$TE104</td>
    <td>$CE104</td>
  </tr>
</table>

<table>
  <tr> 
    <td COLSPAN=\"4\">BAT INFO</td>
  </tr>
  <tr> 
    <td COLSPAN=\"2\">Salle B103</td>
    <td COLSPAN=\"2\">Salle B204</td>
  </tr>
  <tr> 
    <td>Temp</td>
    <td>CO2</td>
    <td>Temp</td>
    <td>CO2</td>
  </tr>
  <tr> 
    <td>$TB103</td>
    <td>$CB103</td>
    <td>$TB204</td>
    <td>$CB204</td>
  </tr>
</table>
		"
?>
 
  
  <footer>
    <ul>
		<li>Groupe GFLI</li>
		<li>SAÉ 23</li>
		<li>IUT Blagnac&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br> tél: +33 (0)562747575</li>
	</ul>  
  </footer>
  </body>
    
</html>
