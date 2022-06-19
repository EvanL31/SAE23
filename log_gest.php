<?php
	session_start();
	$_SESSION["log"]=$_REQUEST["log"]; /* Login recovery */
	$login=$_SESSION["log"];
	$_SESSION["mdp"]=$_REQUEST["mdp"];  /* Password recovery */
	$motdep=$_SESSION["mdp"];
	$_SESSION["auth"]=FALSE;

	/* This script is meant to verify the authentication of the administrative connecting, by comparing the login and paswword inserted in the previous page. If one combination  is correct, send the administrative to the correct page. */

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
		$result_RT = mysqli_query($id_bd, $request_RT)
			or die ("Execution de la requete impossible : $request_RT");
		$requete_RT = "SELECT `password` FROM `GESTIONNAIRE` WHERE password = 'etud'";
		$resultat_RT = mysqli_query($id_bd, $requete_RT)
			or die("Execution de la requete impossible : $requete_RT");

		$request_INFO = "SELECT `login` FROM `GESTIONNAIRE` WHERE login = 'info'";
		$result_INFO = mysqli_query($id_bd, $request_INFO)
			or die ("Execution de la requete impossible : $request_INFO");
		$requete_INFO = "SELECT `password` FROM `GESTIONNAIRE` WHERE password = 'etud'";
		$resultat_INFO = mysqli_query($id_bd, $requete_INFO)
			or die("Execution de la requete impossible : $requete_INFO");

		$line_INFO = mysqli_fetch_row($result_INFO);
		if ($login==$line_INFO[0])
		 {
		$ligne_INFO = mysqli_fetch_row($resultat_INFO);
		 }
		$line_RT = mysqli_fetch_row($result_RT);
		if ($login==$line_RT[0])
		 {
		$ligne_RT = mysqli_fetch_row($resultat_RT);
		if ($motdep==$ligne_RT[0])
		 {
			$_SESSION["auth"]=TRUE;		
            mysqli_close($id_bd);
			echo "<script type='text/javascript'>document.location.replace('gestion_RT.php');</script>";
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
			if ($motdep==$ligne_INFO[0])
			{

				$_SESSION["auth"]=TRUE;
            	mysqli_close($id_bd);
				echo "<script type='text/javascript'>document.location.replace('gestion_INFO.php');</script>";
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
     } 
 ?>

