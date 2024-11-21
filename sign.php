<?php
    include_once __DIR__.'/controller/baseController.php';
    include_once __DIR__.'/model/config.php';
    include_once __DIR__.'/model/model.php';
?>
<?php
    $connexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); 
        if(!empty($_POST['email']) AND !empty($_POST['password'])){
            $firstname = htmlspecialchars($_POST['firstname']);
            $lastname = htmlspecialchars($_POST['lastname']);
            $birthdate = htmlspecialchars($_POST['birthdate']);
            $email = htmlspecialchars($_POST['email']);
            $password = sha1($_POST['password']);
            
     
           $requete = $connexion->prepare('INSERT INTO user (firstname, lastname, birthdate, email, password) VALUES (?,?,?,?,?)');
           $requete->execute(array($firstname, $lastname, $birthdate, $email, $password));
            // $requete->debugDumpParams();
           if($requete->rowCount() > 0){
            die("Félicitations, bien venu parmi nous petit monstre coquin...");
           }else{
            echo "Bouge toi un peu le cul la soit plus précis.....";
           }
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
            <ul>
                <li><a href="index.php">Acceuil</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="sign.php">Sign up</a></li>
            </ul>
        </nav>
    </header>
    <main>
    <h2>Bienvenue sur la base de données ITIC PARIS</h2>
    <fieldset>
            <legend>Inscription</legend>
            <form method="post" action="">
                <label for="firstname">firstname:</label><br>
                <input type="text" id="firstname" name="firstname" autocomplete="off" required>   <br> 
                <label for="lastname">lastname:</label><br>
                <input type="text" id="lastname" name="lastname" autocomplete="off" required>    <br>
                <label for="birthdate">Birthdate:</label><br>
                <input type="date" id="birthdate" name="birthdate" autocomplete="off" required> <br>   
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" autocomplete="off" required>   <br>
                <label for="password">Password :</label> <br>
                <input type="password" id="password" name="password" autocomplete="off" required> <br>

                <input type="submit" name ="envoi">
            </form>
        </fieldset>
    </main>
</body>
</html>