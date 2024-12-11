<?php
namespace Models;
class Pedido {
    
    private $codigoPedido;
    private $idCliente;
    private $idUser;
    private $cantidad;
    private $idMedicamento;
    private $precio;
    private $fecha;

    public function __construct($codigoPedido, $idCliente, $idUser, $precio, $idMedicamento,$cantidad) {
       
        $this->codigoPedido = $codigoPedido;
        $this->idCliente = $idCliente;
        $this->idUser = $idUser;
        $this->precio=$precio;
        $this->idMedicamento = $idMedicamento;
        $this->cantidad = $cantidad;
    }

    // METODOS GET DE LA CLASE PEDIDO
    public function getIdMedicamento() {
        return $this->idMedicamento;
    }

    public function getCodigoPedido() {
        return $this->codigoPedido;
    }

    public function getIdCliente() {
        return $this->idCliente;
    }

    public function getIdUser() {
        return $this->idUser;
    }

    public function getCantidad() {
        return $this->cantidad;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getFecha(){
        return $this->fecha;
    }

    // METODOS SET DE LA CLASE PEDIDO
    public function setIdMedicamento($idMedicamento) {
        $this->idMedicamento = $idMedicamento;

    }
    public function setCodigoPedido($codigoPedido) {
        $this->codigoPedido = $codigoPedido;
    }


    public function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    public function setIdUser($idUser) {
        $this->idUser = $idUser;
    }

    public function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }
}

