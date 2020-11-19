<header>
    <p>Jean FORTEROCHE</p>
    <nav>
        <ul>
            <li> <img src="https://img.icons8.com/color/48/000000/home.png"/><a href="index.php">Accueil</a></li>
            <li> <img src="https://img.icons8.com/color/48/000000/open-book.png"/><a href="">Chapitres</a></li>
            <li> <img src="https://img.icons8.com/color/48/000000/contact-card.png"/><a href="">Contact</a></li>
            <?php
            if(isset($_SESSION['loggedin'])) {
                if($_SESSION['loggedin'] == true) {?>
                    <p><a href="View/frontend/deconnexion.php">Deconnexion</a></p>
          <?php } 
            }else {?>
                   <li> <img src="https://img.icons8.com/color/48/000000/login-rounded-right.png"/><a href="View/frontend/connexionView.php">Connexion </a> <br></li>
                   <li> <img src="https://img.icons8.com/color/48/000000/administrator-male--v1.png"/><a href="View/frontend/adminView.php">Espace administrateur</a></li>  
              <?php 
            }
            ?>       
    </nav>
</header> 