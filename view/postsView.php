
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Design blog</title>
    <link rel="stylesheet" href= "public/css/style.css">   
    <link rel="stylesheet" href="public/css/responsive.css">
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
                <li> <img src="https://img.icons8.com/color/48/000000/login-rounded-right.png"/><a href="view/connexionView.php">Connexion </a> <br>
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
            </p>
            <div class="banniere"><img src="public/img/banniere.jpg" alt="banniere"></div>
            <section class="billets">
                <div class="chapitres">
                    <div clas="content">
                        <?php while ($data = $posts->fetch()) {?>
                            <p class="titre"><?= htmlspecialchars($data['title']); ?>, écrit le : <?= $data['creation_date_fr']; ?> </p> 
                            <p><?= nl2br(htmlspecialchars($data['content'])); ?></p><br />
                            <p><a class="commentaires" href="index.php?action=post&amp;id=<?= $data['id'] ?>">Acceder aux commentaires</a></p>
                        <?php 
                        }$posts->closeCursor();
                        ?>
                        <?php $content = ob_get_clean(); ?>
                        <?php require('template.php'); ?>
                     </div>
                 </div>     
            </section>
            <footer></footer>
        </div>
</body>

</html>


