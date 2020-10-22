 <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
  <link rel="stylesheet" href="../../css/style.css">
	<title>Blog</title>
</head>
<body>
<section class="admin">
    <div class="box">
        <h3 class="title">Espace Administrateur</h3>
        <p class="image"><img src="../../img/user.png"></p>
        <span class="logo"></span> 
        <form action="include/script_login.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="text" name="password" placeholder="Password" required>
            <button class="button" type="submit" name="submit">Se connecter</button>
        </form>      
    </div>
</section>
</body>
</html>
