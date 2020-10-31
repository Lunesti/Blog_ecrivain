<?php

?>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Design blog</title>
    <link rel="stylesheet" href= "../public/css/connexionView.css">   
    <link rel="stylesheet" href="../public/css/responsive.css">
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
                    <li> <img src="https://img.icons8.com/color/48/000000/login-rounded-right.png"/><a href="">Connexion </a> <br>
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

            <section class="inscription">
                
                <form action="../index.php?action=listPosts" method="post">
                <p>Connexion à votre espace</p>
                <p><img src="../public/img/user.png" alt="user"></p>
                    <p>
                        <label for="pseudo"> <input type="text" name="pseudo" placeholder="Pseudo" required></label>
                        <label for="password"> <input type="text" name="pass"  placeholder="Password" required></label>
                        <input type="submit" id="submit" name="submit" value="Connexion">
                        <span class="inscrire">Pas encore inscrit ? <a class="lien_inscrire" href="">S'inscrire</a></span>
                    </p>
                </form>
            </section>

        <footer></footer>
    </div>
</body>

</html>