<?php
use Repositories\farmacosRepository;
class farmacosService{
private FarmacosRepository $repositorio;
public function __construct()
{
    $this->repositorio = new FarmacosRepository;
}

/***
 * Funcion para buscar un farmaco
 * 
 */

 public function buscarFarmaco($idMedicamento){
return $this->repositorio->findAll($idMedicamento);
 }

 /***
  *Funcion para añadir un farmaco 
  *
  */
  public function añadirFarmaco($idMedicamento){
    return $this->repositorio->add($idMedicamento);
  }

  /***
   * Funcion para borrar un farmaco
   * 
   */

  public function borrarFarmaco($idMedicamento){
    return $this->repositorio->delete($idMedicamento);
  }
}