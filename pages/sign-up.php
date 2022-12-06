<?php
$name = $_POST['create-name'];
$email = $_POST['create-email'];
$password = $_POST['create-password'];

if(!(isset($name) && isset($email) && isset($password))){
    //Conexion no valida
} else {
    include('includes/database-conn.php');

    //Codigo

    include('includes/database-close.php');
}