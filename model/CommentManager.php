<?php

require_once('model/Manager.php');
require_once('Entity/Comments.php');

class CommentManager {

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
    
   
    /* Modifier le champs report, donner la valeur 1 dans la table comment quand l'id = ?*/
   public function reportValue($id) {
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
public function getReports() 
{
    $connexion = new Manager();
    $db = $connexion->dbConnect();
    $req = $db->query("SELECT author, comment, report FROM comment WHERE report = 1");
    /*On définit le mode de récupération de la requête*/
    $req->setFetchMode(\PDO::FETCH_CLASS, Comments::class);
    $listReports = $req->fetchAll();
    return $listReports;
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



    //Supprimer un commentaire
    /*public function getDeleteComment($id) {
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $req = $db->prepare('DELETE  FROM comment WHERE id = :id and report = 1');
        $delete = $req->execute(array(
        "id" => $id
    ));
        //var_dump($delete);
        return $delete;
    }*/

}
