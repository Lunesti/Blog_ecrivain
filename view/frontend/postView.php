
<?php ob_start(); ?>
<?php include('header.php');?>            
<div class="bloc-page">
    <?php include('intro.php');?>
        <section class="billets">
            <div class="chapitres">
                <div clas="content">

                <?php //foreach($post as $posts) :  ?>

                    <?php $title = htmlspecialchars($post['title']); ?>
          
                    <p><a class="return_post" href="index.php">Retour à la liste des billets</a></p>
                    <h3>
                        <?= htmlspecialchars_decode($post['title']) ?>
                        <em>le <?= $post['creation_date_fr'] ?></em>
                    </h3>
                        
                    <span><?= nl2br(htmlspecialchars_decode($post['content'])) ?></span>

                    <?php //Si l'utilisateur est un admin, on accèdes aux paramètres admin
                    if(isset($_SESSION['username'])) {
                        if ($_SESSION['user_role'] == 'admin') {
                         ?>
                         <a class="comment" href="index.php?action=edit&amp;id=<?= $post['id'] ?>">Modifier</a>
                         <a class="comment" href="index.php?action=delete&amp;id=<?= $post['id'] ?>">Supprimer</a>
                    <?php
                    }
                    }
                    ?>
                    <h2>Commentaires</h2>
                       
                    <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">

                    <?php  //Si une session est ouverte, on affiche le pseudo utilisateur
                    if(isset($_SESSION['username'])) {
                        print $_SESSION['username'];
                     } else {
                         ?><a href="View/frontend/connexionView.php">Connectez-vous </a>
                        <?php
                     }
                     ?>
                        <textarea id="comment" name="comment"></textarea>                     
                        <input type="submit"/>                             
                    </form>
                    <?php
                        //endforeach;
                    ?>  
                    <?php foreach($comments as $comment) :  ?>

                    <p><strong> <?= htmlspecialchars_decode($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
                    <p><?= nl2br(htmlspecialchars_decode($comment['comment'])) ?></p>
                    <?php
                        endforeach;
                    ?>  
                    
                </div>
            </div>
        </section>       
</div>   
<?php $content = ob_get_clean(); ?>
 <?php require('html.php'); ?>     



    
<!--<h1>Billet simple pour l'Alaska</h1>-->
<!--Si une session est ouverte, on récupère le commentaire
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        if ($req === false) {
            die("Impossible d'ajouter le commentaire !");
        } else {
            print "Commentaire ajouté !";
        }
    } else {
        print "Vous devez vous connecter pour laisser un commentaire !";           
        }-->