<?php
    session_start();
    if(!isset($_SESSION['logged'])){
        $_SESSION['logged'] = 'on';
    } else {
        $isLogged = $_SESSION['logged'];
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
            include('../includes/database-conn.php');
            $stmt = $link->prepare($sql  = "SELECT authors.name as author, images.name, images.text, images.id, images.file FROM authors INNER JOIN images on images.author_id = authors.id WHERE images.enabled = 1 ORDER BY images.id DESC;");
            $stmt->bindColumn('author', $author);
            $stmt->bindColumn('name', $imageName);
            $stmt->bindColumn('text', $imageText);
            $stmt->bindColumn('id', $imageID);
            $stmt->bindColumn('file', $imageFile);
            $stmt->execute();
            $imgQuantity = 0;

            if($stmt->fetch()){
                while($stmt->fetch(PDO::FETCH_BOUND)){   
                    if(($imgQuantity%4 == 0)){
                        echo "</div>";
                        echo "<div class='photo-container'>";
                    }
                    echo ' 
                    <div class="box">
                        <a href="info.php?photo=' . $imageID . '&file=' . $imageFile . '"><img src="../../imagesuser/'. $imageFile .'" alt="' . $imageText . '"></a>        
                        <span>'. $imageText . '</span>
                        <span>Author: ' . $author . '</span>
                    </div>';
                    $imgQuantity++;
                }
            } else {
                echo "<div class='no-photos'><h1>No hay fotos que mostrar, <a href='./upload.php'>subir una foto</a></h1></div>";
            }
        ?>
    </main>
    <?php include('../includes/footer.php') ?>
    <?php include('../includes/database-close.php'); ?>
</body>
</html>