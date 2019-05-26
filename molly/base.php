
<?php

include("./include/config.inc.php");

if (isset($_GET["pirate"]))
{
	echo("Bien essayé mais il faut se connecter !");
}

if (isset($_GET["logout"]))
{
	unset($_SESSION["admin"]);
	
	echo("Déconnexion réussie");
}

// Traitement

if (!empty($_POST))
{
	$name = $_POST["name"];
	$password = $_POST["password"];
	
	$sql = "select * from admin where admin_nom='".$name."' and admin_mdp='".$password."'";
	
	$query = mysqli_query($lien,$sql);
	
	$result = mysqli_fetch_assoc($query);
	
	// La personne existe
	
	if ($result["id_admin"] != "")
	{
		$_SESSION["admin"] = $result["id_admin"];
		
		header("location:list.php");
	}
	
	else
	{
		echo("Erreur d'authentification");
	}
}