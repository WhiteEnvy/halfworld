<?php
    include("connect.inc.php");

    try {
	
	$conn = new PDO("mysql:host=$host;dbname=$dbname", "$login", "$password");	
	   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
	   $conn->exec("set names utf8");	
    }
    catch (PDOException $erreur) {	
	   echo "<p>Erreur : " . $erreur->getMessage() . "</p>\n";
    }   

    $action = $_SERVER['REQUEST_URI'];
    $newUrl = parse_url($action, PHP_URL_PATH);
    $url = substr($action, strrpos($action, '/') + 1);
    
    include("body.php");  

    $conn = null;
?>