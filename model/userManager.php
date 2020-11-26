<?php

require_once('model/Manager.php');
require_once('Entity/Post.php');


class Members {

    public function newUser($user) {
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);
        $req = $db->prepare('INSERT INTO members(pseudo, pass, email, inscription_date) VALUES(:pseudo, :pass, :email, CURDATE())');
        $subscribe = $req->execute(array(
            'pseudo'=> $_POST['pseudo'],
            'pass'=> $pass_hache,
            'email'=> $_POST['email']));    
        return $subscribe;
    }

    public function getConnexion($username) {
        //  Récupération de l'utilisateur et de son pass haché
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $req = $db->prepare('SELECT id, user_role, pass FROM members WHERE pseudo = ?');
        $req->execute(array($username));
        $login = $req->fetch();
        return $login;
    }     
}