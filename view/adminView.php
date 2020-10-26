<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
  <link rel="stylesheet" href="../public/css/admin.css">
	<title>Blog</title>
</head>
<body>
<!-- Vue-->
<section class="admin">
    <div class="box">
        <h3 class="title">Espace Administrateur</h3>
        <p class="image"><img src="../public/img/user.png"></p>
        <span class="logo"></span> 
        <form action="../index.php" method="post">
            <input type="text" name="email" placeholder="email" required>
            <input type="text" name="pass" placeholder="Password" required>
            <button class="button" type="submit" name="submit">Se connecter</button>
            <a href="index.php?action=valeur"></a>
        </form>      
    </div>
    <!--Vue-->
</section>
</body>
</html>

