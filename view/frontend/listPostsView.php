<?php $title = "Blog de Jean Forteroche"?>

<?php ob_start(); ?>
<?php include('templates/header.php');?>        
<div class='bloc-page'>
    <?php include('templates/intro.php');?>
        <section class="posts">
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
                        <p class="title"><?= htmlspecialchars_decode($data->title); ?>  <span class="date"> le <?= $data->creation_date_fr; ?> </span></p>
                        <p class="content">   <?= htmlspecialchars_decode(substr($data->content,0,500)) .'...'; ?></p>
                        <p><a class="chapter" href="index.php?action=post&amp;id=<?= $data->id ?>">Lire la suite</a></p> 
                    <br />
                        <?php
                        endforeach
                    ?>   
            </article>                  
        </section>
    <?php include('templates/footer.php'); ?>  
    <p class="admin"><a href="index.php?action=connexionAdmin">Espace administrateur</a></p> 
</div>
<?php $content = ob_get_clean(); ?>

<?php include('templates/html.php'); ?>   
 



