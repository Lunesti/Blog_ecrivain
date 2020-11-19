<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Design blog</title>
    <link rel="stylesheet" href= "../../Public/css/style.css">
    <link rel="stylesheet" href="../../Public/css/responsive.css">
</head>

<body>
<?php include('header.php');?>        


    <div class="bloc-page">
        <h1>Billet simple pour l'Alaska</h1>
        <section class="billets">
            <form action="../../index.php?action=subscribed" method="post">
                 <label for="pseudo">Entrer un pseudo : <input type="text" name="pseudo"></label><br>
                <label for="pass">Entrer un password : <input type="text" name="pass"></label><br>
                <label for="pass">Retapez votre password : <input type="text" name="pass"></label><br>
                <label for="email">Entrer un email : <input type="text" name="email"></label><br>
                <input type="submit" name="submit">
            </form>
        </section>
    </div>
</body>

</htmlP