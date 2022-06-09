<?php
	session_start();
	$_SESSION["log"]=$_REQUEST["log"];
	$login=$_SESSION["log"];
	$_SESSION["mdp"]=$_REQUEST["mdp"];  // Récupération du mot de passe
	$motdep=$_SESSION["mdp"];
	$_SESSION["auth"]=FALSE;

	// Script de vérification du mot de passe d'un gestionnaire, en utilisant la table Gestionnaire

	if(empty($login))
		header("Location:login_error.php");
	else
	{
	if(empty($motdep))
		header("Location:login_error.php");
	else
     {
		/* Accès à la base */
		include ("SAE23.php");

		$request_RT = "SELECT `login` FROM `GESTIONNAIRE` WHERE login = 'rt'";
		$result_RT = mysqli_query($id_bd, $request)
			or die ("Execution de la requete impossible : $request");
		$requete_RT = "SELECT `password` FROM `GESTIONNAIRE` WHERE password = 'etud'";
		$resultat_RT = mysqli_query($id_bd, $requete)
			or die("Execution de la requete impossible : $requete");

		$line_RT = mysqli_fetch_row($result_RT);
		if ($login==$line_RT[0])
		 {
		$ligne_RT = mysqli_fetch_row($resultat_RT);
		if ($motdep==$ligne_RT[0])
		 {
			$_SESSION["auth"]=TRUE;		
            mysqli_close($id_bd);
			echo "<script type='text/javascript'>document.location.replace('administration.php');</script>";
		 }
		else
		 {
			$_SESSION = array(); // Réinitialisation du tableau de session
            session_destroy();   // Destruction de la session
            unset($_SESSION);    // Destruction du tableau de session
            mysqli_close($id_bd);
            echo "<script type='text/javascript'>document.location.replace('login_error.php');</script>";
		 }
		 }
		 else
		 {
			if
			{
			}
			else
			{
				$_SESSION = array(); // Réinitialisation du tableau de session
            	session_destroy();   // Destruction de la session
            	unset($_SESSION);    // Destruction du tableau de session
		        mysqli_close($id_bd);
		        echo "<script type='text/javascript'>document.location.replace('login_error.php');</script>";*
			}
		 }
		}
     } 
 ?>

