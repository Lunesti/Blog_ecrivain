

<form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
    <label for="comment">Commentaire</label><br />
    <?php print $_SESSION['pseudo'];?>
    <textarea id="comment" name="commentaire"></textarea>                     
    <input type="submit" />
</form>