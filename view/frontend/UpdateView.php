<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf8" />
            <link rel="stylesheet" href="style.css">
            <title>Modifier un billet</title>
            <link rel="stylesheet" href= "../../Public/css/connexionView.css">   
            <link rel="stylesheet" href="../../Public/css/responsive.css">
           
        </head>
 
        <body>
 
            <h3>Modifiez un billet existant à l'aide des champs ci-dessous :</h3>
            
            <form action="index.php?action=postUpdated" method="POST">
                <p><label for="title">Titre :</label><input type="text" name="title" value="<?= $post->title;?>"></p>
                <p><label for="content">Saisissez l'article modifié :</label><textarea name="content"><?= $post->content; ?></textarea></p>
                <p><input type="submit"></p>
            </form>
        </body>
    </html>