<?php ob_start(); ?>
<?php include('header.php');?>        
<div class='bloc-page'>
    <?php include('intro.php');?>
     <section class="posts">
        <div class="chapters">
            <div class="content">

           <?php if(isset($_SESSION['username'])) {
                        if ($_SESSION['user_role'] == 'admin') {
                            ?>
                         <p><a href="index.php?action=admin">Page d'administration</a></p>
                        <?php
                            }
                        }
                        ?>
                        <br><br>
            <?php foreach
                ($listposts as $data) :  //var_dump($data);
             ?>
                <p class="title"><?= htmlspecialchars_decode($data->title); ?>  <span class="date"> le <?= $data->creation_date_fr; ?> </span></p>
               <p class="content">   <?= htmlspecialchars_decode(substr($data->content,0,500)) .'...'; ?></p>
                <p><a class="comment" href="index.php?action=post&amp;id=<?= $data->id ?>">Lire la suite</a></p> 
                <br />
                <?php
                endforeach
             ?>
            </div>    
        </div>                  
    </section>
    <?php include('footer.php'); ?>  
</div>
<?php $content = ob_get_clean(); ?>
<?php include('html.php'); ?>   
 



