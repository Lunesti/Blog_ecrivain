<?php
session_start();

ini_set('display_errors', 'on');

require('Controller/Controller_CRUD.php');
require('Controller/Controller_subscribe.php');
require('Controller/Controller_connexion.php');
require('Controller/Controller_comment.php');

//Afficher les posts
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'listPosts') {
        readAll();
    } elseif ($_GET['action'] == 'post') {
        read($_GET['id']);
    } elseif ($_GET['action'] == 'report') {
        listReports($_GET['id']);
    } 

    //Ajouter un commentaire
    elseif ($_GET['action'] == 'addComment') {
        if (isset($_POST['comment']) && !empty($_POST["comment"])) {
            addComment($_GET['id'], $_SESSION['username'], strip_tags($_POST['comment']));
        } else {
            print "Champs vides ou inexistant";
        }
    }
    //Ajouter un post
    elseif ($_GET['action'] == 'newPost') {
        if (isset($_POST['title']) && isset($_POST['content'])) {
            if (!empty($_POST['title']) && !empty($_POST['content'])) {
                create($_POST['title'], $_POST['content']);
            } else {
                print "Veuillez remplir tout les champs !";
            }
        } else {
            print "Champs titre et contenu inexistant";
        }

    //Afficher la page de modification d'article
    } elseif ($_GET['action'] == 'updatePost') {
        updatePage($_GET['id']);
    }
    //Modifier un post
    elseif ($_GET['action'] == 'postUpdated') {
        if (isset($_POST['id']) && isset($_POST['title']) && isset($_POST['content'])) {
            if (!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['id'])) {
                update($_POST['id'], $_POST['title'], $_POST['content']);
            } else {
                print "Les champs sont pas remplis !";
            }
        }
    //Supprimer un post    
    }
    
    elseif($_GET['action'] == 'moderate') {
        moderate($_GET['id']);
    }
        elseif ($_GET['action'] == 'delete') {
        deletePost($_GET['id']);
    }
    elseif ($_GET['action'] == 'deleteComment') {
        deleted($_GET['id']);
    }

    //Afficher la page d'inscription 
    elseif($_GET["action"] == "subscription") {
        subscribeView();
    }
    //Inscription
    elseif ($_GET['action'] == 'subscribed') {
        if (!empty($_POST['pseudo']) && !empty($_POST['pass']) && !empty($_POST['email'])) {
            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                //$pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);
                subscribe($_POST['pseudo'], $_POST['pass'], $_POST['email']);
            } else {
                print "L'email n'est pas au bon format !";
            }
        } else {
            print "Veuillez remplir tout les champs !";
        }
    }

    //Afficher la page de connexion User
    elseif($_GET['action'] == "connexion") {
       userConnexion();
    }

    //Afficher la page de connexion Admin
    elseif($_GET['action'] == "connexionAdmin") {
        adminConnexion();
    }

    //Afficher la page Admin
    elseif($_GET['action'] == 'admin') {
        adminPage();
    }

    //Connexion
    elseif ($_GET['action'] == 'connected') {
        if (isset($_POST['username']) && isset($_POST['userpass'])) {
            if (!empty($_POST['username']) && !empty($_POST['userpass'])) {
                connect($_POST['username'], $_POST['userpass']);
            } else {
                print "Veuillez remplir tout les champs !";
            }
        } else {
            print "Les champs n'existent pas";
        }

    } elseif ( $_GET['action'] == 'adminpost')  {

        if (isset($_GET['id']) && $_GET['id'] > 0) {
            read($_GET['id']);
        } else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }
  
    //Deconnexion
    elseif($_GET['action'] == 'disconnected') {
       logOut($_SESSION['username']);
    }
}
    
else {
    readAll();
}

