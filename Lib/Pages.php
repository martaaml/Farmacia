<?php
// Espacio de nombres para evitar errores
namespace Lib;

/**
 * Clase pages para cargar todas las paginas
 */
class Pages
{
    /**
     * Funcion render para hacer la carga de las paginas
     *
     * @param string $pageName El nombre del archivo dentro de la carpeta "views" o vistas.
     * @param array|null $params carga de los parametros que va a recibir esa "view" o vista.
     * @return void
     */
    public function render(string $pageName, array $params = null): void
    {
        if ($params != null) {
            foreach ($params as $name => $value) {
                $$name = $value;
            }
        }
        // Carga de la cabecera
        require_once "views/layout/header.php";
        // Carga el cuerpo de la vista
        require_once "views/$pageName.php";
        // Carga del footer
        require_once "views/layout/footer.php";
    }
}