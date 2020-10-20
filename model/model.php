
<?php
//Récupération des billets
    function getPosts() {
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', '');
        }
        catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $req = $bdd->prepare('INSERT INTO posts (title, author, content) VALUES(?, ?, ?)');
        $req->execute(array($_POST['title'], $_POST['author'], $_POST['content']));
        if($_POST['title'] && $_POST['author'] && $_POST['content'] !== null) {
            print "Les données ont bien été ajoutés";
           
        }else {
            print "les données n'ont pasété ajoutées";
        }
        return $req;
    }
?>

<?php
//Affichage des billets
    function showPosts() {
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', '');
        }
        catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $req = $bdd->query('SELECT title, author, content FROM posts');
        return $req;
    }

