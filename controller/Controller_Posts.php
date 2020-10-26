<?php
function listPosts() {
    require(__DIR__ . '/../model/PostsManager.php');
    $posts = getPosts();
    require(__DIR__ . '/../view/postsView.php');
}