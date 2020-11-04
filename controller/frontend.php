<?php

require('model/frontend.php');

//Afficher les posts
function listPosts()
{
    $posts = getPosts();

    require('view/frontend/listPostsView.php');
}

//Afficher le post et ses commentaires
function post()
{
    $post = getPost($_GET['id']);
    $comments = getComments($_GET['id']);

    require('view/frontend/postView.php');
}

//Ajouter commentaire
function addComment($postId, $author, $comment)
{
    $affectedLines = postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        die('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}


//Inscription
function suscribe() {
    if( !empty($_POST['pseudo']) && !empty($_POST['pass']) && !empty($_POST['email'])) {
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);
            var_dump($pass_hache);
            $suscribe = getSuscribe();
            require('View/frontend/listpostsView.php');
       } else {
           print "Champs vides / l'email n'est pas au bon format !";
       }
    }
}

//Connexion
function userLogged() {

    $login = getConnexion();

    if (isset($_POST['pseudo']) && !empty($_POST['pseudo'])) {
        if (isset($_POST['pass']) && !empty($_POST['pass'])) {
            $isPasswordCorrect = password_verify($_POST['pass'], $login['pass']);
            var_dump($isPasswordCorrect);
            if (!$login) {
                print 'Mauvais identifiant ou mot de passe !';
            } else {
                if (!$isPasswordCorrect) {
                    echo 'Mauvais identifiant ou mot de passe !';
                   
                } else {
                    
                    print "Vous êtes connecté !";
                    $_SESSION['loggedin'] = true;
                    $_SESSION['pseudo'] = $_POST['pseudo'];
                    require('View/frontend/listpostsView.php');
                }
            }
        }else {
            print "Veuillez saisir un mot de passe";
        }
    } else {
        print "Veuillez remplir ce champs !";
    }  
}
    
    