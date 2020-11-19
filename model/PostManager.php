<?php

require_once('model/Manager.php');
require_once('Entity/Post.php');

class PostManager {

    public function getPosts() {
        $posts = [];
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC') 
        or die(print_r($db->errorInfo()));
        $posts = $req->fetchAll(\PDO::FETCH_ASSOC);
       $posts[] = new Post();
        //var_dump($posts);
        return $posts;
    }

    public function getPost($id) {
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        //$req->bindValue(1, $id, \PDO::PARAM_INT);
        $req->execute(array($id));
        $post = $req->setFetchMode(\PDO::FETCH_CLASS, __DIR__ ."\Post");
        //$post = $req->fetchAll();
        $post = $req->fetch();
        //var_dump($post);
        return $post;
     
    }

    //public function newPost($title, $content) {
    public function newPost($title, $content) {
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $newPost= $db->prepare('INSERT INTO posts(title, content, creation_date) VALUES(?, ?,  NOW())');
        $newPost->execute(array($title, $content));
        $newPost->bindValue('?', $title->getTitle(), PDO::PARAM_STR);
        $newPost->bindValue('?', $content->getContent(), PDO::PARAM_STR);
        $newPost = new Post();
        //var_dump($newPost);
        return $newPost;
    }

    //Afficher la page de modification d'article
    public function getPostEdit($id) {
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array($id));
        $post = $req->fetch();
        return $post;
    }

    public function getUpdate($id) {
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $title = $_POST['title'];
        $content = $_POST['content'];
        $update = $db->prepare('UPDATE posts SET title = ?, content = ? WHERE id = ?');
        $update->execute(array($title, $content, $id));
        return $update;
    }

    public function getDelete($id) {
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $delete = $db->prepare('DELETE FROM posts WHERE id = ?');
        $delete->execute(array($id));
        return $delete;
    }
}
