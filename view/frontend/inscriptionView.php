<?php ob_start(); ?>
<?php include('header.php');?>        
    <div class="bloc-page">
        <section class="inscription">
            <p class="connexion_title">Inscription</p>
            <form action="index.php?action=subscribed" method="post">
                <p>
                    <label for="pseudo">Entrer un pseudo : <input type="text" name="pseudo"></label><br>
                    <label for="pass">Entrer un password : <input type="text" name="pass"></label><br>
                    <label for="pass">Retapez votre password : <input type="text" name="pass"></label><br>
                    <label for="email">Entrer un email : <input type="text" name="email"></label><br>
                    <input type="submit" name="submit">
                </p>
                
            </form>
        </section>
    </div>
    <?php $content = ob_get_clean(); ?>
<?php include('html.php'); ?>   