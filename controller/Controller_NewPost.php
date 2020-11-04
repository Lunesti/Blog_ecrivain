<?php

function newPost() {
    require(__DIR__ . '/../model/NewPostManager.php');
    if(isset($_POST['title']) && isset($_POST['author'])) {
        if(isset($_POST['content'])) {
            if(!empty($_POST['title'])&& !empty($_POST['author'])) {
                $newPost = getAddNewPost();
                require(__DIR__ . '/../view/postsView.php');
            }else {
                print "Veuillez ajouter un titre et un auteur !";
            }
        }else {
            print "Veuillez rédiger votre article !";
        }
    }else {
        print "les champs titre et auteur n'existent pas !";
    }
}