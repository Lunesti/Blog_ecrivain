

<?php ob_start(); ?>
<?php include('header.php');?>        
<div class='bloc-page'>
    <?php include('intro.php');?>
     <section class="posts">
        <div class="chapters">
            <div class="content">
            <?php foreach
                ($posts as $data) :
             ?>
                <p class="title"><?= htmlspecialchars_decode($data->title); ?>  <span class="date"> le <?= $data->creation_date_fr; ?> </span></p>
               <?= htmlspecialchars_decode($data->content); ?>
                <p><a class="comment" href="index.php?action=post&amp;id=<?= $data->id ?>">Acceder aux commentaires</a></p> 
                <br />
                <?php
                endforeach
             ?>
            </div>    
        </div>                  
    </section>
</div>
<?php $content = ob_get_clean(); ?>
<?php include('html.php'); ?>   



