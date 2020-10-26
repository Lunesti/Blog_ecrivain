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
	<title>Blog</title>
</head>
<body>
<form action="../index.php" method="post">
    <p>
        <label for="author"> Auteur de l'article : <input type="text" name="author" id="author" required></label>
        <label for="title"> Titre du billet : <input type="text" name="title" id="title" required></label><br>
        <textarea name="content" cols="30" rows="10"></textarea><br>
        <input type="submit">
    </p>
</form>


</body>
</html>
