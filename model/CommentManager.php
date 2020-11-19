<?php

require_once('model/Manager.php');

class CommentManager {

public function getComments($postId){
    $connexion = new Manager();
    $db = $connexion->dbConnect();
    $req = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comment WHERE post_id = ? ORDER BY comment_date DESC');
    $req->execute(array($postId));
    $comments = $req->fetchAll();
    return $comments;
}

public function postComment($postId, $author, $comment){
    $connexion = new Manager();
    $db = $connexion->dbConnect();
    $comments = $db->prepare('INSERT INTO comment(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
    $affectedLines = $comments->execute(array($postId, $author, $comment));
    return $affectedLines;
}
}

class Members {

public function newUser($pseudo, $pass, $email) {
    $connexion = new Manager();
    $db = $connexion->dbConnect();
    $req = $db->prepare('INSERT INTO members(pseudo, pass, email, inscription_date) VALUES(?, ?, ?, CURDATE())');
    $suscribe = $req->execute(array($pseudo, $pass, $email));    
    return $suscribe;
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