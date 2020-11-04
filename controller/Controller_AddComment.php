<?php
function addComment($postId, $author, $comment) {
    require('model/AddCommentManager.php');
    $affectedLines = postComment($postId, $author, $comment);
    
    if ($affectedLines === false) {
        var_dump($affectedLines);
        die("Impossible d'ajouter le commentaire !" );
    }else {
        print "Commentaire ajoutée !";
        header('Location: index.php?action=post&id=' . $postId);
    }
}