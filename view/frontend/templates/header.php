<header>
    
    <nav>
    <p>Jean FORTEROCHE</p>
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
   
        <ul class ="navigation">
            <li><a href="index.php">Accueil</a></li>
            <?php
            if(isset($_SESSION['username']) && $_SESSION['user_role'] = 'admin' || $_SESSION['user_role'] = 'user') {
               ?>
                    <li><a href="index.php?action=disconnected">Deconnexion</a></li>
          <?php  
            }else {
                ?>
                   <li><a href="index.php?action=connexion">Connectez-vous </a> <br></li>
              <?php 
            }
            ?> 
        </ul>          
    </nav>
</header> 