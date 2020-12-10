<?php ob_start(); ?>
<?php include('header.php');?>    


<div class='bloc-page'>
<h2>Page d'administration</h2>

<div class="report">  
    <p>Commentaire(s) signalé(s) : </p>
    <?php foreach
        ($listReports as $data) : 
    ?>
    <p>  "<?= htmlspecialchars_decode($data->comment) ?>" <a class="comment" href="index.php?action=deleteComment&amp;id=<?= $data->id ?>">(supprimer)</a></p>
    <?php  endforeach; ?> 
</div>

    <section class="create">
        

       
        <form action="index.php?action=newPost" method="post">
        <p class="title"> Ajout d'un nouvel article</p>
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
           
            

            <p class="title"> Liste des chapitres</p>
                <?php foreach 
                ($posts as $data) : 
                 ?>
                <p class="titleChapters"><?= htmlspecialchars_decode($data->title); ?>, écrit le : <?= $data->creation_date_fr; ?> </p>
                <p><a class="comment" href="index.php?action=adminpost&amp;id=<?= $data->id ?>">Acceder à l'article</a></p> 
                <?php
                    endforeach;
                ?>
                <br><br>
        
            </div>    
        </div>         
    </section> 
    <?php include('footer.php'); ?>  
</div> 

<?php $content = ob_get_clean(); ?>
<?php include('html.php'); ?>   

