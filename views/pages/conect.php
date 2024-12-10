<?php
    use Lib\DataBase;

    $servername = "localhost";
    $database = "farmacia";
    $username = "admin";
    $password = "admin123";
    $connection = new DataBase($servername,$username,$password,$database);
?>