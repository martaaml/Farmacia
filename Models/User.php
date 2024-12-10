<?php
class User {
    
    private $nombre;
    private $usuario;
    private $email;
    private $password;
    private $isAdmin;


    public function __construct($nombre, $usuario, $email, $password,$isAdmin) {
        $this->nombre = $nombre;
        $this->usuario = $usuario;
        $this->email = $email;
        $this->password = $password;
        $this->isAdmin=$isAdmin;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getContraseña() {
        return $this->password;
    }

    public function getIsAdmin(){
        return $this->isAdmin;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setContraseña($password) {
        $this->password = $password;
    }
    public function setIsAdmin($isAdmin) {
        $this->isAdmin = $isAdmin;
    }

}

