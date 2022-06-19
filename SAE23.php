<?php
/* This script is meant to connect to the DATABASE, using a login and a password we created */

  $id_bd = mysqli_connect("192.168.0.17","laffely","evan","SAE23")
    or die("Connexion au serveur et/ou à la base de données impossible");

  /* Data encoding management */
  mysqli_query($id_bd, "SET NAMES 'utf8'");

?>
