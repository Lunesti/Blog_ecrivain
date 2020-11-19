<?php

class Post {

  //Attributs  
  private $_id; 
  private $_title;
  private $_content;
  private $_creation_date;

  //Un getter renvoi la valeur d'un attribut,
  //Un setter assigne une valeur à un attribut en vérifiant son intégrité


    //Hydratation
    public function hydrate(array $data) {

        //Faire une boucle pour parcourir le tableau et voir si le setter correspondant à la clé existe
        foreach ($data as $key => $value) {
            //On récupère le setter correspondant à l'attribut
            $setter = 'set' .ucfirst($key); //Met le 1er caractère en majuscule
            //Si le setter corerspondant existe,
            if(method_exists($this, $setter)) {
                $this->$setter($value);
            }
        }
    }


    //SETTERS
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

    //GETTERS
    public function getId($id) {
        return $this->_id;
    }

    public function getTitle() {
        return $this->_title;
    }

    public function getcontent() {
        return $this->_content;
    }

    public function getDate() {
        return $this->_creation_date;
    }
}

