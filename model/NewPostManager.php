<?php
    require_once("Manager.php");

    //Récupérer un post et le mettre dans la base
    function getAddNewPost() {
        $db = dbConnect();
        $req= $db->prepare('INSERT INTO posts(author, title, content, creation_date) VALUES(?, ?, ?, CURDATE())');
        $req->execute(array($_POST['author'], $_POST['title'], $_POST['content']));
        $newPost = $req->fetch();
        return $newPost;
    }