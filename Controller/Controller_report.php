<?php
require_once('Model/PostManager.php');
require_once('Model/CommentManager.php');
require_once('Model/userManager.php');


function report() {
    $report = new Comments();
    $commentManager = new CommentManager();
    $reported = $commentManager->reportComment($report);
    var_dump($reported);
}