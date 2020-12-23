<?php

require_once('model/Manager.php');
require_once('Entity/Post.php');
require_once('Entity/Users.php');

class Members {

    public function newUser($user) {
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $req = $db->prepare('INSERT INTO members(pseudo, pass, email, inscription_date) VALUES(:pseudo, :pass, :email, CURDATE())');
        $pass_hache = password_hash($user->getPass(), PASSWORD_DEFAULT);
        $subscribe = $req->execute(array(
            "pseudo"=> $user->getPseudo(),
            "pass"=> $pass_hache,
            "email"=> $user->getEmail()
        ));
        return $subscribe;
    }

    public function connexion($pseudo) {
        //  Récupération de l'utilisateur et de son pass haché
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $req = $db->prepare('SELECT id, user_role, pass FROM members WHERE pseudo = :pseudo');
        $login = $req->execute(array(/*$username*/
            "pseudo"=> $pseudo->getPseudo()
        ));
        $login = $req->fetch();
        return $login;
    }     
}