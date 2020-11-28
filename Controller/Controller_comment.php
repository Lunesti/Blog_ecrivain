<?php
require_once('Model/PostManager.php');
require_once('Model/CommentManager.php');

//Ajouter commentaire
function addComment($postId, $author, $comment)
{
    $comments = new Comments($postId, $author, $comment);
    $commentManager = new CommentManager();
    $affectedLines =$commentManager->postComment($comments);

    $postManager = new PostManager();
    $post = $postManager->getPost($_GET['id']);


    if ($affectedLines === false) {
        die('Impossible d\'ajouter le commentaire !');
    } else {
        header('Location: index.php?action=post&id=' .$postId);
    }
}