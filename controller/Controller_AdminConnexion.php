<?php
function adminLogged() {
    require(__DIR__ . '/../model/AdminManager.php');
    $loginAdmin = getAdminConnexion();
    
    $isPasswordCorrect = password_verify($_POST['pass'], $loginAdmin['pass']);

    var_dump($isPasswordCorrect);

    if (!$loginAdmin) {
        print 'Mauvais identifiant ou mot de passe !';
    } else {

        if ($isPasswordCorrect) {
            print "Vous êtes connecté !";
            $_SESSION['loggedin'] = true;
            $_SESSION['admin'] = $_POST['admin'];
            require(__DIR__ . '/../view/addPostView.php');
        } else {
            echo 'Mauvais identifiant ou mot de passe !';
        }
    }
    
}