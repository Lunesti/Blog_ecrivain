<?php ob_start(); ?>
<?php include('templates/header.php');?>   

        <div class="bloc-page">
            <section class="connexion">
                <form action="index.php?action=connected" method="post">
                <h2>Espace administrateur</h2>
                <p><img src="public/img/user.png" alt="user"></p>
                    <p>                  
                        <label for="username"> <input type="text" name="username" placeholder="Username"></label><br>
                        <label for="userpass"> <input type="text" name="userpass"  placeholder="Password"></label><br>
                        <input type="submit" id="submit" name="submit" value="Connexion"><br>
                    </p>
                </form>
            </section>
            <?php include('templates/footer.php'); ?>  
        </div>
        <?php $content = ob_get_clean(); ?>
<?php include('templates/html.php'); ?>   
