<?php
use Dotenv\Dotenv;



    require_once __DIR__. "/vendor/autoload.php";
    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->Load();
    echo $_ENV["USER"];
   

$conexion = new mysqli ($_ENV['SERVER'],$_ENV["USER"],$_ENV['PASS'], $_ENV['DB'], $_ENV['PORT']);

 echo( $conexion->connect_errno ? :"  me vale verga connexion exitosa");


?>