<?php
require_once('Model/UserManager.php');
require_once('Model/PostManager.php');

function subscribe($pseudo, $pass, $email) {  //Inscription
    $subscribe = new User($pseudo, $pass, $email);
    $subscribe->setPseudo($pseudo);
    $subscribe->setPass($pass);
    $subscribe->setEmail($email);
    
    $membersManager = new Members();
    $newUser = $membersManager->newUser($subscribe);
 
    header('Location: index.php?action=listPosts');
}

//Rediriger vers la page d'inscription
function subscribeView() {
    require('View/frontend/inscriptionView.php');
}
