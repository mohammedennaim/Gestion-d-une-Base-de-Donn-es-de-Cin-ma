<?php
class Projection {
    protected $date;
    protected $heure;
    protected Film $film;
    
    public function __construct($date,$heure) {
        $this->$date = $date;
        $this->$heure = $heure;
    }
    public function getDate() : int {
        return $this->date;
    }
    public function getHeure() : int {
        return $this->heure;
    }
    public function setDate($date){
        $this->date = $date;
    }
    public function setHeure($date){
        $this->heure = $date;
    }

    public function affichage(){
        echo "la date de film : ".$this->date." l'heure' de film : ".$this->heure;
    }
}
?>