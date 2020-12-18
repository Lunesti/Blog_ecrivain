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
    $login = $connect->connexion($connexion);


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
                header('Location:index.php?action=listPosts');
            } else{
                header('Location:index.php?action=admin');
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
    require('View/frontend/connexionUserView.php');
}

//Rediriger vers la page de connexion Admin
function adminConnexion() {
    require('View/frontend/connexionAdminView.php');
}
