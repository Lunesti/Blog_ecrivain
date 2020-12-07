<?php
require_once('Model/PostManager.php');
require_once('Model/CommentManager.php');
//CREATE / READ / UPDATED / DELETE

function readAll() 
{  
    //Afficher les posts
    $postManager = new PostManager();
    $listposts = $postManager->getPosts();
    require('view/frontend/listPostsView.php');
}



function read($id) 
{   
    //On crée une nouvelle instance de PostManager et on appel les méthodes getPost et getComment en leur passant à chacun l'id post 
    $postManager = new PostManager(); 
    $post = $postManager->getPost($_GET['id']);
    $commentManager = new CommentManager();
    $comment = $commentManager->getComment($_GET['id']); 
    require('view/frontend/postView.php');
}

function create($title, $content) 
{
    /*Création d'un nouvel objet Post*/
    $post = new Post();
    /*On crée une nouvelle instance de Post, et on appel les setters en leur passant les variables titre et contenu*/
    $post->setTitle($title);
    $post->setContent($content);
    $postManager = new PostManager();
    /*On crée une nouvelle instance de postManager et on passe en paramètre l'objet $post dans la méthode addPost*/ 
    $postManager->addPost($post);  
    header('Location: index.php?action=listPosts');
}

function update($id, $title, $content)
{
    /*Création d'un nouvel objet Post*/
    $update = new Post();
    /*On crée une nouvelle instance de Post, et on appel les setters en leur passant les variables titre, contenu et id*/
    $update->setTitle($title);
    $update->setContent($content);
    $update->setId($id);
    /*On crée une nouvelle instance de postManager et on passe en paramètre l'objet $update dans la méthode getUpdate*/
    $postManager = new PostManager();
    $postEdit = $postManager->getUpdate($update);
    header('Location: index.php?action=listPosts');
}

function updatePage()
{
    /*Je récupère la méthode getPost avec l'id du post pour récupérer le post à modifier et j'appel la vue Update*/
    $postManager = new PostManager(); 
    $post = $postManager->getPost($_GET['id']);
    require("View/frontend/updateView.php");
}

function deletePost($id) /*On récupère le post à supprimer*/
 {
    $postManager = new PostManager();  
    /*On appel la méthode getDelete en lui passant l'id du post à supprimer*/
    $postManager->getDelete($id);
    header('Location: index.php?action=listPosts');
}


