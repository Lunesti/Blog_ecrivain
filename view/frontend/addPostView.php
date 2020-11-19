
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <script src="https://cdn.tiny.cloud/1/cmdzeda6yrj1wga8di8rs07wq89ifems1i96r1egmjefib9u/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>
    <link rel="stylesheet" href= "../../Public/css/connexionView.css">   
    <link rel="stylesheet" href="../../Public/css/responsive.css">
	<title>Blog</title>
</head>
<body>


    <header>
        <p>Jean FORTEROCHE</p>
        <nav>
            <ul>
                <li> <img src="https://img.icons8.com/color/48/000000/home.png"/><a href="">Accueil</a></li>
                <li> <img src="https://img.icons8.com/color/48/000000/open-book.png"/><a href="">Chapitres</a></li>
                <li> <img src="https://img.icons8.com/color/48/000000/contact-card.png"/><a href="">Contact</a></li>
                <li> <img src="https://img.icons8.com/color/48/000000/login-rounded-right.png"/><a href="view/connexionView.php">Connexion </a> <br>
                    </li>
                <li> <img src="https://img.icons8.com/color/48/000000/administrator-male--v1.png"/>Espace administrateur</li>
            </ul>
        </nav>
    </header>

    <div class="bloc-page">
        <section class="post">
            <form action="../../index.php?action=listPosts" method="post">
                <p>
                    <label for="title"> Titre du billet : <input type="text" name="title" id="title" required></label><br><br><br>
                    <textarea name="content" cols="30" rows="10"></textarea><br>
                    <input type="submit" name="submit">
                </p>
            </form>
        </section>
    </div>

</body>
</html>
