<?php

namespace Models;
class Medicamento {
    
    // DECLARACION DE VARIABLES
    private $idMedicamento;
    private $codigo;
    private $nombre;
    private $descripcion;
    private $cantidad;

    //CONSTRUCTOR CON PARAMETROS DE LA CLASE MEDICAMENTO

    public function __construct($idMedicamento, $codigo, $nombre, $descripcion, $cantidad) {
        $this->idMedicamento = $idMedicamento;
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->cantidad = $cantidad;
    }

    // METODOS GET DE LA CLASE MEDICAMENTO
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

    // METODOS SET DE LA CLASE MEDICAMENTO

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


