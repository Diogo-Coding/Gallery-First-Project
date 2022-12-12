<?php
    session_start();
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
        if(isset($_SESSION['userEmail'])){
            //Sentencia para sacar el id
            include('../includes/database-conn.php');
            $email = $_SESSION['userEmail'];
            $stmt = $link->prepare("SELECT * FROM authors WHERE email='$email'");
            $stmt->bindColumn('id',$id);
            $stmt->execute();
            if(!$stmt->fetch()){
                echo "Error al realizar sequencia";
            } else {
                //Sentencia para mostrar las imagenes del usuario
                $stmt1 = $link->prepare("SELECT * FROM images WHERE author_id = $id");
                $stmt1->bindColumn('id',$photoID);
                $stmt1->bindColumn('file',$file);
                $stmt1->bindColumn('text',$text);
                $result = $stmt1->execute();
                $imgQuantity = 0;
                if($result != null){
                    while($stmt1->fetch(PDO::FETCH_BOUND)) {
                        if(($imgQuantity%4 == 0)){
                            echo "</div>";
                            echo "<div class='photo-container'>";
                        }
                        echo ' 
                        <div class="box">        
                            <a href="modify.php?photo=' . $photoID . '"><img src="../../imagesuser/'. $file .'" alt="' . $text . '"></a>
                            <span>'.$text.'</span>
                        </div>';
                        $imgQuantity++;
                    }
                } else {
                    echo "<div class='no-photos'><h1>No hay fotos que mostrar, <a href='./upload.php'>subir una foto</a></h1></div>";
                }
            }
        }
    ?>
    </main>
    <?php include('../includes/footer.php') ?>
    <?php include('../includes/database-close.php'); ?>
</body>
</html>