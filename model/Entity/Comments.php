<?php


class Comments {

  private $id;
  private $postId;
  private $author;
  private $comment;
  private $comment_date;

    /*ID*/
    public function getId() {
        return $this->id;
    }

    /*POSTID*/
     public function getPostId() {
        return $this->post_id;
    }

    /*AUTHOR*/
    public function getAuthor() {
      return $this->author;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    /*COMMENT*/
    public function getComment() {
        return $comment->comment;
    }

    public function setComment($comment) {
        $this->comment = $cmment;
    }

    /*COMMENT_DATE*/
    public function getDate() {
        return $date->comment_date;
    }

    public function setDate($date) {
        $this->comment_date = $date;
    }
}