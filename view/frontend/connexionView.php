<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Design blog</title>
    <link rel="stylesheet" href= "Public/css/connexionView.css">   
    <link rel="stylesheet" href="Public/css/responsive.css">
</head>

<body>

            <?php include('header.php');?>        

        <div class="bloc-page">
            <section class="inscription">
                <form action="index.php?action=connected" method="post">
                
                <p>Connexion à votre espace</p>
                <p><img src="public/img/user.png" alt="user"></p>
                    <p>   
                
                        <label for="username"> <input type="text" name="username" placeholder="Username"></label>
                        <label for="userpass"> <input type="text" name="userpass"  placeholder="Password"></label>
                        <input type="submit" id="submit" name="submit" value="Connexion">
                        <span class="inscrire">Pas encore inscrit ? <a class="" href="index.php?action=subscription">S'inscrire</a></span>
                    </p>
                </form>
            </section>

            <footer></footer>
        </div>
            
</body>

</html>