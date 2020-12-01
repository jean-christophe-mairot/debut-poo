<?php
class Film{
    // public = on peut accédé à la propriété 
    //à l'interieur et l'exterieur de la class
    //quand private on met un _devant
 private $_id_film;
 private $_nom_film;
 private $_realisateur_film;
 private $_annee_film;

  
    //quand on construit un objet 
    public function __construct($_id_film,$_nom_film,$_realisateur_film,$_annee_film){
        $this->id=$_id_film;
        $this->nom_film=$_nom_film;
        $this->realisateur_film=$_realisateur_film;
        $this->annee_film=$_annee_film;
    }
    //attraper get
    public function getNomFilm(){
        return $this->nom_film;
    }

    public function setNomFilm($new_nom_film){
        $this->nom_film = $new_nom_film;
    }
    public function getRealisateurFilm(){
        return $this->realisateur_film;
    }
    public function setRealisateurFilm($new_realisateur_film){
        $this->realisateur_film = $new_realisateur_film;
    }
    public function getAnneeFilm(){
        return $this->annee_film;
    }
}

