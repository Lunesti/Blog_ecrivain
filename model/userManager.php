<?php

require_once('model/Manager.php');
require_once('Entity/Post.php');


class userManager {
    //Inscription
    function getSuscribe($pseudo, $pass, $email) {
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $req = $db->prepare('INSERT INTO members(pseudo, pass, email, inscription_date) VALUES(?, ?, ?, CURDATE())');
        $subscribe = $req->execute(array($pseudo, $pass, $email));    
        return $subscribe;
    }

    //Connexion
    function getConnexion($username) {
        //  Récupération de l'utilisateur et de son pass haché
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $req = $db->prepare('SELECT id, user_role, pass FROM members WHERE pseudo = ?');
        $req->execute(array($username));
        $login = $req->fetch();
        return $login;
    }

    //Déconnexion
    function getDeconnexion($username) {
        //  Récupération de l'utilisateur et de son pass haché
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $req = $db->prepare('SELECT id, user_role, pass FROM members WHERE pseudo = ?');
        $req->execute(array($username));
        $login = $req->fetch();
        return $login;
    }
}