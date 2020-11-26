<?php

class Comments {

    //Attributs  
    private $_id;
    private $_postId;
    private $_author;
    private $_comments;
    private $_comment_date;
    private $_report;

    //GETTERS
    public function getReport() {
        return $this->_report;
    }

    public function getId() {
        return $this->_id;
    }

     public function getPostId() {
        return $this->_postId;
    }

    public function getAuthor() {
      return $this->author;
    }

     public function getComments() {
        return $comments->_comment;
    }

    public function getDate() {
        return $date->comment_date;
    }

    //SETTERS
    public function setAuthor($author) {
        $this->_author = $author;
    }

    public function setComment($comment) {
        $this->_comment = $cmment;
    }


    public function setDate($date) {
        $this->_comment_date = $date;
    }

    public function setReport($report) {
        $this->_report = $report;
    }
}