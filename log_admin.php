<?php
	session_start();
	$_SESSION["log"]=$_REQUEST["log"];
	$login=$_SESSION["log"];
	$_SESSION["mdp"]=$_REQUEST["mdp"];  // Récupération du mot de passe
	$motdep=$_SESSION["mdp"];
	$_SESSION["auth"]=FALSE;

	// Script de vérification du mot de passe d'administration, en utilisant la table Connexion

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

		$request = "SELECT `login` FROM `ADMINISTRATION`";
		$result = mysqli_query($id_bd, $request)
			or die ("Execution de la requete impossible : $request");
		$requete = "SELECT `passwd` FROM `ADMINISTRATION`";
		$resultat = mysqli_query($id_bd, $requete)
			or die("Execution de la requete impossible : $requete");

		$line = mysqli_fetch_row($result);
		if ($login==$line[0])
		 {
		$ligne = mysqli_fetch_row($resultat);
		if ($motdep==$ligne[0])
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
			$_SESSION = array(); // Réinitialisation du tableau de session
            session_destroy();   // Destruction de la session
            unset($_SESSION);    // Destruction du tableau de session
            mysqli_close($id_bd);
            echo "<script type='text/javascript'>document.location.replace('login_error.php');</script>";
		 }
		}
     } 
 ?>

