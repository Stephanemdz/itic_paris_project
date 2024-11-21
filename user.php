<?php
include_once __DIR__.'/model/config.php';
?>
<?php
echo "T'es de retour sale petit traitre coquin...." . "<br>\n" . "<br>\n" ;
echo "Te voila enfin arriver à la gare. J'espère que tu ratera pas le train il part dans 1min!! vite vite il commence à sonner la courrrrrrrrrsssss!!!!!!!";
echo '<br /><a href="acceuil.php? '. SID .' ">acceuil</a>'; 

class user{
    public  $id;
    public  $firstname; 
    public  $lastname; 

    public function __construct( $id,  $firstname,  $lastname){
        $this ->id_user = $id;
        $this ->firstname = $firstname;
        $this ->lastname = $lastname;
    }

    public function identifier(){
        echo "<br />je m'appelle $this->firstname $this->lastname .";
    } 
}
$user1 = new user(1, "stephane", "MODZINU");
$user1 -> identifier();

    // public function myUser($requete){


    //     $_SESSION['email'] = $requete -> fetch()['email']; 
    //     $_SESSION['firstname'] = $requete -> fetch()['firstname']; 
    //     $_SESSION['lastname'] = $requete -> fetch()['lastname']; 
    // }
?>