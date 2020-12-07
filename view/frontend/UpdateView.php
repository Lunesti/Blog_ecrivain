<?php ob_start(); ?>
<?php include('header.php');?>        
<div class='bloc-page'>

            <h3>Modifiez un billet existant à l'aide des champs ci-dessous :</h3>
            
            <form action="index.php?action=postUpdated" method="POST">
                <input type="hidden" name="id" value ="<?= $post->id;?>">
                <p><label for="title">Titre :</label><input type="text" name="title" value="<?= $post->title;?>"></p>
                <p><label for="content">Saisissez l'article modifié :</label><textarea name="content"><?= $post->content; ?></textarea></p>
                <p><input type="submit"></p>
            </form>
<?php $content = ob_get_clean(); ?>
<?php include('html.php'); ?>   
<?php include('footer.php'); ?>   