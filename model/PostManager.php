<?php

require_once('model/Manager.php');
require_once('Entity/Post.php');

class PostManager {

    //Afficher les posts
    public function getPosts() {

        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC') 
        or die(print_r($db->errorInfo()));
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
        $post = $req->setFetchMode(\PDO::FETCH_CLASS, Post::class);
        //var_dump($post);
        $post = $req->fetch();
        //var_dump($post);
        return $post;
     
    }

    //Ajouter un nouvel article
    public function addPost($newPost) {
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $post = $db->prepare('INSERT INTO posts(title, content, creation_date) VALUES(:title, :content,  NOW())');
        $post->execute(array(
            "title"=>$_POST['title'],
            "content"=>$_POST['content']
        ));
        var_dump($post);
        return $post;
    }

    //Modifier un article
    public function getUpdate($post) {
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $update = $db->prepare('UPDATE posts SET title = :title, content = :content');
        $update->execute(array(
            "title"=>$_POST['title'],
            "content"=>$_POST['content'],
        ));
        return $update;
    }

    //Supprimer un article
    public function getDelete($id) {
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $delete = $db->prepare('DELETE FROM posts WHERE id = :id');
        $delete->execute(array(
            ":id"=>$_GET['id']));
        return $delete;
    }
}
