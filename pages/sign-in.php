<?php
    $email = $_POST['log-in-email'];
    $password = $_POST['log-in-password'];

    if(!(isset($email) && isset($password))){
        //Conexion no valida
    } else {
        include('includes/database-conn.php');

        //Codigo
        
        include('includes/database-close.php');
    }
?>