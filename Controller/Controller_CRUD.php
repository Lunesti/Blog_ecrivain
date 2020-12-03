<?php
require_once('Model/PostManager.php');
require_once('Model/CommentManager.php');
//CREATE / READ / UPDATED / DELETE

function readAll() {  //Afficher les posts
    $postManager = new PostManager();
    $listposts = $postManager->getPosts();
    require('view/frontend/listPostsView.php');
}

function read($id) { //Afficher le post et ses commentaires
    $postManager = new PostManager(); 
    $post = $postManager->getPost($_GET['id']);
    $commentManager = new CommentManager();
    $comment = $commentManager->getComment($_GET['id']); 
    require('view/frontend/postView.php');
}

function create($title, $content) {
    /*Création d'un nouvel objet Post*/
    $post = new Post();
    /*Récupération des setters en passant en paramètre les variables qu'on souhaite récupérer*/
    $post->setTitle($title);
    $post->setContent($content);

    $postManager = new PostManager();
    $postManager->addPost($post);
    /*On récupère la méthode getPosts pour afficher la liste des posts*/
    $posts = $postManager->getPosts();    
    header('Location: index.php?action=listPosts');
}

function update($id, $title, $content) {

    /*Création d'un nouvel objet Post*/
    $update = new Post();
    /*Récupération des setters en passant en paramètre les variables qu'on souhaite récupérer*/
    $update->setTitle($title);
    $update->setContent($content);
    $update->setId($id);
    
    $postManager = new PostManager();
    $postEdit = $postManager->getUpdate($update);
    /*On récupère la méthode getPosts pour afficher la liste des posts*/
    $posts = $postManager->getPosts();

    /*On récupère la méthode getComments pour afficher les commentaires*/
    $commentManager = new CommentManager();
    $comments = $commentManager->getComments();
    
    //var_dump($postEdit);
    require("View/frontend/admin.php"); //Page d'administration du site
}

function deletePost($id) {
    $postManager = new PostManager();
    $posts = $postManager->getPosts();  
    $postManager->getDelete($id);
    $commentManager = new CommentManager();
    $comments = $commentManager->getComments();
    require("View/frontend/admin.php"); //Page d'administration du site
}


function updatePage(){
    /*Je récupère la méthode getPost avec l'id du post pour récupérer le post à modifier et j'appel la vue Update*/
    $postManager = new PostManager(); 
    $post = $postManager->getPost($_GET['id']);
    require("View/frontend/updateView.php");
}
