<?php
require_once('Model/userManager.php');
require_once('Model/PostManager.php');
require_once('Model/CommentManager.php');

function connect($pseudo) {  //Connexion
    //var_dump($pseudo);
    $connexion = new Users();
    $connexion->setPseudo($pseudo);
    //var_dump($connexion);
    $postManager = new PostManager();
    $listposts =  $postManager->getPosts(); //Cette ligne sert à récupérer les données de posts
    $connect = new Members();
    $login = $connect->getConnexion($connexion);


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
    $listReports = $commentManager->getReports();
    require('View/frontend/admin.php');
}