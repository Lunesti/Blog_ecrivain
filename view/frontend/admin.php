<?php ob_start(); ?>
<?php include('header.php');?>    
        
<div class='bloc-page'>
    <section class="create">
        <p class="admin">Page d'administration</p>

        <p class ="report">Commentaire(s) signalé(s) : </p>
        <?php foreach
            ($listReports as $data) : 
                 ?>
        <p><?= htmlspecialchars_decode($data->comment) ?> <a class="comment" href="index.php?action=moderate&amp;id=<?= $data->id ?>">Modérer</a></p>
        
        <?php    endforeach; ?> 

        <?php //print $_SESSION['user_role'];?>
        <form action="index.php?action=newPost" method="post">
        <p class="title">- Ajout d'un nouvel article</p>
        <p class="form">
            <input type="text" name="title" id="title" required><br><br><br>
            <textarea name="content" id="textarea" cols="30" rows="10" required></textarea><br>
            <input class="submit" type="submit" value="submit">
        </p>
    </form>
    
    </section>
    <br><br>
    <section class="posts">
        <div class="chapters">
            <div class="content">
           
            

            <p class="title">- Liste des chapitres</p>
                <?php foreach 
                ($posts as $data) : 
                 ?>
                <p class="titleChapters"><?= htmlspecialchars_decode($data->title); ?>, écrit le : <?= $data->creation_date_fr; ?> </p>
                <p><a class="comment" href="index.php?action=adminpost&amp;id=<?= $data->id ?>">Acceder à l'article</a></p> 
                <?php
                    endforeach;
                ?>
                <br><br>
                <p class="title">- Liste des commentaires</p>
                <?php foreach
                 ($comments as $data) :
                 ?>
                <p><?= nl2br(htmlspecialchars_decode($data->comment)) ?> <a class="comment" href="index.php?action=moderate&amp;id=<?= $data->id ?>">Modérer</a></p>
                <?php 
                ?>

        <?php    endforeach; ?> 
            </div>    
        </div>         
    </section> 
    <?php include('footer.php'); ?>  
</div> 

<?php $content = ob_get_clean(); ?>
<?php include('html.php'); ?>   

