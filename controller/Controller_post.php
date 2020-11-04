<?php
require('model/frontend.php');
function post()
{
    $post = getPost($_GET['id']);
    $comments = getComments($_GET['id']);

    require('view/frontend/postView.php');
}