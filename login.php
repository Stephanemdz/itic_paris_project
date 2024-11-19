<?php
    include_once __DIR__.'/controller/baseController.php';
    include_once __DIR__.'/model/config.php';
    include_once __DIR__.'/model/model.php';
?>
<?php
    $connexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); 
        if(!empty($_POST['email']) AND !empty($_POST['password'])){
           $email = htmlspecialchars($_POST['email']);
           $password = sha1($_POST['password']);
     
           $requete = $connexion->prepare('SELECT * FROM user WHERE email = ? AND password = ?');
           $requete->execute(array($email, $password));
        // var_dump($requete);
        // $requete->debugDumpParams();
           if($requete->rowCount() == 1){
               $_SESSION['userid'] = $requete -> fetch()['id_user'];
                header('location:user.php');
            // die("T'es de retour sale petit traitre coquin....");
           }else{
            echo "Heee toi là caurryge ton maut de pas ou ton mail. Et je voeux rien antendre si jè mal écrit l'erruer que c'ai sansé t'anvoillé, je sui just antrein de fèr com toi....";
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