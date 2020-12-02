<?php

require_once('model/Manager.php');
require_once('Entity/Post.php');

class PostManager {

    //Afficher les posts
    public function getPosts() {
        /*Connexion à la base*/
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        /*..*/

        /*Requête préparée*/
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date_fr DESC');
        /*On définit le mode de récupération de la requête*/
        $req->setFetchMode(\PDO::FETCH_CLASS, Post::class);
        $posts = $req->fetchAll();
        //var_dump($posts);
        return $posts;
    }

    //Afficher un post et ses commentaires
    public function getPost($id) {
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array($id));
        $req->setFetchMode(\PDO::FETCH_CLASS, Post::class);
        //var_dump($post);
        $post = $req->fetch();
        return $post;
     
    }

    //Ajouter un nouvel article
    public function addPost($newPost) {
        
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $post = $db->prepare('INSERT INTO posts(title, content, creation_date) VALUES( :title, :content, NOW())');
        $post->execute(array(
            "title" => $newPost->getTitle(),
            "content" => $newPost->getContent()
        ));
        return $post;
    }

    //Modifier un article
    public function getUpdate($post) {
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $update = $db->prepare('UPDATE posts SET title = :title, content = :content');
        $update->execute(array(
            "title"=> $post->getTitle(),
            "content"=> $post->getContent()
        ));
        //var_dump($update);
        return $update;
    }

    //Supprimer un article
    public function getDelete($id) {
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $req = $db->prepare('DELETE FROM posts WHERE id = :id');
        $delete = $req->execute(array(
            "id" => $id
        ));
        //var_dump($delete);
        return $delete;
    }
}
