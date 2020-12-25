<?php
require_once('Model/userManager.php');
require_once('Model/PostManager.php');
require_once('Model/CommentManager.php');

function connectUser($pseudo, $pass) {  //Connexion
    //var_dump($pseudo);
    $connexion = new Users();
    $connexion->setPseudo($pseudo);
    //var_dump($connexion);
    $postManager = new PostManager();
    $listposts =  $postManager->getPosts(); //Cette ligne sert à récupérer les données de posts
   
    $connect = new Members();
    $login = $connect->connexion($connexion);


    $isPasswordCorrect = password_verify($pass, $login['pass']);  
    if (!$login) {
        print 'Mauvais identifiant ou mot de passe !';
    } else {
        if (!$isPasswordCorrect) {
             print "Mauvais identifiant ou mot de passe";
        } else {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['user_role'] = $login['user_role'];
            if ($_SESSION['user_role'] == 'user') {
                $_SESSION['loggedin'] = true;     
                header('Location:index.php?action=listPosts');
            } else {
                print "Si vous êtes un admin, veuillez utiliser votre espace dédié";
            }
        }
    }
}

function connectAdmin($pseudo, $pass) {
    $connexion = new Users();
    $connexion->setPseudo($pseudo);
    $postManager = new PostManager();
    $listposts =  $postManager->getPosts(); 
   
    $connect = new Members();
    $login = $connect->connexion($connexion);


    $isPasswordCorrect = password_verify($pass, $login['pass']);  
    if (!$login) {
        print 'Mauvais identifiant ou mot de passe !';
    } else {
        if (!$isPasswordCorrect) {
             print "Mauvais identifiant ou mot de passe";
        } else {   
            
            $_SESSION['username'] = $_POST['username'];
            setcookie('user', $_SESSION['username']);
            $_SESSION['user_role'] = $login['user_role'];
            if ($_SESSION['user_role'] == 'admin') {  
                    $_SESSION['loggedin'] = true; 
                    header('Location:index.php?action=admin');
            } else{
                print "Vous n'êtes pas admin. Veuillez vous diriger vers le menu de connexion en haut du site pour vous connecter";
            }
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
    require('View/frontend/connexionUserView.php');
}

//Rediriger vers la page de connexion Admin
function adminConnexion() {
    require('View/frontend/connexionAdminView.php');
}


//Rediriger vers la page Admin
function adminPage() {
    $postManager = new PostManager();
    $posts = $postManager->getPosts();
    $commentManager = new CommentManager();
    $comments = $commentManager->getComments();
    $listReports = $commentManager->showReports();
    require('View/frontend/adminView.php');
}
