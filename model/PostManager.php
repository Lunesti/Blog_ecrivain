<?php

require_once('model/Manager.php');
require_once('Entity/Post.php');

class PostManager
{

    //Afficher les posts
    public function getPosts()
    {
        /*Connexion à la base*/
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        /*..*/

        /*Requête*/
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date_fr DESC');
        /*On définit le mode de récupération de la requête
         Récupérer sous forme d'objet la requete*/
        $req->setFetchMode(\PDO::FETCH_CLASS, Post::class);
        /*Fetch* All pour récupérer tout ce dont on a besoin*/
        $posts = $req->fetchAll();
        //var_dump($posts);
        return $posts;
    }

    //Afficher un post et ses commentaires
    public function getPost($id) 
    {
        $connexion = new Manager();
        $db = $connexion->dbConnect();
         /*Récupère le champs id, titre et contenu de la table post lorsque l'id = ?*/
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        //On passe dans le array l'id du post
        $req->execute(array($id));
        $req->setFetchMode(\PDO::FETCH_CLASS, Post::class);
        $post = $req->fetch();
        return $post;
    }

    //Ajouter un nouvel article
    public function addPost($newPost)
    { //$newPost est un nouvel objet qui va contenir le titre et le contenu
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        $post = $db->prepare('INSERT INTO posts(title, content, creation_date) VALUES( :title, :content, NOW())');
        $post->execute(array(
            "title" => $newPost->getTitle(),
            "content" => $newPost->getContent()
        ));
        return $post;
    }

    //Modifier un article
    public function updatePost($post)
    { //$post est notre nouvel objet qui va contenir le titre et le contenu
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        /*Modifie dans la table posts : le titre, le contenu quand l'id = ?*/
        $update = $db->prepare('UPDATE posts SET title = :title, content = :content WHERE id = :id');
        $update->execute(array(
            /*Assigner aux marqueurs nominatifs l'objet $post qui appel le getter titre, contenu et id */
            "title"=> $post->getTitle(),
            "content"=> $post->getContent(),
            "id"=> $post->getId()
        ));
        //var_dump($update);
        return $update;
    }

    //Supprimer un article
    public function deletePost($id)
    {
        $connexion = new Manager();
        $db = $connexion->dbConnect();
        /*Supprime dans la table posts quand l'id = ? */
        $req = $db->prepare('DELETE FROM posts WHERE id = :id');
        $delete = $req->execute(array(
            "id" => $id
        ));
        return $delete;
    }
}