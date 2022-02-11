<?php

class Casting {
    private $_film_id;
    private $_acteurs_id;
    //constructeur
    public function __construct(array $data){
        $this->hydrate($data);
    }
    //hydratation !! 
    public function hydrate(array $data){
        foreach($data as $key => $value){
            $method = 'set'.ucfirst($key);
            if (method_exists($this,$method))
                $this->$method($value);
            
        }
    }
    //setteurs
    public function setFilm_id($film_id){
        $film_id = (int) $film_id;
        if($film_id > 0){
            $this->_film_id = $film_id;
        }
    }
    public function setActeurs_id($acteurs_id){
        $acteurs_id = (int) $acteurs_id;
        if($acteurs_id > 0){
            $this->_acteurs_id = $acteurs_id;
        }
    }


    //getteurs
    public function getFilmId(){
        return $this->_film_id;
    }
    public function getActeursId(){
        return $this->_acteurs_id;
    }
}