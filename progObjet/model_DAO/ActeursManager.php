<?php
require_once("Model.php");
class ActeursManager extends Model{
    public function getActeurs(){
        $this->getBdd();
        return $this->getAll('acteurs','Acteurs');
    } 
    public function getCasting(){
        $this->getBdd();
        return $this->getAll('jointure','Casting');
    } 
    public function getCastingById($id){
        $this->getBdd();
        $resultat = $this->requeteSql("select acteurs_id from jointure where film_id = ".$id.";");
        $data = $resultat->fetch(PDO::FETCH_ASSOC);
        $var = new Casting($data); 
        return $var;
    }
    public function getActeursById($id) {
        $this->getBdd();
        $resultat = $this->requeteSql("select * from acteurs where id = ".$id.";");
        $data = $resultat->fetch(PDO::FETCH_ASSOC);
        $var = new Acteurs($data);  
        return $var;
    }
    public function addCasting($idFilm, $idActeur) {
        $this->getBdd();
        $this->requeteSql("INSERT INTO `jointure` (`film_id`, `acteurs_id`) VALUES ('".$idFilm."', '".$idActeur."');");
    }
    public function addActeur($nom, $prenom) {
        $this->getBdd();
        $this->requeteSql("INSERT INTO `acteurs` (`nomActeur`, `prenom`) VALUES ('".$nom."', '".$prenom."');");
    }
}