<?php

require_once('model/Manager.php');
require_once('Entity/Comments.php');

class CommentManager {

     //Afficher les commentaires
    public function getComments(){
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $req = $db->query('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comment ORDER BY comment_date DESC')
        or die(print_r($db->errorInfo()));
        $req->setFetchMode(\PDO::FETCH_CLASS, Comments::class);
        $comments = $req->fetchAll();
        //var_dump($comments);
        return $comments;
    }

    //Afficher les commentaires associés à un post
    public function getComment($postId){
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $req = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comment WHERE post_id = ? ORDER BY comment_date DESC');
        $req->setFetchMode(\PDO::FETCH_CLASS, Comments::class);
        $req->execute(array($postId));
        $comment = $req->fetchAll();
        return $comment;
    }

    //Ajouter un commentaire
    public function postComment($comment){
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $req = $db->prepare('INSERT INTO comment(post_id, author, comment, comment_date) VALUES(:postId, :author, :comment, NOW())');
        $comments = $req->execute(array( 
            "postId"=> $_GET['id'],
            "author"=> $comment->getAuthor(),
            "comment"=> $comment->getComments()
        ));
        var_dump($comments);
        return $comments;
    }

    //récupérer l'id user et l'id comment pour un signalement
   /* public function reportComment($report) {
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $req = $db->query("SELECT members.pseudo, comment.comment FROM members INNER JOIN comment ON members.id = comment.id ");
        $req->setFetchMode(\PDO::FETCH_CLASS, Comments::class);
        $report = $req->fetch();
        var_dump($report);
        return $report;     
    }*/
}
