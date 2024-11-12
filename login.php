<?php
    include_once __DIR__.'/controller/baseController.php';
    include_once __DIR__.'/model/config.php';
    include_once __DIR__.'/model/model.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATABASE ITIC PROJECT</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./favicon/togo.png">
</head>
<body>
    <header>
        <h1>
            DATABASE ITIC PARIS
        </h1>
        <nav>
            <ul>
                <li><a href="acceuil.php">Acceuil</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="sign.php">Sign up</a></li>
            </ul>
        </nav>
    </header>
    <main>
    <h2>Bienvenue sur la base de données ITIC PARIS</h2>
    <fieldset>
            <legend>Connexion</legend>
            <form method="post" action="traitement_base_de_données">   
                <label for="Email">Email:</label>
                <input type="email" id="Email" name="Email" required>   
                <label for="password">Password :</label> 
                <input type="password" id="password" name="password" required>
                
                <button type="submit">Se connecter</button>
            </form>
        </fieldset>
    </main>
</body>
</html>