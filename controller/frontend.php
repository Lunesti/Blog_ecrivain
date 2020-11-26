<?php
require_once('Model/PostManager.php');
require_once('Model/CommentManager.php');
require_once('Model/userManager.php');




//CREATE / READ / UPDATED / DELETE

function readAll() {  //Afficher les posts
    $postManager = new PostManager();
    $posts = $postManager->getPosts();
    
    //$posts = getPosts();
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
    $post = new Post($title, $content);
    $postManager = new PostManager();
    $postManager->addPost($post);
    $posts = $postManager->getPosts();     
    header('Location: index.php?action=listPosts');
}

function update($title, $content) { //Modifier un post
    $update = new Post($title, $content);
    $postManager = new PostManager();
    
    $postManager->getUpdate($update);
    var_dump($update);
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


//UTILISATEURS

function subscribe($pseudo, $pass, $email) {  //Inscription
    $subscribe = new Members($pseudo, $pass, $email);
    $postManager = new PostManager();
    $posts = $postManager->getPosts();
    $membersManager = new Members();
    $subscribe = $membersManager->newUser($subscribe);
    var_dump($subscribe);
    header('Location: index.php?action=listPosts');
}

function connect($username) {  //Connexion
    $postManager = new PostManager();
    $posts =  $postManager->getPosts(); //Cette ligne sert à récupérer les données de posts
    $membersManager = new Members();
    $login = $membersManager->getConnexion($username);
    $isPasswordCorrect = password_verify($_POST['userpass'], $login['pass']);  
    if (!$login) {
        print 'Mauvais identifiant ou mot de passe !';
    } else {
        if (!$isPasswordCorrect) {
             print "Mauvais identifiant ou mot de passe";
        } else {
            //print "bienvenue, " .$_SESSION['username'];
            $_SESSION['loggedin'] = true;
            //var_dump($_SESSION['loggedin']);
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['user_role'] = $login['user_role'];
            if ($_SESSION['user_role'] == 'user') {     
                require('view/frontend/listPostsView.php');
            } else{
                adminPage();
            }
        }
    }
}
function logOut() { //Deconnexion
    $_SESSION = array();
    session_destroy();
    header('Location: index.php?action=listPosts');
}



//REDIRECTIONS

//Rediriger vers la page d'inscription
function subscription() {
    require('View/frontend/inscriptionView.php');
}

//Rediriger vers la page de connexion User
function userConnexion() {
    require('View/frontend/connexionView.php');
}

//Rediriger vers la page de connexion Admin
function adminConnexion() {
    require('View/frontend/adminView.php');
}

//Rediriger vers la page Admin
function adminPage() {
    $postManager = new PostManager();
    $posts = $postManager->getPosts();
    $commentManager = new CommentManager();
    $comments = $commentManager->getComments();
    require('View/frontend/admin.php');
}

//Rediriger vers la page de modification de post
function updatePage(){
    require("View/frontend/updateView.php");
}

//Ajouter commentaire
function addComment($postId, $author, $comment)
{
    $comments = new Comments($postId, $author, $comment);
    $commentManager = new CommentManager();
    $affectedLines =$commentManager->postComment($comments);

    $postManager = new PostManager();
    $post = $postManager->getPost($_GET['id']);


    if ($affectedLines === false) {
        die('Impossible d\'ajouter le commentaire !');
    } else {
        header('Location: index.php?action=post&id=' .$postId);
    }
}

function report() {
    $report = new Comments();
    $commentManager = new CommentManager();

    $reported = $commentManager->reportComment($report);
    var_dump($reported);
}