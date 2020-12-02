<?php ob_start(); ?>
<?php include('header.php');?>   

        <div class="bloc-page">
            <section class="connexion">
                <form action="index.php?action=connected" method="post">
                <p class="connexion_title">Espace administrateur</p>
                <p><img src="public/img/user.png" alt="user"></p>
                    <p>                  
                        <label for="username"> <input type="text" name="username" placeholder="Username"></label><br>
                        <label for="userpass"> <input type="text" name="userpass"  placeholder="Password"></label><br>
                        <input type="submit" id="submit" name="submit" value="Connexion"><br>
                    </p>
                </form>
            </section>
            <footer></footer>
        </div>
        <?php $content = ob_get_clean(); ?>
<?php include('html.php'); ?>   