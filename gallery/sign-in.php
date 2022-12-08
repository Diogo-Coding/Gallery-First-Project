<?php
    $logEmail = $_POST['log-in-email'];
    if(!isset($_COOKIE['userEmail'])){
        setcookie('userEmail', $logEmail);
    } else {
        setcookie('userEmail', $logEmail);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/log-indicators.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <title>Sign in</title>
</head>
<body>
    <?php
        if(isset($_POST['submit'])){
            if(isset($_POST['log-in-email']) && isset($_POST['log-in-password'])){
                include('includes/database-conn.php');
    
                $logEmail = $_POST['log-in-email'];
                $logPassword = $_POST['log-in-password'];
    
                $stmt = $link->prepare("SELECT * FROM `authors` WHERE email = '$logEmail' AND password='$logPassword'");
                $stmt->execute();
    
                if($stmt->fetch()){
                    //El login es correcto se muestra:
                    include('includes/log-correct-login.php');
                    include('../includes/footer.php');
                } else {
                    //El login es incorrecto se muestra:
                    include('includes/log-incorrect-login.php');
                    include('includes/footer.php');
                }
                $stmt = null;
    
                include('includes/database-close.php');
            }
        } else {
            //los posts han fallado o algo nose
            include('includes/log-error.php');
            include('includes/footer.php');
        }
    ?>
</body>
</html>