
<?php
require_once("Manager.php");
    function getPosts() {
        $db = dbConnect();
        $posts = $db->query('SELECT id, title, author, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts');
        return $posts;
    }