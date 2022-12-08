<?php
    if(!isset($_COOKIE['logged'])){
        setcookie('logged', 'true');
        setcookie('name', );
    } else {
        $isLogged = $_COOKIE['logged'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="../../css/loggedIndex.css">
    <title>Upload page</title>
</head>
<body>
    <?php include('../includes/headerON.php') ?>
    <main>
        <?php 
            
        ?>
        <!-- <div class="photo-container">
            <div class="box">
                <img src="../../images/bg-01.jpg">
                <span>Descripción</span>
            </div>
            <div class="box">
                <img src="https://source.unsplash.com/1000x802">
                <span>Descripción</span>
            </div>
            <div class="box">
                <img src="https://source.unsplash.com/1000x804">
                <span>Descripción</span>
            </div>
            <div class="box">
                <img src="https://source.unsplash.com/1000x806">
                <span>Descripción</span>
            </div>
        </div> -->
    </main>
    <?php include('../includes/footer.php') ?>
</body>
</html>