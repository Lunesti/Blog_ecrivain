<?php

require_once('Manager.php');

//Afficher les billets
function getPosts()
{
    $db = dbConnect();
    $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5');

    return $req;
}

//Afficher un seul billet
function getPost($postId)
{
    $db = dbConnect();
    $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
    $req->execute(array($postId));
    $post = $req->fetch();

    return $post;
}

//Afficher les commentaires associés au billet
function getComments($postId)
{
    $db = dbConnect();
    $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comment WHERE post_id = ? ORDER BY comment_date DESC');
    $comments->execute(array($postId));

    return $comments;
}

//Ajouter un commentaire
function postComment($postId, $author, $comment)
{
    $db = dbConnect();
    $comments = $db->prepare('INSERT INTO comment(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
    $affectedLines = $comments->execute(array($postId, $author, $comment));

    return $affectedLines;
}


//Inscription


    function getSuscribe() {
        $db = dbConnect();
        $req = $db->prepare('INSERT INTO members(pseudo, pass, email,  inscription_date) VALUES(?, ?, ?, CURDATE())');
        $suscribe = $req->execute(array($_POST['pseudo'], $_POST['pass'], $_POST['email']));
        $pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);
        return $suscribe;
    }

//Connexion

function getConnexion() {
    //  Récupération de l'utilisateur et de son pass hashé
    $db = dbConnect();
    $req = $db->prepare('SELECT id, pass FROM members WHERE pseudo = ?');
    $req->execute(array($_POST['pseudo']));
    $login = $req->fetch();
    return $login;
}





    

