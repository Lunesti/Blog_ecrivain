

<?php

//Front manager 

/*
//Inscription
function getSuscribe($pseudo, $pass, $email) {
    $db = dbConnect();
    $req = $db->prepare('INSERT INTO members(pseudo, pass, email, inscription_date) VALUES(?, ?, ?, CURDATE())');
    $subscribe = $req->execute(array($pseudo, $pass, $email));    
    return $subscribe;
}

//Connexion
function getConnexion($username) {
//  Récupération de l'utilisateur et de son pass haché
    $db = dbConnect();
    $req = $db->prepare('SELECT id, user_role, pass FROM members WHERE pseudo = ?');
    $req->execute(array($username));
    $login = $req->fetch();
    return $login;
}


//Afficher les posts
function getPosts(){
    $db = dbConnect();
    $posts = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC');
    return $posts;
}

//Afficher un seul post
function getPost($postId){
    $db = dbConnect();
    $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
    $req->execute(array($postId));
    $post = $req->fetch();
    return $post;
}

//Afficher les commentaires associés au post
function getComments($postId){
    $db = dbConnect();
    $req = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comment WHERE post_id = ? ORDER BY comment_date DESC');
    $req->execute(array($postId));
    $comments = $req->fetchAll();
    //var_dump($comments);
    return $comments;
}

//Ajouter un post
function getAddNewPost($title, $content) {
    $db = dbConnect();
    $newPost= $db->prepare('INSERT INTO posts(title, content, creation_date) VALUES(?, ?,  NOW())');
    $newPost->execute(array($title, $content));
    return $newPost;
}
    
//Ajouter un commentaire
function postComment($postId, $author, $comment){
    $db = dbConnect();
    $comments = $db->prepare('INSERT INTO comment(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
    $affectedLines = $comments->execute(array($postId, $author, $comment));
    return $affectedLines;
}


//Afficher la page de modification d'article
function getEditPost($id) {
    $db = dbConnect();
    $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
    $req->execute(array($id));
    $post = $req->fetch();
    return $post;
}
//Modifier un article 
function getUpdatePost($id) {
    $db = dbConnect();
        
    $title = $_POST['title'];
    $content = $_POST['content'];

    $update = $db->prepare('UPDATE posts SET title = ?, content = ? WHERE id = ?');
    $update->execute(array($title, $content, $id));
    return $update;
}

//Supprimer un post
function getDelete($id) {
    $db = dbConnect();
    $req = $db->prepare('DELETE FROM posts WHERE id = ?');
    $req->execute(array($id));
    return $req;
}
*/