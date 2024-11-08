<?php
require_once 'config.php';
//fonction pour afficher tous les user
 function myUser($connexion){
    $query = "SELECT * FROM User"; // Il va aller recupérer tous les users sur la base de données.
    $statement = $connexion->prepare($query);
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_ASSOC);
 }
function myMission($connexion){
    $query = "SELECT * FROM mission"; // Il va aller recupérer tous les missions sur la base de données.
    $statement = $connexion->prepare($query);
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_ASSOC);
 }
 function myContract($connexion){
    $query = "SELECT * FROM contract"; // Il va aller recupérer tous les contrats sur la base de données.
    $statement = $connexion->prepare($query);
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_ASSOC);
 }

// // le code pour le sign.php

//    $lastname = $_POST['lastname'];
//    $firstname = $_POST['firstname'];
//    $birthdate = $_POST['birthdate'];
//    $email = $_POST['email'];
//    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 

//    $query = "INSERT INTO user (lastname, firstname, birthdate, email, password) VALUES (?, ?, ?, ?, ?)";
//    $statement = $connexion->prepare($query);
//    $statement->bind_param("ssdss", $lastname, $firstname, $birthdate, $email, $password);
   
//    if ($statement->execute()) {
//       echo "Inscription réussie !";
//    } else {
//        echo "Erreur lors de l'inscription : " . $statement ->error;
//       }
//       $statement->close();
//       $connexion->close();

    ?>