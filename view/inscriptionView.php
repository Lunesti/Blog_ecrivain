<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Design blog</title>
    <link rel="stylesheet" href= "../public/css/style.css">
    <link rel="stylesheet" href="../public/css/responsive.css">
</head>

<body>
    <header>
            <p>Jean FORTEROCHE</p>
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
        <section class="billets">
            <form action="../index.php?action=listPosts" method="post">
                 <label for="pseudo">Entrer un pseudo : <input type="text" name="pseudo" required></label><br>
                <label for="pass">Entrer un password : <input type="text" name="pass" required></label><br>
                <label for="pass">Retapez votre password : <input type="text" name="pass" required></label><br>
                <label for="email">Entrer un email : <input type="text" name="email" required></label><br>
                <input type="submit" name="submit">
            </form>
        </section>
    </div>
</body>

</html>