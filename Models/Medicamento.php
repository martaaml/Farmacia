<?php
class Medicamento {
    
    private $idMedicamento;
    private $codigo;
    private $nombre;
    private $descripcion;
    private $cantidad;


    public function __construct($idMedicamento, $codigo, $nombre, $descripcion, $cantidad) {
        $this->idMedicamento = $idMedicamento;
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->cantidad = $cantidad;
    }

    public function getIdMedicamento() {
        return $this->idMedicamento;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getCantidad() {
        return $this->cantidad;
    }


    public function setIdMedicamento($idMedicamento) {
        $this->idMedicamento = $idMedicamento;

    }
    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }


    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

}


