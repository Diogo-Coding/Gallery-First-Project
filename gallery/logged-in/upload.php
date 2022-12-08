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
                <form action="upload-up.php" class="upload-form" method="POST">
                    <h1 class="upload-h1">Upload Image</h1>
                    <p></p>
                    <input class="input" type="text" value="<?=$author?>" name="image-author" disabled/>
                    <input class="input" type="text" placeholder="Name" name="image-name" required/>
                    <input class="input" type="file" name="image" required/>
                    <input class="input" type="text" placeholder="Text" name="image-text" required/>
                    <p></p>
                    <input type="submit" class="upload" value="Upload" name="submit">
                </form>
            </div>
        </div>
    </main>
    <?php include('../includes/footer.php') ?>
</body>
</html>