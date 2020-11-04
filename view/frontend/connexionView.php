
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Design blog</title>
    <link rel="stylesheet" href= "../../Public/css/connexionView.css">   
    <link rel="stylesheet" href="../../Public/css/responsive.css">
</head>

<body>

    
        <header>
            <p>Jean FORTEROCHE</p>
            <nav>
                <ul>
                <li> <img src="https://img.icons8.com/color/48/000000/home.png"/><a href="">Accueil</a></li>
                <li> <img src="https://img.icons8.com/color/48/000000/open-book.png"/><a href="">Chapitres</a></li>
                <li> <img src="https://img.icons8.com/color/48/000000/contact-card.png"/><a href="">Contact</a></li>
                <li> <img src="https://img.icons8.com/color/48/000000/login-rounded-right.png"/><a href="connexionView.php">Connexion </a> <br>
                    </li>
                <li> <img src="https://img.icons8.com/color/48/000000/administrator-male--v1.png"/><a href="AdminView.php">Espace administrateur</a></li>
                
            </nav>
            
        </header>
        <div class="bloc-page">
            <section class="inscription">
                <form action="../../index.php?action=listPosts" method="post">
                <p>Connexion à votre espace</p>
                <p><img src="../../public/img/user.png" alt="user"></p>
                    <p>
                        <label for="pseudo"> <input type="text" name="pseudo" placeholder="Pseudo" required></label>
                        <label for="password"> <input type="text" name="pass"  placeholder="Password" required></label>
                        <input type="submit" id="submit" name="submit" value="Connexion">
                        <span class="inscrire">Pas encore inscrit ? <a class="" href="inscriptionView.php">S'inscrire</a></span>
                    </p>
                </form>
            </section>

            <footer></footer>
        </div>
            
</body>

</html>