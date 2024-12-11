<?php

namespace Services;

use Repositories\UsuariosRepository;

class UsuariosService
{
    // Creamos atributo de la clase usando la clase UsuariosRepository
    private UsuariosRepository $userRepository;
    function __construct()
    {
        //Instanciamos la clase
        $this->userRepository = new UsuariosRepository();
    }
    /**
 * Función para devolver todos los usuarios.
 *
 * @return array|null en caso de que haya resultados o null si no hay.
 */
public function allUsers()
{
    return $this->userRepository->findAll();
}

/**
 * Función para registrar un nuevo usuario.
 *
 */
public function register(string $nombre, string $usuario, string $email, string $password, bool $isAdmin)
{
    return $this->userRepository->register($nombre, $usuario, $email, $password, $isAdmin);
}

/**
 * Función para obtener la identidad de un usuario por email.
 *
 */
public function getIdentity(string $email)
{
    return $this->userRepository->getIdentity($email);
}

/**
 * Función para obtener los datos de un usuario por su nombre de usuario.
 */
public function getData(string $usuario)
{
    return $this->userRepository->getDataByUsername($usuario);
}

/**
 * Función para eliminar un usuario por su nombre de usuario.
 *
 */
public function removeUser(string $usuario)
{
    return $this->userRepository->removeUser($usuario);
}

/**
 * Función para actualizar el rol de administrador de un usuario.
 */
public function updateRole(string $usuario, bool $isAdmin)
{
    return $this->userRepository->updateRole($usuario, $isAdmin);
}
}