<?php

require_once('model/Manager.php');
require_once('Entity/Post.php');

class PostManager
{
    //Afficher les posts
    public function getPosts()
    {
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM post ORDER BY creation_date_fr DESC');
        $req->setFetchMode(\PDO::FETCH_CLASS, Post::class);
        $posts = $req->fetchAll();
        return $posts;
    }

    //Afficher un post et ses commentaires
    public function getPost($id) 
    {
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM post WHERE id = :id');
        $req->execute(array(
            "id" => $id->getId()
        ));
        $req->setFetchMode(\PDO::FETCH_CLASS, Post::class);
        $post = $req->fetch();
        return $post;
    }

    //Ajouter un nouvel article
    public function addPost($newPost)
     {
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $post = $db->prepare('INSERT INTO post(title, content, creation_date) VALUES( :title, :content, NOW())');
        $post->execute(array(
            "title" => $newPost->getTitle(),
            "content" => $newPost->getContent()
        ));
        return $post;
    }

    //Modifier un article
    public function updatePost($post) 
    {
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $update = $db->prepare('UPDATE post SET title = :title, content = :content WHERE id = :id');
        $update->execute(array(
            "id"=> $post->getId(),
            "title"=> $post->getTitle(),
            "content"=> $post->getContent()
        ));
        var_dump($update);
        return $update;
    }

    //Supprimer un article
    public function deletePost($id) 
    {
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $req = $db->prepare('DELETE FROM post WHERE id = :id');
        $req->setFetchMode(\PDO::FETCH_CLASS, Post::class);
        $delete = $req->execute(array(
            "id" => $id
        ));
        return $delete;
    }
}