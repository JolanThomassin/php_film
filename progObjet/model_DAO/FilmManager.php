<?php
require_once("Model.php");
require_once("../controller_DTO/Film.php");
class FilmManager extends Model{
    public function getFilms(){
        $this->getBdd();
        return $this->getAll('film','Film');

    }
    public function getFilmById($id) {
        $this->getBdd();
        $resultat = $this->requeteSql("select * from film where id = ".$id.";");
        $data = $resultat->fetch(PDO::FETCH_ASSOC);
        $var = new Film($data);  
        return $var;
    }
    public function setImage($id, $img) {
        $this->getBdd();
        $this->requeteSql("UPDATE film SET image= '".$img."' where id = ".$id.";"); 
    }
    public function addFilm($nom, $annee, $score) {
        $this->getBdd();
        $this->requeteSql("INSERT INTO `film` (`id`, `nom`, `annee`, `score`, `nbVotants`, `image`)
         VALUES (NULL,'".$nom."', '".$annee."', '".$score."', '0','');");
    }
    public function voterFilm($id) {
        $this->getBdd();
        $this->requeteSql("UPDATE film SET nbVotants = nbVotants +1 WHERE id =". $id.";");
    }
}