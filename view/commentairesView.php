<form action="index.php?action=postComment&amp;id=<?= $post['id'] ?>" method="post">
    <label for="comment">Commentaire</label><br />
    <textarea id="comment" name="commentaire"></textarea>                     
    <input type="submit" />
</form>