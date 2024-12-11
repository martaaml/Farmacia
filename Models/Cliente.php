<?php
class Cliente {

    // DECLARACION DE VARIABLES
    private $id;
    private $direccion;
    private $telefono;
    private $email;

    //CONSTRUCTOR CON PARAMETROS DE LA CLASE CLIENTE

    public function __construct($id, $direccion, $telefono, $email) {
        $this->id = $id;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->email = $email;
    }


    // METODOS GET DE LA CLASE CLIENTE

    public function getId() {
        return $this->id;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getEmail() {
        return $this->email;
    }

    // METODOS SET DE LA CLASE CLIENTE
 
    public function setId($id) {
        $this->id = $id;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
}
?>
