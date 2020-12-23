<?php

class Post {
 
    //Attributs  
    private $_id; 
    private $_title;
    private $_content;
    private $_creation_date;
  

    //GETTERS
    public function getId() {
        return $this->_id;
    }

    public function getTitle() {
        return $this->_title;
    }

    public function getContent() {
        return $this->_content;
    }

    public function getDate() {
        return $this->_creation_date;
    }

    //SETTERS
    public function setId($id) {
        $this->_id = $id;
    }

    public function setTitle($title) {
        if(is_string($title)) {
            $this->_title = $title;
        }
    }

    public function setContent($content) {
        if (is_string($content)) {
            $this->_content = $content;
        }   
    }

    public function setDate($creation_date) {
        $this->_creation_date = $creation_date;
    }

}



