<?php
function suscribe() {
    require(__DIR__ . '/../model/inscriptionManager.php');
    if( !empty($_POST['pseudo']) && !empty($_POST['pass']) && !empty($_POST['email'])) {
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);
            var_dump($pass_hache);
            $suscribe = getSuscribe();
            require(__DIR__ . '/../view/postsView.php');
       } else {
           print "Champs vides / l'email n'est pas au bon format !";
       }
    }
}
    