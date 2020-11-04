<?php
 require('model/PostCommentManager.php');

function post() {
    $post = getPost($_GET['id']);
    $comment = getComments($_GET['id']);
     require('view/PostCommentView.php');
} 

function addComment($postId, $author, $comment) {
    $affectedLines = postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        var_dump($affectedLines);
        die("Impossible d'ajouter le commentaire !" );
    }else {
        print "Commentaire ajoutée !";
        header('Location: index.php?action=post&id=' . $postId);
    }
}