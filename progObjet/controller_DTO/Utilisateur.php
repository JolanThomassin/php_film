<?php

class Utilisateur {
    private $_id;
    private $_login;
    private $_pwd;
    private $_role;

    public function __construct(array $data) {
        $this->hydrate($data);
    }
    public function hydrate(array $data) {   
        foreach($data as $key => $value) {
            $method = 'set'.ucfirst($key);
            if (method_exists($this,$method))
                $this->$method($value);
        }
    }

    // Setteurs
    public function setId($id) {
        $id = (int) $id;
        if($id > 0) {
            $this->_id = $id;
        }
    }
    public function setLogin($login) {
        $login = (string) $login;
        if(is_string($login)) {
            $this->_login = $login;
        }
    }
    public function setPwd($pwd) {
        $pwd = (string) $pwd;
        if(is_string($pwd)) {
            $this->_pwd = $pwd;
        }
    }
    public function setRole($role) {
        $role = (string) $role;
        if(is_string($role)) {
            $this->_role = $role;
        }
    }

    // Getteurs
    public function getId() {
            return $this->_id;
    }
    public function getLogin() {
        return $this->_login;
    }
    public function getPwd() {
        return $this->_pwd;
    }
    public function getRole() {
        return $this->_role;
    }

}