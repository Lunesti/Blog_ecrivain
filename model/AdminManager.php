<?php
    require_once("Manager.php");

    function getAdminConnexion() {
        $db = dbConnect();
        $req = $db->prepare('SELECT id, pass FROM members WHERE pseudo = ?');
        $req->execute(array($_POST['admin']));
        $loginAdmin = $req->fetch();
        return $loginAdmin;
    }