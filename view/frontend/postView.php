<?php $title = "Blog de Jean Forteroche"?>
<?php ob_start(); ?>
<?php include('templates/Header.php');?>            
<div class="bloc-page">
    <?php include('templates/Intro.php');?>
    <section class="posts">
        <article>
            <p class="return_post"><a href="index.php">&#x2190; Retour à la liste des billets</a></p>
            <br>
                    
            <h3><?= htmlspecialchars_decode(substr($post->title,0,200))?><span> le <?= $post->creation_date_fr ?></span></h3>
            <p class="element"><span><?= nl2br(htmlspecialchars_decode($post->content)) ?></span></p>

            <?php 
            //Si l'utilisateur est un admin, on accède aux paramètres admin
            if(isset($_SESSION['username'])) {
                if ($_SESSION['user_role'] == 'admin') {
                ?>
                <a href="index.php?action=updatePost&amp;id=<?= $post->id ?>">Modifier</a>
                <a href="index.php?action=delete&amp;id=<?= $post->id ?>">Supprimer</a>
            <?php
                }
            }
            ?>
            <br><br>
            <h2>Commentaires</h2>
                        

            <!-- Espace commentaire-->    
                <form action="index.php?action=addComment&amp;id=<?= $post->id ?>" method="post">

                <?php  
                //Si une session est ouverte, on affiche le pseudo utilisateur
                if(isset($_SESSION['username'])) {
                    ?> <p><span class="user"><?php print $_SESSION['username'];?></span></p>
                <p>
                <textarea id="comment" name="comment"  rows="4" cols="150" placeholder="Veuillez saisir votre commentaire içi..."> </textarea> <br>                   
                    <input type="submit" id="submit" name="submit" value="Envoyer"><br>                           
                </p>
                <?php } else {
                    ?><p><a class="com_if_connect" href="index.php?action=connexion">Veuillez vous connecter pour pouvoir laisser un commentaire </a></p>
                    <?php
                }
                ?>
                </form>
                <br>
                    
                <?php foreach($comment as $data) :  ?>
                <p><strong> <?= htmlspecialchars_decode($data->author) ?>, </strong> <span class="date">le  <?= $data->comment_date_fr?></span></p>
            
                <p>
                <?php if($data->report == 1) {
                    ?>
                    <p><?= nl2br(htmlspecialchars_decode($data->comment)) ?> <span class="report">(commentaire signalé)</span></p> 
                <?php } else {  ?>
                    <p><?= nl2br(htmlspecialchars_decode($data->comment)) ?> <a href="index.php?action=report&amp;id=<?= $data->id ?>"> Signaler</a></p> 
                <?php } ?>
                <br>
                <?php
                    endforeach;
                ?>
     
        </article>
    </section> 
    <?php include('templates/Footer.php'); ?> 
    <p class="admin"><a href="index.php?action=connectionAdmin">Espace administrateur</a></p>      
</div>   
<?php $content = ob_get_clean(); ?>
 <?php require('templates/Html.php'); ?>     
  
