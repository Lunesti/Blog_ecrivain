<?php $title = "Blog de Jean Forteroche"?>
<?php ob_start(); ?>
<?php include('templates/header.php');?>  
        <div class="bloc-page">
            <section class="connexion">
                <form action="index.php?action=user_connected" method="post">                    
                    <h2>Connexion à votre espace</h2>
                    <p><img src="public/img/user.png" alt="user"></p>
                    <p>   
                        <label for="username"> <input type="text" name="username" placeholder="Username"></label><br>
                        <label for="userpass"> <input type="text" name="userpass"  placeholder="Password"></label><br>
                        <input type="submit" id="submit" name="submit" value="Connexion"><br>
                         <p class="subscribe">Pas encore inscrit ? <a class="" href="index.php?action=subscription">S'inscrire</a></p>
                    </p>                    
                </form>
            </section>
            <?php include('templates/footer.php'); ?>  
        </div>
        <?php $content = ob_get_clean(); ?>
<?php include('templates/html.php'); ?>
   