<?php
use Lib\Database;
use PDOException;
use PDO;
class FarmacosRepository{
    private Database $connection;

    private mixed $sql;
    function __construct()
    {
        $this->connection= new Database();

    }

    public function findAll($idMedicamento) {
        try {
            $this->sql = $this->connection->prepareSQL("SELECT * FROM medicamentos WHERE idMedicamento = :idMedicamento");
            $this->sql->bindValue(":idMedicamento", $idMedicamento);
            $this->sql->execute();
            $datosFarmacos = $this->sql->fetchAll(PDO::FETCH_ASSOC);
            $this->sql->closeCursor();
            $farmacos = $datosFarmacos ?: null; // Si no hay datos, se asigna null.
        } catch (PDOException $e) {
            $farmacos = $e->getMessage(); // Asigna el mensaje de error si ocurre una excepción.
        }
        
        return $farmacos; // Devuelve los datos o el mensaje de error.
    }


    public function add($data){
        try {
            $this->sql = $this->connection->prepareSQL("INSERT INTO medicamentos(idMedicamento, codigo, nombre, descripcion, cantidad) VALUES (:idMedicamento, :codigo, :nombre, :descripcion, :cantidad);");
            $this->sql->bindValue(":idMedicamento", $data['idMedicamento']);
            $this->sql->bindValue(":codigo", $data['codigo']);
            $this->sql->bindValue(":nombre", $data['nombre']);
            $this->sql->bindValue(":descripcion", $data['descripcion']);
            $this->sql->bindValue(":cantidad", $data['cantidad']);
            $this->sql->execute();
            $result = null;
        } catch (PDOException $e) {
            $result = $e->getMessage();
        }
        $this->sql->closeCursor();
        $this->sql = null;
        return $result;
    }

    function delete($idMedicamento){
    try {
        $this->sql = $this->connection->prepareSQL("DELETE FROM medicamentos WHERE idMedicamento = :idMedicamento;");
        $this->sql->bindValue(":id", $idMedicamento);
        $this->sql->execute();
        $result = null;
    } catch (PDOException $e) {
        $result = $e->getMessage();
    }
    $this->sql->closeCursor();
    $this->sql = null;
    return $result;
}
}
    