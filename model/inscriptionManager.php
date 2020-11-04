<!--INSCRIPTION-->
<?php
require_once("Manager.php");

    function getSuscribe() {
        $db = dbConnect();
        $req = $db->prepare('INSERT INTO members(pseudo, pass, email,  inscription_date) VALUES(?, ?, ?, CURDATE())');
        $suscribe = $req->execute(array($_POST['pseudo'], $_POST['pass'], $_POST['email']));
        $pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);
        return $suscribe;
    }