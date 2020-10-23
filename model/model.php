<?php
require_once("Manager.php");

    function getAdmin() {
        $db = dbConnect();
        // Hachage du mot de passe
        //$pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);

        $req = $db->prepare('SELECT email, pass FROM admin WHERE email = ?');
        $req->execute(array($_POST['email']));
        $resultat = $req->fetch();
        $isPasswordCorrect = $_POST['pass'] . $resultat['pass'];
        if (!$resultat) {
            echo 'Mauvais identifiant ou mot de passe.';
        } else {
            if ($isPasswordCorrect) {
                session_start();
                $_SESSION['email'] = $_POST['email'];
                echo 'Vous êtes connecté !';
            } else {
                echo 'Mauvais identifiant ou mot de passe !';
            }
            return $req;
        }
    }
     
    //Récupérer les posts
    function getPosts() {
        $db = dbConnect();
        $posts = $db->query('SELECT id, title, author, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts');
        return $posts;
    }

    

    //Récupérer UN post
    /*function getPost($postId) {
        $db = dbConnect();
        $post = $db->prepare('SELECT id, title, author, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        $post->execute(array($postId));
        return $post;
    }*/

    //Ajouter un post
    /*function addPost() {
        $db = dbConnect();
        $post = $db->prepare('INSERT INTO posts (title, author, content, creation_date) VALUES(?, ?, ?, NOW()))');
        $newPost = $post->execute(array($_POST['title'], $_POST['author'], $_POST['comment']));
        return $newPost;
    }*/
    

    //Modifier un billet

    /*function editPost(){
        $db = dbConnect();
    }

    //Supprimer un billet

    function deletePost() {
        $db = dbConnect();
    }*/
