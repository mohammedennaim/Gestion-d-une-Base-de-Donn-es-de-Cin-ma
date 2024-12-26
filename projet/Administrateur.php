<?php
class Administrateur extends User{
    private $nom;
    private $email;
    private $password;
    
    public function __construct($nom,$email,$password) {
        $this->$nom = $nom;
        $this->$email = $email;
        $this->$password = $password;
    }
    public function getNom() : int {
        return $this->nom;
    }
    public function getEmail() : int {
        return $this->email;
    }
    public function getPassword() : int {
        return $this->password;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setPassword($password){
        $this->password = $password;
    }

    public function affichage(){
        echo "Nom de administrateur : ".$this->nom." email de administrateur : ".$this->email;
    }
}
?>