<?php
require_once('Model/userManager.php');
require_once('Model/PostManager.php');

function subscribe($pseudo, $pass, $email) {  //Inscription
    $subscribe = new Members($pseudo, $pass, $email);
    $postManager = new PostManager();
    $posts = $postManager->getPosts();
    $membersManager = new Members();
    $subscribe = $membersManager->newUser($subscribe);
    var_dump($subscribe);
    header('Location: index.php?action=listPosts');
}

//Rediriger vers la page d'inscription
function subscription() {
    require('View/frontend/inscriptionView.php');
}
