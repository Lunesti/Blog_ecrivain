
<?php ob_start(); ?>
<?php include('header.php');?>            
<div class="bloc-page">
    <?php include('intro.php');?>
    <section class="posts">
            <div class="chapters">
                <div clas="content">
          
                <p class="return_post"><a href="index.php">&#x2190; Retour à la liste des billets</a></p>
                <br>
               
                    <p class="title"><?= htmlspecialchars_decode($post->title)?><span> le <?= $post->creation_date_fr ?></span></p>
                    <p class="element"><span><?= nl2br(htmlspecialchars_decode($post->content)) ?></span></p>

                    <?php //Si l'utilisateur est un admin, on accèdes aux paramètres admin
                    if(isset($_SESSION['username'])) {
                        if ($_SESSION['user_role'] == 'admin') {
                         ?>
                         <a class="comment" href="index.php?action=updatePost&amp;id=<?= $post->id ?>">Modifier</a>
                         <a class="comment" href="index.php?action=delete&amp;id=<?= $post->id ?>">Supprimer</a>
                    <?php
                        }
                    }
                    ?>
                    <br><br>
                    <h2>Commentaires</h2>
                       
                    <form action="index.php?action=addComment&amp;id=<?= $post->id ?>" method="post">
                    <?php// endforeach ?>
                    <?php  //Si une session est ouverte, on affiche le pseudo utilisateur
                    if(isset($_SESSION['username'])) {
                        ?> <p><span class="user"><?php print $_SESSION['username'];?></span></p>
                         <p>
                        <textarea id="comment" name="comment"  rows="4" cols="150" placeholder="Veuillez saisir votre commentaire içi..."></textarea>  <br>                   
                        <input type="submit"/>                             
                    </p>
                    <?php } else {
                         ?><p><a class="com_if_connect" href="index.php?action=connexion">Veuillez vous connecter pour pouvoir laisser un commentaire </a></p>
                        <?php
                     }
                     ?>
                    </form>
                    <br>
                   
                    <?php
                        //endforeach;
                    ?>  
                    <?php foreach($comment as $data) :  ?>

                    <p><strong> <?= htmlspecialchars_decode($data->author) ?>, </strong> <span class="comment_date">le  <?= $data->comment_date_fr?></span></p>
                    <p><?= nl2br(htmlspecialchars_decode($data->comment)) ?> <a class="comment" href="index.php?action=report&amp;id=<?= $post->id ?>"> Signaler</a></p>
                    <br>
                    <?php
                        endforeach;
                    ?>  
                    
                </div>
            </div>
        </section>       
</div>   
<?php $content = ob_get_clean(); ?>
 <?php require('html.php'); ?>     

