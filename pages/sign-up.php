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
    $createName = $_POST['create-name'];
    $createEmail = $_POST['create-email'];
    $createPassword = $_POST['create-password'];

    if(isset($createName) && isset($createEmail) && isset($createPassword)){
        include('includes/database-conn.php');

        $sql = "INSERT INTO `authors`(`name`, `email`, `password`,`enabled`) VALUES ('$createName','$createEmail','$createPassword','1')";
        $result = $link->query($sql);

        if($result){
            include('../includes/header.php');
            include('includes/log-success.php');
            include('../includes/footer.php');
        } else {
            include('../includes/header.php');
            include('includes/log-error.php');
            include('../includes/footer.php');
        }

        include('includes/database-close.php');
    } else {
        include('../includes/header.php');
        include('includes/log-error.php');
        include('../includes/footer.php');
    }
?>
</body>
</html>