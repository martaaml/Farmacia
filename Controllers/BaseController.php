<?php
namespace Controllers;
use Lib\DataBase;
use Lib\Pages;

class BaseController{
    private string $server = "localhost";
    private string $database = "farmacia";
    private string $username = "admin";
    private string $password = "admin123";
    private DataBase $conect;
    private Pages $pages;
    public function __construct()
    {
        $this->conect = new DataBase($this->server,$this->username,$this->password,$this->database);
        $this->pages = new Pages();
    }
    function showPage() : void {

        $this->pages->render('auth/login');
    }
}