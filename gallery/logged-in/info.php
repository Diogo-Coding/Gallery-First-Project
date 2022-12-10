<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="../../css/info.css">
    <title>Upload-Up</title>
</head>
<body>
    <?php include('../includes/headerON.php') ?>
    <main>
        <?php 
            if(isset($_GET['photo']) && isset($_GET['file'])){
                include('../includes/database-conn.php');
                $id = $_GET['photo'];
                $file = $_GET['file'];

                $stmt = $link->prepare($sql  = "SELECT authors.name as author, images.name, images.text FROM authors INNER JOIN images on images.author_id = authors.id WHERE images.id = $id");
                $stmt->bindColumn('author', $author);
                $stmt->bindColumn('name', $imageName);
                $stmt->bindColumn('text', $imageText);
                $stmt->execute();

                if(!$stmt->fetch()){
                    echo "Error al mostrar la informacion de la imagen";
                }else {
                    ?>
                        <div class="info-container" id="container">
                            <div class="info2-container info-up-container">
                                <div class="info-up">
                                    <img class="info-img" src="../../imagesuser/<?php echo $file?>" alt="<?php echo $imageText?>">
                                </div>
                            </div>
                            <div class="info2-container info-down-container">
                                <div class="info-down">
                                    <h1 class="info-h1">Image info</h1>
                                    <p></p>
                                    <p class="info-p">Author</p>
                                    <span class="info-span"><?php echo $author?></span>
                                    <p class="info-p">Image name</p>
                                    <span class="info-span"><?php echo $imageName ?></span>
                                    <p class="info-p">Image description</p>
                                    <span class="info-span"><?php echo $imageText ?></span>
                                    <p></p>
                                    <a href="./loggedIndex.php"><button class="info-button">Volver</button></a>
                                </div>
                            </div>
                        </div>
                    <?php
                }
            }
        ?>
    </main>
    <?php include('../includes/footer.php') ?>
    <?php include('../includes/database-close.php'); ?>
</body>
</html>