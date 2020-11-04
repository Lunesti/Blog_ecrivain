<?php
require('model/PostsManager.php');
function listPosts()
{
    $posts = getPosts();
    require('view/postsView.php');
} 