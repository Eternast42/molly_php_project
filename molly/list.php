<?php

include("../include/config.inc.php");

// Contrôle d'accès

if (!isset($_SESSION["admin"]))
{
	header("location:admin.php?pirate");
}

echo("Bienvenue !");

echo("<br><br><a href=\"admin.php?logout\">Se déconnecter</a>");

?>