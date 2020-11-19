<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf8" />
            <link rel="stylesheet" href="style.css">
            <title>Modifier un billet</title>
            <link rel="stylesheet" href= "../../Public/css/connexionView.css">   
            <link rel="stylesheet" href="../../Public/css/responsive.css">
            <script src="https://cdn.tiny.cloud/1/cmdzeda6yrj1wga8di8rs07wq89ifems1i96r1egmjefib9u/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
            <script>
                tinymce.init({
                selector: 'textarea',
                plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
                toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
                toolbar_mode: 'floating',
                tinycomments_mode: 'embedded',
                tinycomments_author: 'Author name',
                });
            </script>
        </head>
 
        <body>
 
            <h3>Modifiez un billet existant à l'aide des champs ci-dessous :</h3>
            
            <form action="index.php?action=updated&amp;id=<?= $post['id']?>" method="POST">
                <p><label for="title">Titre :</label><input type="text" name="title" value="<?= htmlspecialchars($post['title'])?>"></p>
                <p><label for="content">Saisissez l'article modifié :</label><textarea name=" content" ><?= htmlspecialchars($post['content'])?></textarea></p>
                <p><input type="submit"></p>
            </form>
        </body>
    </html>