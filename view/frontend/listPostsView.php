<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="public/css/style.css" rel="stylesheet" /> 
        <link href="public/css/responsive.css" rel="stylesheet" /> 
    </head>
        
    <body>
    <?php ob_start(); ?>
        <?php include('header.php');?>        
        <div class='bloc-page'>
            <?php include('intro.php');?>
            <section class="billets">
                <div class="chapters">
                    <div class="content">
 
                        <?php foreach($posts as $data) : 
                            //var_dump($data) ?>
                            <p class="title"><?= htmlspecialchars_decode($data['title']); ?>  <span class="date"> le <?= $data['creation_date_fr']; ?> </span></p>
                            <p class="element"><?= nl2br(htmlspecialchars_decode($data['content'])); ?></p>
                            <p><a class="comment" href="index.php?action=post&amp;id=<?= $data['id'] ?>">Acceder aux commentaires</a></p> 
                            <br />
                        <?php
                            endforeach;
                        ?>
                    </div>    
                </div>                  
            </section>
        </div>
        <?php $content = ob_get_clean(); ?>
        <?php include('html.php'); ?>   
    </body>
</html>


