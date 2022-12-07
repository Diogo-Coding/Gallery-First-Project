<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sing in</title>
</head>
<body>
    <?php
        $email = $_POST['log-in-email'];
        $password = $_POST['log-in-password'];

        if(!(isset($email) && isset($password))){
            include('includes/database-conn.php');

            $sql = "SELECT * FROM authors WHERE email ='" . $email . "' AND password='" . $password . "'";
            $result = $link->query($sql);

            if(!$result){
                include('../includes/header.php');
                include('includes/log-in-error.php');
                include('../includes/footer.php');
            }

            include('includes/database-close.php');
        } else {
            include('includes/database-conn.php');
            include('../includes/header.php');
            include('includes/log-in-error.php');
            include('../includes/footer.php');
            include('includes/database-close.php');
        }
    ?>
</body>
</html>