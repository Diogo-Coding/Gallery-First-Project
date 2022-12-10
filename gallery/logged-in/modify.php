<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="../../css/modify.css">
    <title>Modify page</title>
</head>
<body>
    <?php include('../includes/headerON.php') ?>
    <?php 
        if(isset($_GET['photo']) && !(isset($_POST['modify'])) && !(isset($_POST['delete']))){
            include('../includes/database-conn.php');
            $photoID = $_GET['photo'];

            $sql = "SELECT * FROM images WHERE id = '$photoID'";
            $result = $link->query($sql);
            
            $result->bindColumn('name', $imageName);
            $result->bindColumn('text', $imageText);
            $result->bindColumn('enabled', $enabled);

            while($result->fetch(PDO::FETCH_BOUND)){
                if($enabled == '1'){
                    $checked = 'checked';
                } else {
                    $checked = "";
                }
                ?>
                <main>
                    <div class="modify-container" id="container">
                        <div class="form-container modify-container">
                            <form action="" class="modify-form" enctype="multipart/form-data" method="POST">
                                <h1 class="modify-h1">Modify Image</h1>
                                <p></p>
                                <input class="input" type="text" value="<?=$imageName?>" name="image-name"/>
                                <input class="input" type="text" value="<?=$imageText?>" name="image-text"/>
                                <label for="enabled">Enabled <input type="checkbox" name="enabled" id="enabled" <?php echo $checked ?>></label>
                                <p></p>
                                <input type="submit" class="modify" value="Modify" name="modify">
                                <input type="hidden" name="id" value="<?=$_GET['photo']?>">
                            </form>
                        </div>
                    </div>
                    <div class="delete-container" id="container" style="margin-top: 10px;">
                        <div class="form-container delete-container">
                            <form action="" class="delete-form" enctype="multipart/form-data" method="POST">
                                <input type="submit" class="delete" value="Delete" name="delete">
                                <input type="hidden" name="id" value="<?=$_GET['photo']?>">
                            </form>
                        </div>
                    </div>
                </main>
                <?php
            }
            include('../includes/database-close.php');
        }if(isset($_POST['modify'])){
            include('../includes/database-conn.php');

            $photoID = $_POST['id'];
            $name = $_POST['image-name'];
            $text = $_POST['image-text'];
            $enabled = $_POST['enabled'];

            if($enabled == 'on'){
                $enabled = 1;
            } else {
                $enabled = 0;
            }

            $sql = "UPDATE `images` SET name = '$name', text='$text', enabled='$enabled' WHERE id='" . $photoID . "'";
            try {
                $result = $link->query($sql);
                include('../includes/update-success.php');
            } catch (Exception $ex) {
                echo "Error al actualizar imagen:" . $ex;
            }
            include('../includes/database-close.php');
        }
        if(isset($_POST['delete'])){
            include('../includes/database-conn.php');
            $photoID = $_POST['id'];

            $sql = "DELETE FROM images WHERE id='$photoID'";
            try {
                $result = $link->query($sql);
                include('../includes/delete-success.php');
            } catch (Exception $ex) {
                echo "Error al eliminar imagen:" . $ex;
            }
            include('../includes/database-close.php');
        }
    ?>
    <?php include('../includes/footer.php') ?>
</body>
</html>