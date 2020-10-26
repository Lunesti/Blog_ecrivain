<?php
    require("Manager.php");

//Afficher un post et ses commentaires

    function getComments($postId, $comment, $commentDate) {
        $db = dbConnect();
        $req = $db->prepare('post_id, comment,  DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        $postComments = $req->execute(array($postId, $comment, $commentDate));
        return $postComments;
    }
?>