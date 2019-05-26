<?php
// /mnt/c/wamp64/www/courPHP/molly_php_project/molly$ 


session_start();

// Connexion au serveur MySQL

$host = "localhost";
$user = "root";
$password = "";
$bdd = "mollydonne";

$lien = mysqli_connect($host,$user,$password,$bdd);

mysqli_query($lien,"set names utf8");

 ?>