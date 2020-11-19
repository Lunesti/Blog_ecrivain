<?php

require_once('Model/PostManager.php');
require_once('Model/CommentManager.php');
require_once('Model/userManager.php');
//Afficher les posts
function listPosts(){

    $postManager = new PostManager();
    $posts = $postManager->getPosts();
    //$posts = getPosts();
    require('view/frontend/listPostsView.php');
}

//Afficher le post et ses commentaires
function post($id){ 

    $postManager = new PostManager(); 
    $commentManager = new CommentManager();

    $post = $postManager->getPost($_GET['id']);
    
    //var_dump($post);
    $comments = $commentManager->getComments($_GET['id']);

    require('view/frontend/postView.php');

   /* $post = getPost($id);
    $comments = getComments($id);
    */
}


//Inscription
function subscribe($pseudo, $pass, $email) {
    $postManager = new PostManager();
    $posts = $postManager->getPosts();

    //$posts = getPosts();

    $membersManager = new Members();
    $subscribe = $membersManager->newUser($pseudo, $pass, $email);

    //var_dump($pass_hache);
    //$subscribe = newUser($pseudo, $pass, $email);
    require('view/frontend/listPostsView.php');
}

//Connexion
function userLogged($username) {

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
            //var_dump($login['user_role']);
            print "Vous êtes connecté !";
            $_SESSION['loggedin'] = true;

            $_SESSION['username'] = $_POST['username'];
            $_SESSION['user_role'] = $login['user_role'];
            if ($_SESSION['user_role'] == 'user') {
                require('view/frontend/listPostsView.php');
            } else {
                require('view/frontend/admin.php');
            }
        }
    }
}

function userLogOut($username) {
    $deconnexion = getDeconnexion($username);
    require('view/frontend/listPostsView.php');
}
 

//Ajouter un post 
function addNewPost($title, $content) {
    $postManager = new PostManager();
    $posts = $postManager->getPosts();
    $newPost = $postManager->newPost($title, $content);
    require('view/frontend/listPostsView.php');
}

//Ajouter commentaire
function addComment($postId, $author, $comment) {
    //Quand j'ajoute un commentaire, je retourne dans postView, donc je dois récupérer $post et $comments pour appeler les données depuis postView

    $postManager = new PostManager();
    $post = $postManager->getPost($_GET['id']);


    $commentManager = new CommentManager();
    $comments = $commentManager->getComments($_GET['id']);
    $affectedLines = $commentManager->postComment($postId, $author, $comment);

    /*$post = getPost($_GET['id']); 
    $comments = getComments($_GET['id']);
    $affectedLines = postComment($postId, $author, $comment);*/

    if ($affectedLines === false) {
        die('Impossible d\'ajouter le commentaire !');
    }
    else {
       require('View/frontend/postView.php');
    }
}


//Modifier un article
function editPost($id) {

    $postManager = new PostManager();
    $post = $postManager->getPostEdit($id);
    //$post = getPostEdit($id);
    if ($post === false) {
        print "Impossible d'd'accéder à la page demandé";
    }else {
        require('View/frontend/UpdateView.php');
    }
}

function updatePost($id) {

    $postManager = new PostManager();
    $post = $postManager->getPost($_GET['id']);
    $update = $postManager->getUpdate($id);

    $commentManager = new CommentManager();
    $comments = $commentManager->getComments($_GET['id']);

    //$post = getPost($_GET['id']);
    //$comments = getComments($_GET['id']);
    //$update = getUpdate($id);
    require('view/frontend/postView.php');
}
//Afficher le post et ses commentaires


function delete($id) {

    $postManager = new PostManager();
    $posts =  $postManager->getPosts($_GET['id']);
    $post =  $postManager->getPost($_GET['id']);
    $delete = $postManager->getDelete($id);

    $commentManager = new CommentManager();
    $comments = $commentManager->getComments($_GET['id']);

    //$posts = getPosts($_GET['id']);
    //$post = getPost($_GET['id']);
    //$comments = getComments($_GET['id']);
    //$delete = getDelete($id);
    require('view/frontend/listPostsView.php');
}