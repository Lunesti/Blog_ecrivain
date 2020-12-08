<?php ob_start(); ?>
<?php include('header.php');?>            
<div class="bloc-page">
<br>
<p>Auteur du commentaire : 
<strong> <?= htmlspecialchars_decode($moderate->author) ?></strong> </p>
<p>"<?= nl2br(htmlspecialchars_decode($moderate->comment)) ?>" <a class="comment" href="index.php?action=deleteComment&amp;id=<?= $moderate->id ?>"> Supprimer</a></p>
<br>
<p>Revenir à la <a href="index.php?action=admin">page admin</a></p>
<?php $content = ob_get_clean(); ?>
 <?php require('html.php'); ?>     
 <?php include('footer.php'); ?>   
