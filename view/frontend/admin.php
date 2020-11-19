<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Design blog</title>
    <link href="public/css/style.css" rel="stylesheet" /> 
    <link rel="stylesheet" href= "Public/css/admin.css">   
    <link rel="stylesheet" href="Public/css/responsive.css">
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
<?php include('header.php');?>        

<div class='bloc-page'>
    <section class="create">
        <p class="admin">Page d'administration</p>
        <?php //print $_SESSION['user_role'];?>
        <form action="index.php?action=addPost" method="post">
        <p class="addPost">- Ajout d'un nouvel article</p>
        <p>
                <label for="title"> Titre du billet :<br> <input type="text" name="title" id="title" required></label><br><br><br>
               <textarea name="content" id="textarea" cols="30" rows="10" required></textarea><br>
               <input type="submit" value="submit">
        </p>
    </form>
    </section>
    <section class="billets">
        <div class="chapters">
        <div class="content">
        <?php foreach($posts as $data) : ?>
            <p class="title"><?= htmlspecialchars_decode($data['title']); ?>, écrit le : <?= $data['creation_date_fr']; ?> </p>
            <p class="element"><?= nl2br(htmlspecialchars_decode($data['content'])); ?></p> 
            <p><a class="comment" href="index.php?action=post&amp;id=<?= $data['id'] ?>">Acceder aux commentaires</a></p> 
            <br />
        <?php
            endforeach;
        ?>
         </div>    
         </div>                  
    </section>
</div> 

</body>

</html>