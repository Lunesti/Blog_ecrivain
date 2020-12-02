<?php



class Users {

  private $id;
  private $pseudo;
  private $user_role;
  private $pass;
  private $email;
  private $inscription_date;

  /*ID*/
    public function getId() {
        return $this->id;
    }

  /*PSEUDO*/
    public function getPseudo() {
      return $this->pseudo;
    }

    public function setPseudo($pseudo) {
        $this->pseudo = $pseudo;
    }

  /*USER_ROLE*/
    public function getUserRole() {
        return $user_role->user_role;
    }

    public function setUserRole($user_role) {
        $this->user_role = $user_role;
    }

/*PASS*/
    public function getPass() {
        return $pass->pass;
    }

    public function setPass($pass) {
        $this->pass = $pass;
    }

    
/*EMAIL*/
    public function getEmail() {
        return $email->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    /*INSCRIPTION_DATE*/
    public function getDate() {
        return $date->inscription_date;
    }

    public function setDate($Date) {
        $this->inscription_date = $date;
    }

}