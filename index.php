<?php
session_start();
require('controller/frontend.php');


//Afficher les posts
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'listPosts') {
        listPosts();
    }
    elseif($_GET['action'] == 'post') {
        post($_GET['id']);
    }

    //Ajouter un commentaire
    elseif ($_GET['action'] == 'addComment') {
        if (isset($_POST['comment']) && !empty($_POST["comment"])) {
            addComment($_GET['id'], $_SESSION['username'], $_POST['comment']);
        } else {
            print "Champs vides ou inexistant";
        }
    }
    //Ajouter un post
    elseif ($_GET['action'] == 'addPost') {
        if (isset($_POST['title']) && isset($_POST['content'])) {
            if (!empty($_POST['title']) && !empty($_POST['content'])) {
                addNewPost($_POST['title'], $_POST['content']);
            } else {
                print "Veuillez remplir tout les champs !";
            }
        } else {
            print "Champs titre et contenu inexistant";
        }
    //Afficher la page de modification d'article
    } elseif ($_GET['action'] == 'edit') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            editPost($_GET['id']);
        } else {
            print "Les champs title et content n'existent pas !";
        }
    }
    //Modifier un commentaire
    elseif ($_GET['action'] == 'updated') {
        if (isset($_POST['title']) && isset($_POST['content'])) {
            if (!empty($_POST['title']) && !empty($_POST['content'])) {
                updatePost($_GET['id']);
            } else {
                print "Les champs sont pas remplis !";
            }
        }
    } elseif ($_GET['action'] == 'delete') {
        delete($_GET['id']);
    }
    //Inscription
    elseif ($_GET['action'] == 'subscribed') {
        if (!empty($_POST['pseudo']) && !empty($_POST['pass']) && !empty($_POST['email'])) {
            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);
                subscribe($_POST['pseudo'], $pass_hache, $_POST['email']);
            } else {
                print "L'email n'est pas au bon format !";
            }
        } else {
            print "Veuillez remplir tout les champs !";
        }
    }
    //Connexion
    elseif ($_GET['action'] == 'connected') {
        if (isset($_POST['username']) && isset($_POST['userpass'])) {
            if (!empty($_POST['username']) && !empty($_POST['userpass'])) {
                userLogged($_POST['username']);
            } else {
                print "Veuillez remplir tout les champs !";
            }
        } else {
            print "Les champs n'existent pas";
        }
    } elseif ($_GET['action'] == 'post') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            post($_GET['id']);
        } else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    } //Deconnexion
    elseif($_GET['action'] == 'disconnected') {
        userLogOut($_SESSION['username']);
    }
}
    
else {
    listPosts();
}

 //Modifier un post


