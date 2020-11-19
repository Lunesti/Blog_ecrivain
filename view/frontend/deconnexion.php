<?php
session_start();

//Suppression des variables de session et de la session
$_SESSION = array();
session_destroy();

?>

<p>Vous êtes maintenant déconnecté.</p>


<p>Revenir à la <a href="../../index.php?action=listPosts">Page d'accueil</a></p>
