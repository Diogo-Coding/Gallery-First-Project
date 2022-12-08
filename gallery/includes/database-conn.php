<?php 
$host = "db";
$dbuser = "root";
$dbpassword = "test";
$db = "GALLERY2";

$dsn = "mysql:host=$host; dbname=$db";

try{
    $link = new PDO($dsn, $dbuser, $dbpassword);
} catch (PDOException $ex){
    die("Error en la conexion" . $ex->getMessage());
}

