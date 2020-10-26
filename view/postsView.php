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
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Blog</title>
</head>
<body>
<?php
while ($data = $posts->fetch()) {
?>
  <h1>Page d'accueil</h1>
      <section class="posts">
          <div class="post">
            <p><a href="index.php?billet=<?php echo $data['id']; ?>"><?php print htmlspecialchars($data['title'])?></a> par <?= htmlspecialchars($data['author']);?></p>
            <p class="content"><?= htmlspecialchars($data['content']);?></p><br><br>
          </div>
          <?php
}
?>
      </section> 
</body>
</html>
