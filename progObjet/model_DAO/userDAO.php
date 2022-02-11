<?php 
   class UserDAO {
     
      private $login;
      private $pwd;
      private $role;
      private $sessionValide = False;

      function __construct($login, $role) {
         $this->login = $login;
         $this->role = $role;
      }

      public function getSession()
         {
            return $this->sessionValide;
         }


      public function getRole()
         {
            return ( $this->role); 
         }

      public function getLogin()
         {
            return( $this->login); 
         }
   }
?>