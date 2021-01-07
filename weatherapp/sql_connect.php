<?php 

try
{
	// set PDO connection to MySQL
	$pdo = new PDO('mysql:host=localhost;dbname=weatherapp;charset=utf8', 'root', '');
}
catch(PDOException $e)
{
	// Kills the process and displays error
        die('Erreur : '.$e->getMessage());
}
?>