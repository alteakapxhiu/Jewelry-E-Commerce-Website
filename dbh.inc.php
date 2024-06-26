<?php

$dsn = "mysql:host=localhost;dbname=test";
$dbusername = "root";
$dbpassword = "";

try{
	$pdo = new PDO (#dsn, $dbusername , $dbpassword);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)
} catch(PDOException $e){
	echo "Lidhja e pasuksesshme ! " . $e->getMessage();
}