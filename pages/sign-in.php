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
        $logEmail = $_POST['log-in-email'];
        $logPassword = $_POST['log-in-password'];

        if(isset($logEmail) && isset($logPassword)){
            include('includes/database-conn.php');

            $sql = "SELECT * FROM `authors` WHERE email = '$logEmail' AND password='$logPassword'";
            $result = $link->query($sql);

            if($result){
                include('../includes/header.php');
                include('includes/log-success.php');
                include('../includes/footer.php');
            }

            include('includes/database-close.php');
        } else {
            include('includes/database-conn.php');
            include('../includes/header.php');
            include('includes/log-success.php');
            include('../includes/footer.php');
            include('includes/database-close.php');
        }
    ?>
</body>
</html>