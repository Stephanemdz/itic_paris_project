<?php
    include_once __DIR__.'/controller/baseController.php';
    include_once __DIR__.'/model/config.php';
    include_once __DIR__.'/model/model.php';
?>
<?php
        if(!empty($_POST['email']) AND !empty($_POST['password'])){
           $email = htmlspecialchars($_POST['email']);
           $password = sha1($_POST['password']);
     
           $requete = $PDO->prepare('SELECT * FROM user WHERE email = ? AND password = ?');
           $requete->execute(array($email, $password));
        // var_dump($requete);
        // $requete->debugDumpParams();
           include_once __DIR__.'/model/verify.php';
        }
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
                <a href="index.php">Accueil</a>
                <a href="login.php">Login</a>
                <a href="sign.php">Sign up</a>
        </nav>
    </header>
    <main>
    <h2>Bienvenue sur la base de données ITIC PARIS</h2>
    <fieldset>
            <legend>Connexion</legend>
            <form method="POST" action="">   
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email"  required> 
                <br>  
                <label for="password">Password :</label> <br>
                <input type="password" id="password" name="password"   required>
                <br>
                <input type="submit" name ="envoi">
            </form>
        </fieldset>
    </main>
</body>
</html>