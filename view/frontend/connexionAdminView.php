<?php $title = "Blog de Jean Forteroche"?>
<?php ob_start(); ?>
<?php include('templates/Header.php');?>   

        <div class="bloc-page">
            <section class="connection">
                <form action="index.php?action=admin_connected" method="post">
                <h2>Espace administrateur</h2>
                <p><img src="public/img/user.png" alt="user"></p>
                    <p>                  
                        <label for="username"> <input type="text" name="username" placeholder="Username"></label><br>
                        <label for="userpass"> <input type="password" name="userpass" placeholder="Password"></label><br>
                        <input type="submit" id="submit" name="submit" value="Connexion"><br>
                    </p>
                </form>
            </section>
            <?php include('templates/Footer.php'); ?>  
        </div>
        <?php $content = ob_get_clean(); ?>
<?php include('templates/Html.php'); ?>   
