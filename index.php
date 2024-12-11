<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiendas</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <?php
    // Cargo todas las clases
    require_once("vendor/autoload.php");
    // Carga del archivo de configuracion
    require_once("config/config.php");
    // Carga del header para la vista
    require_once('views/layout/header.php');
    // Uso el FrontController para mostrar el controlador por defecto configurado en el archivo config
    use Controllers\FrontController; 
    // Carga de la función main del controlado.
    FrontController::main();
    // Carga del footer para la vista
    require_once('views/layout/footer.php');
    ?>
</body>

</html>