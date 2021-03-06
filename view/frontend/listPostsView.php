<?php $title = "Blog de Jean Forteroche"?>

<?php ob_start(); ?>
<?php include('templates/Header.php');?>        
<div class='bloc-page'>
    <?php include('templates/Intro.php');?>
        <section class="posts">
        <h2>Billet simple pour l'Alaska</h2>
            <article>
                    <?php if(isset($_SESSION['username'])) {
                        if ($_SESSION['user_role'] == 'admin') { ?>
                        <p><a href="index.php?action=admin">Page d'administration</a></p>
                        <?php } }
                    ?>
                    <br><br>
                    <?php foreach
                        ($listposts as $data) : 
                    ?>
                        <h3><?= htmlspecialchars_decode($data->title); ?>  <span class="date"> le <?= $data->creation_date_fr; ?> </span></h3>
                        <p class="content">  <?= htmlspecialchars_decode(substr($data->content,0,500)) .'...'; ?></p>
                        <p><a class="chapter" href="index.php?action=post&amp;id=<?= $data->id ?>">Lire la suite</a></p> 
                    <br />
                        <?php
                        endforeach
                    ?>   
            </article>                  
        </section>
    <?php include('templates/Footer.php'); ?>  
    <p class="admin"><a href="index.php?action=connectionAdmin">Espace administrateur</a></p> 
</div>
<?php $content = ob_get_clean(); ?>

<?php include('templates/Html.php'); ?>   
 



