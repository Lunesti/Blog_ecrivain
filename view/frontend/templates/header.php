<header>
    
    <nav>
    <p>Jean FORTEROCHE</p>
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
   
        <ul class ="navigation">
            <li><!-- <img src="https://img.icons8.com/color/48/000000/home.png"/>--><a href="index.php">Accueil</a></li>
            <?php
            if(isset($_SESSION['loggedin'])) {
               if($_SESSION['loggedin'] === true) {?>
                    <li><a href="index.php?action=disconnected">Deconnexion</a></li>
          <?php  
            }
            }else {
               
                ?>
                   <li> <!--<img src="https://img.icons8.com/color/48/000000/login-rounded-right.png"/>--><a href="index.php?action=connexion">Connectez-vous </a> <br></li>
              <?php 
            }
            ?> 
        </ul>          
    </nav>
</header> 