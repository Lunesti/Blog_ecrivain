<!DOCTYPE html>
<html lang="fr">    
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Blog</title>
</head>
<body>
<h1>Bonjour</h1>
    <form action="index.php?action=post?" method="post">
        
        <label for="message">Votre message : <input type="text" name="msg"></label><br>
    <input type="submit" name="submit" value="Envoyer">
    </form>
    <?php
    while ($data_comment = $comments->fetch()) {
?>
    <section class="comments">
        <div class="comment">
            <p><?= htmlspecialchars($data_comment['pseudo'])?> : <?= htmlspecialchars($data_comment['comment'])?></p>
        </div>
        <?php
        }
    ?>
    </section>

</body>
</html>
