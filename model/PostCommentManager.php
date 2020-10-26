<?php
    require_once("Manager.php");

//Afficher un post

function getPost() {
// Récupération du billet
    $db = dbConnect();
    $post = $db->prepare('SELECT id, title, author, content, 
    DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr 
    FROM posts 
    WHERE id = ?');
    $post->execute(array($_GET['billet']));
    return $post;
}

// Récupération des commentaires

function getComments() {
    $db = dbConnect();
    $comments = $db->prepare('SELECT pseudo, comments, 
    DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr 
    FROM comments WHERE post_id = ? ORDER BY comment_date');
    $comments->execute(array($_GET['billet']));
    return $comments;
}
