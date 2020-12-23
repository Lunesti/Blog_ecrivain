<?php
require_once('Model/userManager.php');
require_once('Model/PostManager.php');

function subscribe($pseudo, $pass, $email) {  //Inscription
    $subscribe = new Users($pseudo, $pass, $email);
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
