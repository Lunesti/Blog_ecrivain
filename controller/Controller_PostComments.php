<?php

function post() {
    require(__DIR__ . '/../model/PostCommentManager.php');
    $post = getPost($_GET['billet']);
    require(__DIR__ . '/../view/PostCommentView.php');
} 

function comments() {
    require(__DIR__ . '/../model/PostCommentManager.php');
    $comments = getComments($_GET['billet']);
    require(__DIR__ . '/../view/PostCommentView.php');
}