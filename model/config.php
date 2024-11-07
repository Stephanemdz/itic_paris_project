<?php
    // Grâce  a ça on va se connecter a la base de données. 
$servername = 'localhost';
$username = 'root';
$dbname = 'itic_paris';
$password = '';

try {
    $connexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connexion->exec("set names utf8");
    
 }
  catch (PDOException $e) {
    die("Connection impossible : " . $e->getMessage());
 }
 