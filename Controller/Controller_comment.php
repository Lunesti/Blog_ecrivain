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

//Signaler un commentaire
function listReports($id) 
{
    //On crée une nouvelle instance de CommentManager en lui passant l'id à un report = 1
    $commentManager = new CommentManager($id);
    //On appel la méthode reportValue en lui passant l'id dont report = 1
    $report = $commentManager->reportComment($id); 
    header('Location: index.php?action=listPosts');
}


//Afficher la page de modération de commentaire + le commentaire à modérer
function moderate($id)
 {
    //On crée une nouvelle instance de CommentManager
    $commentManager = new CommentManager();
     //On appel la méthode moderateComment en lui passant l'id du commentaire à modérer
    $moderate = $commentManager->moderateComment($id);
    //la variable $moderate contient les infos du commentaire à modérer, qu'on va récupérer dans la vue et l'utiliser pour afficher ses infos
    require('view/frontend/moderateView.php');
}


//Supprimer le commentaire
function deleted($id) 
 {
     //On crée une nouvelle instance de CommentManager
    $commentManager = new commentManager();  
     //On appel la méthode deleteComment en lui passant l'id du commentaire à supprimer
    $commentManager->deleteComment($id);
    header('Location: index.php?action=admin');
}

