<?php

class Acteurs {
    private $_id;
    private $_nomActeur;
    private $_prenom;
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
    public function setId($id){
        $id = (int) $id;
        if($id > 0){
            $this->_id = $id;
        }
    }
    public function setNomActeur($nomActeur){
        $nomActeur = (string) $nomActeur;
        if(is_string($nomActeur)){
            $this->_nomActeur = $nomActeur;
        }
    }
    public function setPrenom($prenom){
        $prenom = (string) $prenom;
        if(is_string($prenom)){
            $this->_prenom = $prenom;
        }
    }


    //getteurs
    public function getId(){
        return $this->_id;
    }
    public function getNomActeur(){
        return $this->_nomActeur;
    }
    public function getPrenom(){
        return $this->_prenom;
    }
}