<?php ob_start(); ?>
<?php include('header.php');?>            
<div class="bloc-page">
    <br>
    <?php if($moderate->report === '1') {?>
    <p>Auteur du commentaire : 
    <strong> <?= htmlspecialchars_decode($moderate->author) ?></strong> </p>
    <p>"<?= nl2br(htmlspecialchars_decode($moderate->comment)) ?>" <a class="comment" href="index.php?action=deleteComment&amp;id=<?= $moderate->id ?>"> Supprimer</a></p>
    <?php } ?>
    <br>
    
    <p>Revenir à la <a href="index.php?action=admin">page admin</a></p>
    <?php $content = ob_get_clean(); ?>
    <?php include('footer.php'); ?>  
 <?php require('html.php'); ?>     

