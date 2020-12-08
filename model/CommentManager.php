<?php

require_once('model/Manager.php');
require_once('Entity/Comments.php');

class CommentManager {

    //Ajouter un commentaire
    public function postComment($comment) //$comment est un nouvel objet qui va contenir l'id, l'auteur et le commentaire
    {
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        /*Ajoute dans la table comment un l'id du post, l'auteur, le commentaire et la date du commentaire */
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
        /*Sélectionne le champs id, author et comment dans la table comment*/
        $req = $db->query('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comment ORDER BY comment_date DESC');
         /*On définit le mode de récupération de la requête*/
        $req->setFetchMode(\PDO::FETCH_CLASS, Comments::class);
        $comments = $req->fetchAll();
        return $comments;
    }

    //Afficher les commentaires associés à un post
    public function getComment($postId)
    {
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        /*Récupère le champ id, author, comment et la date quand l'id du post = ? */
        $req = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comment WHERE post_id = ? ORDER BY comment_date DESC');
        $req->setFetchMode(\PDO::FETCH_CLASS, Comments::class);
        /*On passe dans le array l'id du post*/
        $req->execute(array($postId));
        $comment = $req->fetchAll();
        return $comment;
    }
    
   
    //Signaler un commentaire
   public function reportComment($id) {
    $connexion = new Manager();
    $db = $connexion->dbConnect();
     /*Modifie dans la table commentaire la ligne report quand l'id = :id*/
    $req = $db->prepare("UPDATE comment SET report = 1 WHERE id = :id");
    /* On passe dans le array l'id qui a un report = 1*/
    $reports = $req->execute(array(
        "id" => $id
    ));
    return $reports;     
}

    //Afficher les commentaires signalés 
    public function getCommentReports() 
    {
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $req = $db->query("SELECT id, author, comment, report FROM comment WHERE report = 1");
        /*On définit le mode de récupération de la requête*/
        $req->setFetchMode(\PDO::FETCH_CLASS, Comments::class);
        $listReports = $req->fetchAll();
        return $listReports;
    }

    //Récupérer le commentaire à modérer
    public function moderateComment($id) 
    {
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        /*Selectionne le champs id, author et comment dans la table comment quand report = 1 et l'id = ?*/
        $req = $db->prepare("SELECT id, author, comment FROM comment WHERE report = 1 and id = :id");
        $req->execute(array(
            "id"=>$id
        ));
        $req->setFetchMode(\PDO::FETCH_CLASS, Comments::class);
        $moderate = $req->fetch();
        return $moderate;
    }

    //Modérer le commentaire 
    public function deleteComment($id) 
    {
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $req = $db->prepare("DELETE FROM comment WHERE report = 1 and id = :id");
        /*On définit le mode de récupération de la requête*/
        $delete = $req->execute(array(
            "id"=> $id
        ));
        return $delete;
    }
}
