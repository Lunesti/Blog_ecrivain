<!--CONNEXION-->
<?php
require_once("Manager.php");


function getConnexion() {
    //  Récupération de l'utilisateur et de son pass hashé
    $db = dbConnect();
    $req = $db->prepare('SELECT id, pass FROM members WHERE pseudo = ?');
    $req->execute(array($_POST['pseudo']));
    $login = $req->fetch();
    return $login;
}





    

