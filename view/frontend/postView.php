<html>
    <head>
        <meta charset = 'UTF-8'>
        <title>Blog</title>
        <link rel="stylesheet" href= "Public/css/style.css">   
        <link rel="stylesheet" href="Public/css/responsive.css">
    </head>
    <body>

    <header>
        <p>Jean FORTEROCHE</p>
        <!--<h1>Billet simple pour l'Alaska</h1>-->
        <!--Si une session est ouverte, on récupère le commentaire
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                    if ($req === false) {
                        die("Impossible d'ajouter le commentaire !");
                    } else {
                        print "Commentaire ajouté !";
                    }
                }   else {
                    print "Vous devez vous connecter pour laisser un commentaire !";
                
            }-->
        <nav>
            <ul>
                <li> <img src="https://img.icons8.com/color/48/000000/home.png"/><a href="">Accueil</a></li>
                <li> <img src="https://img.icons8.com/color/48/000000/open-book.png"/><a href="">Chapitres</a></li>
                <li> <img src="https://img.icons8.com/color/48/000000/contact-card.png"/><a href="">Contact</a></li>
                <li> <img src="https://img.icons8.com/color/48/000000/login-rounded-right.png"/><a href="view/frontend/connexionView.php">Connexion </a> <br>
                    </li>
                <li> <img src="https://img.icons8.com/color/48/000000/administrator-male--v1.png"/><a href="view/AdminView.php">Espace administrateur</a></li>
            </ul>
        </nav>
            
    </header>

    <div class="bloc-page">
        <h1>Billet simple pour l'Alaska</h1>
        <p class="intro">Bienvenue, je publierais régulièrement chacun des chapitres de mon nouveau roman "Billet simple pour l'Alaska".
            N'hésitez-pas à commenter en partagant vos avis et ressentie.
            Je vous souhaites une bonne lecture et une bonne découverte de chacune des aventures de mon merveilleux roman.<br><br>
        <span class="ecrivain">Jean FORTEROCHE</span>
        <div class="banniere"><img src="public/img/banniere.jpg" alt="banniere"></div>

        <section class="billets">
            <div class="chapitres">
                <div clas="content">
                    <?php $title = htmlspecialchars($post['title']); ?>

                    <?php ob_start(); ?>
                        
                    <p><a class="return_post" href="index.php">Retour à la liste des billets</a></p>

                    <div class="news">
                        <h3>
                            <?= htmlspecialchars($post['title']) ?>
                            <em>le <?= $post['creation_date_fr'] ?></em>
                        </h3>
                        
                        <p>
                            <?= nl2br(htmlspecialchars($post['content'])) ?>
                        </p>
                        <h2>Commentaires</h2>

                    <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
                    
                    <?php
                                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                                    //var_dump($_SESSION['pseudo']);
                                    ?>
                                        <br><br>
                                        <?= $_SESSION['pseudo'];?>
                                        <textarea id="comment" name="comment"></textarea>                     
                                        <input type="submit"/>
                                </form>
                                <?php                     
                                } else {
                                    var_dump($_SESSION['pseudo']);
                                    die("Vous devez vous connecter pour ajouter un commentaire !");
                                }
                                ?>
                    </form>

                    <?php
                    while ($comment = $comments->fetch())
                    {
                    ?>
                        <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
                        <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
                    <?php
                    }
                    ?>
                    <?php $content = ob_get_clean(); ?>

                    <?php require('template.php'); ?>
                </div>
            </div>

            
    </div>        

    </body>
</html>