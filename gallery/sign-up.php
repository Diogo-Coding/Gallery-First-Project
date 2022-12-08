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
    <title>Sign up</title>
</head>
<body>
<?php

    if(isset($_POST['create-name']) && isset($_POST['create-email']) && isset($_POST['create-password'])){
        include('includes/database-conn.php');

        $createName = $_POST['create-name'];
        $createEmail = $_POST['create-email'];
        $createPassword = $_POST['create-password'];

        $stmt = $link->prepare("SELECT * FROM authors WHERE email='$createEmail'");
        $stmt->execute();
        if(!$stmt->fetch()){
            $sql = "INSERT INTO `authors`(`name`, `email`, `password`,`enabled`) VALUES ('$createName','$createEmail','$createPassword','0')";
            $result = $link->query($sql);
    
            if($result){
                include('../includes/header.php');
                include('includes/log-create-success.php');
                include('../includes/footer.php');
            } else {
                include('../includes/header.php');
                include('includes/log-create-error.php');
                include('../includes/footer.php');
            }
        } else {
            include('../includes/header.php');
            include('includes/log-already-created.php');
            include('../includes/footer.php');
        }
        include('includes/database-close.php');
    } else {
        include('../includes/header.php');
        include('includes/log-create-error.php');
        include('../includes/footer.php');
    }
?>
</body>
</html>