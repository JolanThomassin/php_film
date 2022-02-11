<?php

abstract class Model{
    private static $_bdd;
    // instancie la connexion
    private static function setBdd(){
        self::$_bdd = new PDO('mysql:host=192.168.211.128;dbname=test','root','php');
        self::$_bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    }
    // recupere la connexion a la BDD
    protected function getBdd(){
        if(self::$_bdd == null){
            self::setBdd();
            return self::$_bdd;
        }
    }
    protected function getAll($table, $obj){
        $var = [];
        $req = self::$_bdd->prepare('SELECT * FROM '.$table.' ;');
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC)){
            $var[] = new $obj($data); 
        }
        return $var;
    }

    protected function requeteSql($req){
        try
        {
            $req = self::$_bdd->prepare($req);
            $req->execute();
            return $req;
        }
        catch(PDOException $e)
        {
        
        }
    }
}
