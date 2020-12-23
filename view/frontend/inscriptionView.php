<?php ob_start(); ?>
<?php include('templates/header.php');?>        
    <div class="bloc-page">
        <section class="inscription">
            <h2>Inscription</h2>
            <form action="index.php?action=subscribed" method="post">
                <p class='form'>
                    <p><label for="pseudo">Entrer un pseudo : <input type="text" name="pseudo"></label></p><br>
                    <p><label for="pass">Entrer un password : <input type="text" name="pass"></label></p><br>
                    <p><label for="email">Entrer un email : <input type="text" name="email"></label></p><br>
                    <p><input type="submit" id="submit" name="submit"></p>
                </p>
                
            </form>
        </section>
    </div>
    <?php $content = ob_get_clean(); ?>
<?php include('templates/html.php'); ?>   
<?php include('templates/footer.php'); ?>   