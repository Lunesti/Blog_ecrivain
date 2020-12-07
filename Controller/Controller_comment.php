<?php
require_once('Model/PostManager.php');
require_once('Model/CommentManager.php');



//Ajouter commentaire
function addComment($postId, $author, $comment) //Contenu de la variable $comments
{
    /*Création d'un nouvel objet Comments*/
    $comments = new Comments($postId, $author, $comment);
      /*On crée une nouvelle instance de Comments, et on appel les setters en leur passant les variables auteur et commentaire*/
    $comments->setAuthor($author);
    $comments->setComment($comment);
    $commentManager = new CommentManager();
    /*On crée une nouvelle instance de CommentManager et on passe en paramètre l'objet $comments dans la méthode postComment*/ 
    $affectedLines = $commentManager->postComment($comments);
    if ($affectedLines === false) {
        die('Impossible d\'ajouter le commentaire !');
        
    } else {
        header('Location: index.php?action=post&id=' .$postId);
    }
}

/*Donner la valeur true à un report */
function listReports($id) 
{
    //On crée une nouvelle instance de CommentManager en lui passant l'id à un report = 1
    $commentManager = new CommentManager($id);
    //On appel la méthode reportValue en lui passant l'id dont report = 1
    $report = $commentManager->reportValue($id); 
    header('Location: index.php?action=listPosts');
}

/*function deleteComment($id)
 {
    $postManager = new PostManager();
    $posts = $postManager->getPosts();
    $commentManager = new CommentManager();
    $comments = $commentManager->getComments();
    $listReports = $commentManager->reportValue($id); 
    $delete = $commentManager->getDeleteComment($id);
    require("View/frontend/admin.php"); //Page d'administration du site
}*/
