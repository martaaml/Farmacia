<?php

namespace Repositories;

use Lib\DataBase;
use Models\User;
use DateTime;
use PDOException;
use PDO;

class UsuariosRepository
{
    private DataBase $conection;
    private mixed $sql;

    public function __construct()
    {
        $this->conection = new DataBase();
    }

    /**
     */
    public function findAll()
    {
        $usuarios = [];
        try {
            $this->conection->querySQL("SELECT * FROM usuarios");
            $usuariosData = $this->conection->allRegister();
            foreach ($usuariosData as $usuarioData) {
                $usuarios[] = User::fromArray($usuarioData);
            }
        } catch (PDOException) {
            $usuarios = null;
        }
        return $usuarios;
    }

    /**
     * Función para registrar un nuevo usuario.
     * 
     */
    public function register(string $nombre, string $usuario, string $email, string $password, bool $isAdmin)
    {
        try {
            $this->sql = $this->conection->prepareSQL(
                "INSERT INTO usuarios(nombre, usuario, email, password, is_admin) VALUES (:nombre, :usuario, :email, :password, :isAdmin)"
            );
            $this->sql->bindValue(":nombre", $nombre);
            $this->sql->bindValue(":usuario", $usuario);
            $this->sql->bindValue(":email", $email);
            $this->sql->bindValue(":password", password_hash($password, PASSWORD_BCRYPT));
            $this->sql->bindValue(":isAdmin", $isAdmin, PDO::PARAM_BOOL);
            $this->sql->execute();
            $result = null;
        } catch (PDOException $e) {
            $result = $e->getMessage();
        }
        $this->sql->closeCursor();
        return $result;
    }

    /**
     * Función para obtener la identidad de un usuario por su email.
     */
    public function getIdentity(string $email)
    {
        try {
            $this->sql = $this->conection->prepareSQL("SELECT * FROM usuarios WHERE email = :email");
            $this->sql->bindValue(":email", $email);
            $this->sql->execute();
            $usuario = $this->sql->fetch(PDO::FETCH_ASSOC) ?: null;
        } catch (PDOException $e) {
            $usuario = null;
        }
        $this->sql->closeCursor();
        return $usuario;
    }

    /**
     * Función para obtener los datos de un usuario por su nombre de usuario.
     */
    public function getDataByUsername(string $usuario): ?array
    {
        try {
            $this->sql = $this->conection->prepareSQL("SELECT * FROM usuarios WHERE usuario = :usuario");
            $this->sql->bindValue(":usuario", $usuario);
            $this->sql->execute();
            $usuarioData = $this->sql->fetch(PDO::FETCH_ASSOC) ?: null;
        } catch (PDOException $e) {
            $usuarioData = null;
        }
        $this->sql->closeCursor();
        return $usuarioData;
    }

    /**
     * Función para eliminar un usuario por su nombre de usuario.
     */
    public function removeUser(string $usuario): ?string
    {
        try {
            $this->sql = $this->conection->prepareSQL("DELETE FROM usuarios WHERE usuario = :usuario");
            $this->sql->bindValue(":usuario", $usuario);
            $this->sql->execute();
            $result = null;
        } catch (PDOException $e) {
            $result = $e->getMessage();
        }
        $this->sql->closeCursor();
        return $result;
    }

    /**
     * Función para actualizar el rol de administrador de un usuario.
     * 
     */
    public function updateRole(string $usuario, bool $isAdmin): ?string
    {
        try {
            $this->sql = $this->conection->prepareSQL("UPDATE usuarios SET is_admin = :isAdmin WHERE usuario = :usuario");
            $this->sql->bindValue(":usuario", $usuario);
            $this->sql->bindValue(":isAdmin", $isAdmin, PDO::PARAM_BOOL);
            $this->sql->execute();
            $result = null;
        } catch (PDOException $e) {
            $result = $e->getMessage();
        }
        $this->sql->closeCursor();
        return $result;
    }

    /**
     * Función para actualizar el último comentario registrado por un usuario.
     * 
     */
    public function addCommit(string $usuario, string $date)
    {
        try {
            $this->sql = $this->conection->prepareSQL("UPDATE usuarios SET ultimo_commit = :fecha WHERE usuario = :usuario");
            $this->sql->bindValue(":usuario", $usuario);
            $this->sql->bindValue(":fecha", $date);
            $this->sql->execute();
            $result = null;
        } catch (PDOException $e) {
            $result = $e->getMessage();
        }
        $this->sql->closeCursor();
        return $result;
    }
}
