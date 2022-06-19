<?php
	session_start();
	$_SESSION["log"]=$_REQUEST["log"]; /* Login recovery */
	$login=$_SESSION["log"];
	$_SESSION["mdp"]=$_REQUEST["mdp"];  /* Password recovery */
	$motdep=$_SESSION["mdp"];
	$_SESSION["auth"]=FALSE;

	/* This script is meant to verify the authentication of the admnistrator, by comparing the login and password inserted in the previous page */

	if(empty($login))
		header("Location:login_error.php");
	else
	{
	if(empty($motdep))
		header("Location:login_error.php");
	else
     {
		/* DATABASE connection */
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
		 	/* Reset of the session table */

			$_SESSION = array();
            session_destroy();
            unset($_SESSION);
            mysqli_close($id_bd);
            echo "<script type='text/javascript'>document.location.replace('login_error.php');</script>";
		 }
		 }
		 else
		 {
		 	/* Reset of the session table */

			$_SESSION = array();
            session_destroy();
            unset($_SESSION);
            mysqli_close($id_bd);
            echo "<script type='text/javascript'>document.location.replace('login_error.php');</script>";
		 }
		}
     } 
 ?>

