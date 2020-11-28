<?php
require_once('Model/PostManager.php');
require_once('Model/CommentManager.php');
//CREATE / READ / UPDATED / DELETE

function readAll() {  //Afficher les posts

    $postManager = new PostManager();
    $listposts = $postManager->getPosts();    
    //var_dump($listposts);
    require('view/frontend/listPostsView.php');
}

function read($id) { //Afficher le post et ses commentaires
    $postManager = new PostManager(); 
    $post = $postManager->getPost($_GET['id']);
    $commentManager = new CommentManager();
    $comment = $commentManager->getComment($_GET['id']); 
    require('view/frontend/postView.php');
}

function create($title, $content) { //Ajouter un post 
    
    $post = new Post();
    $post->setTitle($title);
    $post->setContent($content);
    //var_dump($title, $content);
    $postManager = new PostManager();
    $postManager->addPost($post);
    var_dump($post);
    $posts = $postManager->getPosts();    
    //var_dump($posts) ;
    header('Location: index.php?action=listPosts');
}

function update($title, $content) { //Modifier un post
    var_dump($title, $content);
    $update = new Post();
    $update->setTitle($title);
    $update->setContent($content);
    var_dump($update);
    $edit = new PostManager();
    var_dump($edit);
    $postEdit = $edit->getUpdate($update);
    var_dump($postEdit);
    require("View/frontend/admin.php"); //Page d'administration du site
}

function deletePost($id) { //Supprimer un post
    $delete = new Post($id);
    $postManager = new PostManager();
    $posts = $postManager->getPosts();
    $postManager->getDelete($delete);
    $commentManager = new CommentManager();
    $comments = $commentManager->getComments();
    require("View/frontend/admin.php"); //Page d'administration du site
}


//Rediriger vers la page de modification de post
function updatePage(){
    require("View/frontend/updateView.php");
}
