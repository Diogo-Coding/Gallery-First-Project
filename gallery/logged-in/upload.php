<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="../../css/upload.css">
    <title>Upload page</title>
</head>
<body>
    <?php include('../includes/headerON.php') ?>
    <main>
        <div class="upload-container" id="container">
            <div class="form-container upload-up-container">
                <form action="" class="upload-form" enctype="multipart/form-data" method="POST">
                    <p></p>
                    <h1 class="upload-h1">Upload Image</h1>
                    <p></p>
                    <?php 
                        if(isset($_COOKIE['userEmail'])){
                            include('../includes/database-conn.php');
                            $email = $_COOKIE['userEmail'];
                            $stmt = $link->prepare("SELECT * FROM authors WHERE email='$email'");
                            $stmt->bindColumn('name', $name);
                            $stmt->bindColumn('id',$id);
                            $stmt->execute();
                            if(!$stmt->fetch()){
                                echo "Error al realizar sequencia";
                            }
                            if (isset($_POST["submit"])) {
                                
                                if ( isset( $_POST['enabled'])){
                                 $enabled = 1; }
                                else {
                                $enabled = 0; }
                                $imagename =  $_POST['image-name'];
                                $text =  $_POST['image-text'];
                                try{
                                move_uploaded_file( $_FILES["image"]["tmp_name"], "../../imagesuser/" . $_FILES["image"]["name"]);
                                
                                $fichero = $_FILES["image"]["name"];
                                $size = $_FILES["image"]["size"];
                                
                                $stmt1 = $link->exec("INSERT into images( author_id, name, file, size, text, enabled) values( ".$id.", '".$imagename."', '".$fichero."', '".$size."', '".$text."', ".$enabled.")");
                               
                            }
                                catch(Exception $e){echo "Se ha producido el siguiente error: " . $e->getMessage();}
                                 }
                        }
                    ?>
                    <input class="input" type="text" value="<?php echo $name?>" name="image-author" disabled/>
                    <input class="input" type="text" placeholder="Name" name="image-name" required/>
                    <input class="input" type="file" name="image" id="image" required accept="image/*"/>
                    <input class="input" type="text" placeholder="Text" name="image-text" required/>
                    <label for="enabled">Enabled <input type="checkbox" name="enabled" id="enabled"></label>
                    <?php
                          
                    ?>
                       
                    <p></p>
                    <input type="submit" class="upload" value="Upload" name="submit">
                </form>
            </div>
        </div>
    </main>
    <?php include('../includes/footer.php') ?>
    <?php include('../includes/database-close.php'); ?>
</body>
</html>