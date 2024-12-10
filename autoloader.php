<?php
/**
 * Funcion para leer las clases del proyecto
 */
spl_autoload_register(function ($clase){
    $direccion = str_replace('\\','/',$clase);
    if (file_exists($direccion . '.php')) {
        require $direccion.'.php';
    }
})
?>