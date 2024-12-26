<?php
class Salle{
    protected $name;
    private $capacitie;
    
    public function __construct($name,$capacitie) {
        $this->$name = $name;
        $this->$capacitie = $capacitie;
    }
    public function getName() : int {
        return $this->name;
    }
    public function getCapacitie() : int {
        return $this->capacitie;
    }
    public function setDate($name){
        $this->name = $name;
    }
    public function setHeure($name){
        $this->capacitie = $capacitie;
    }

    public function affichage(){
        echo "Name de salle : ".$this->name." capacitie de salle : ".$this->capacitie;
    }
}
?>