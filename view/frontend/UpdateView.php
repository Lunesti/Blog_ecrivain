<?php $title = "Blog de Jean Forteroche"?>
<?php ob_start(); ?>
<?php include('templates/Header.php');?> 
<script src="https://cdn.tiny.cloud/1/cmdzeda6yrj1wga8di8rs07wq89ifems1i96r1egmjefib9u/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      toolbar_mode: 'floating',
   });</script>       
<div class='bloc-page'>

            <h3>Modifiez un billet existant à l'aide des champs ci-dessous :</h3>
            
            <form action="index.php?action=postUpdated" method="POST">
                <input type="hidden" name="id" value ="<?= $post->id;?>">
                <p><label for="title">Titre :</label><input type="text" name="title" value="<?= $post->title;?>"></p>
                <p><label for="content">Saisissez l'article modifié :</label><textarea name="content"><?= $post->content; ?></textarea></p>
                <p><input type="submit"></p>
            </form>
<?php $content = ob_get_clean(); ?>
<?php include('templates/Html.php'); ?>   
<?php include('templates/Footer.php'); ?>   