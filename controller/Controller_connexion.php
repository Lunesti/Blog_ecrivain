<?php

function userLogged() {
    require(__DIR__ . '/../model/connexionManager.php');
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
                    require(__DIR__ . '/../view/postsView.php');
                }
            }
        }else {
            print "Veuillez saisir un mot de passe";
        }
    } else {
        print "Veuillez remplir ce champs !";
    }  
}
    