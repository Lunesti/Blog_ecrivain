<?php
require_once('Model/UserManager.php');
require_once('Model/PostManager.php');
require_once('Model/CommentManager.php');

function connectUser($pseudo, $pass) {  //Connexion
    $newUser = new User();
    $newUser->setPseudo($pseudo);
    $newUser->setPass($pass);

    $member = new UserManager();
    $login = $member->connection($newUser);

    $isPasswordCorrect = password_verify($pass, $login['pass']);  
    if (!$isPasswordCorrect) {
        print "Mauvais identifiant ou mot de passe";
    } else {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['user_role'] = $login['user_role'];
        if ($_SESSION['user_role'] == 'user') {    
             header('Location:index.php?action=listPosts');
        } else {
             print "Si vous êtes un admin, veuillez utiliser votre espace dédié";
             $_SESSION = array();
             session_destroy();
        }
    }
}

function connectAdmin($pseudo, $pass) {
    $connected = new User();
    $connected->setPseudo($pseudo);
    $connected->setPass($pass);

    $member = new UserManager();
    $login = $member->connection($connected);

    $isPasswordCorrect = password_verify($pass, $login['pass']);  
    if (!$isPasswordCorrect) {
        print "Mauvais identifiant ou mot de passe";
    } else {         
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['user_role'] = $login['user_role'];
        if ($_SESSION['user_role'] == 'admin') {  
            header('Location:index.php?action=admin');
        } else{
            print "Vous n'êtes pas admin. Veuillez vous diriger vers le menu de connexion en haut du site pour vous connecter";
            $_SESSION = array();
            session_destroy();
        }
    }
}

function logOut() { //Deconnexion    
    $_SESSION = array();
    //setcookie('user', $_SESSION['username'], time() - 42000);
    session_destroy();
    header('Location: index.php?action=listPosts');
}

//Rediriger vers la page de connexion User
function userConnexion() {
    require('View/frontend/ConnexionUserView.php');
}

//Rediriger vers la page de connexion Admin
function adminConnexion() {
    require('View/frontend/ConnexionAdminView.php');
}


//Rediriger vers la page Admin
function adminPage() {
    $postManager = new PostManager();
    $posts = $postManager->getPosts();
    $commentManager = new CommentManager();
    $comments = $commentManager->getComments();
    $listReports = $commentManager->showReports();
    require('View/frontend/AdminView.php');
}


	