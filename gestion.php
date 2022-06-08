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
  <title> Gestionnaire </title>
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
		   <li><a href="./administration.php">Administration</a></li>
		   <li><a href="./gestion.php">Gestion</a></li>
		   <li><a href="./consultation.php">Consultation</a></li>
    </ul>
   </nav>
   </header><!-- Il faut placer la balise de fermeture </header> ici pour utiliser correctement le style2.css -->
  

  <div id="container">
            <!-- zone de connexion -->
            
<!--            <form action="verification.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form> -->
        </div>









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
		<li>Groupe GFLI</li>
		<li>SAÉ 23</li>
		<li>IUT Blagnac&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br> tél: +33 (0)562747575</li>
	</ul>  
  </footer>
  </body>
    
</html>
