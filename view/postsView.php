<?php

?>
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
                    <li> <img src="https://img.icons8.com/color/48/000000/home.png"/>Accueil</li>
                    <li> <img src="https://img.icons8.com/color/48/000000/open-book.png"/>Chapitres</li>
                    <li> <img src="https://img.icons8.com/color/48/000000/contact-card.png"/>Contact</li>
                    <li> <img src="https://img.icons8.com/color/48/000000/login-rounded-right.png"/>Connexion <br>
                    </li>
                    <li> <img src="https://img.icons8.com/color/48/000000/administrator-male--v1.png"/>Espace administrateur</li>
                </ul>
                <!--<form action="index.php?action=connexion" method="post">
                    <p>
                        <label for="pseudo"> <input type="text" name="pseudo" placeholder="Pseudo" required></label>
                        <label for="password"> <input type="text" name="pass"  placeholder="Password" required></label>
                        <input type="submit" id="submit" name="submit" value="Connexion">
                    </p>
                </form>-->
            </nav>
            
            <!--<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit vero quis distinctio cupiditate perferendis. Reprehenderit reiciendis at quibusdam maiores obcaecati, a magni amet dicta consequuntur doloremque voluptatum repellendus et. Consectetur.</p>-->
        </header>
        <div class="bloc-page">
        <h1>Billet simple pour l'Alaska</h1>
        <p class="intro">Bienvenue, je publierais régulièrement chacun des chapitres de mon nouveau roman "Billet simple pour l'Alaska".
N'hésitez-pas à commenter en partagant vos avis et ressentie.
Je vous souhaites une bonne lecture et une bonne découverte de chacune des aventures de mon merveilleux roman.<br><br>
<span class="ecrivain">Jean FORTEROCHE</span></p>
        <div class="banniere"><img src="public/img/banniere.jpg" alt="banniere"></div>
            <section class="billets">
                
                <div class="chapitres">
                    <div clas="content">
                        <?php while ($data = $posts->fetch()) {?>
                        <p class="titre"><?= htmlspecialchars($data['title']) ?>, écrit le : <?= $data['creation_date_fr'] ?> </p> 
                        <p><?= nl2br(htmlspecialchars($data['content'])) ?></p><br />
                        <p><a class="commentaires" href="index.php?action=post&amp;id=<?= $data['id'] ?>">Acceder aux commentaires</a></p>
                        <?php } $posts->closeCursor();?>
                    </div>
                </div>
                

        </section>
        <footer></footer>
    </div>
</body>

</html>