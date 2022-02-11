<?php
function connectDB() {
   $host = '192.168.211.128';
   $user = 'root';
   $db = 'test';
   $pwd = 'php';

   try {
      $bdd = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8', $user,$pwd);
      return $bdd;
   } catch (Exception $e) {
      exit('Erreur : '.$e->getMessage());
   }
}

?>