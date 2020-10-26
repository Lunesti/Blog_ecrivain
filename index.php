<?php
//require('controller/controller.php');
require('controller/Controller_Posts.php');
require('controller/Controller_PostComments.php');

/*if(isset($_POST['submit'])) {
    if(isset($_POST['email']) and !empty($_POST['email'])) {
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            if(isset($_POST['pass']) and !empty($_POST['pass'])) {
                adminLogin();
            }
        }
    }
}*/

listPosts();

if(isset($_GET['billet']) && $_GET['billet'] > 0) {
    post();
}


//post();


    /*if (isset($_POST['submit'])) {
        if ($_POST['title'] && $_POST['author'] && $_POST['content'] !== null) {
            if (isset($_GET['action'])) {
                if ($_GET['action'] == 'post') {
                    addNewPost();
                    print "Les données ont bien été ajoutés";
                } else {
                    print "les données n'ont pas été ajoutées";
                }
            }
        }
}*/
  
