<?php
    if($_POST['product']){
        $product = $_POST['product'];
    }else{
        $product = "";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        use Lib\Database;

        $servername = "localhost";
        $database = "farmacia";
        $username = "admin";
        $password = "admin123";
        $connection = new Database($servername, $username, $password, $database);

        $sql = "SELECT cod, nombre_corto FROM productos;";
        $result = $connection->querySQL($sql);
    ?>
    <form action="" method="POST">
        <select name="product">
            <?php
            while ($row = $connection->register()):
            ?>
               <option value="<?= $row['cod']?> "> <?= $row['nombre_corto']?> </option>;
            <?php
            endwhile;
            ?>
        </select>
        <input type="submit" value="SUBMIT">
    </form>
    
    <section class="stock">
        <h2>Stock del producto: </h2>
        <?php
            $sql = "SELECT tiendas.nombre, stock.unidades FROM tiendas INNER JOIN stock ON tiendas.cod=stock.tienda WHERE stock.producto='$product';";
            $result = $connection->querySQL($sql);
            while ($row = $connection->register()):
                echo "Tienda: ".$row['nombre'].": ".$row['unidades']."<br>";
            endwhile;
        ?>
    </section>
    <?php
        $connection->close();
    ?>
</body>
</html>