<?php

require_once('model/Manager.php');
require_once('Entity/Comment.php');

class CommentManager {

    //Ajouter un commentaire
    public function postComment($comment) //$comment est un nouvel objet qui va contenir l'id, l'auteur et le commentaire
    {
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $req = $db->prepare('INSERT INTO comment(post_id, author, comment, comment_date) VALUES(:postId, :author, :comment, NOW())');
        $comments = $req->execute(array( 
            "postId"=> $_GET['id'],
            "author"=> $comment->getAuthor(),
            "comment"=> $comment->getComments()
        ));
        return $comments;
    }

     //Afficher les commentaires
    public function getComments()
    {
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $req = $db->query('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comment ORDER BY comment_date DESC');
        $req->setFetchMode(\PDO::FETCH_CLASS, Comment::class);
        $comments = $req->fetchAll();
        return $comments;
    }

    //Afficher les commentaires associés à un post
    public function getComment($postId)
    {
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $req = $db->prepare('SELECT id, author, comment, report, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comment WHERE post_id = ? ORDER BY comment_date DESC');
        $req->setFetchMode(\PDO::FETCH_CLASS, Comment::class);
        $req->execute(array($postId));
        $comment = $req->fetchAll();
        return $comment;
    }
    
   
    //Signaler un commentaire
   public function reportComment($id) {
    $connexion = new Manager();
    $db = $connexion->dbConnect();
    $req = $db->prepare("UPDATE comment SET report = 1 WHERE id = :id");
    $reports = $req->execute(array(
        "id" => $id
    ));
    return $reports;     
}

    //Afficher les commentaires signalés 
    public function showReports() 
    {
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $req = $db->query("SELECT id, author, comment, report FROM comment WHERE report = 1");
        $req->setFetchMode(\PDO::FETCH_CLASS, Comment::class);
        $listReports = $req->fetchAll();
        return $listReports;
    }

    //Modérer le commentaire 
    public function deleteComment($id) 
    {
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $req = $db->prepare("DELETE FROM comment WHERE report = 1 and id = :id");
        $delete = $req->execute(array(
            "id"=> $id
        ));
        return $delete;
    }
}
