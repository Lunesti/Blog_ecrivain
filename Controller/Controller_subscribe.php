<?php
require_once('Model/userManager.php');
require_once('Model/PostManager.php');

function subscribe($pseudo, $pass, $email) {  //Inscription
    var_dump($pseudo, $pass, $email);

    $subscribe = new Users($pseudo, $pass, $email);
    $subscribe->setPseudo($pseudo);
    $subscribe->setPass($pass);
    $subscribe->setEmail($email);
    var_dump($subscribe);

    $postManager = new PostManager();
    $posts = $postManager->getPosts();

    $membersManager = new Members();
    $newUser = $membersManager->newUser($subscribe);
    var_dump($newUser);
    header('Location: index.php?action=listPosts');
}

//Rediriger vers la page d'inscription
function subscribeView() {
    require('View/frontend/inscriptionView.php');
}
