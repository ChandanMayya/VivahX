<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        include("connection.php");
        if ($_FILES['fphoto']['size'] > 0){
            
            $target_dir = "userupolads/document/";
            $file_name = $_FILES['fphoto']['name'];
            $filestore=file_get_contents($_FILES['fphoto']['tmp_name']);
            $file_tmp = $_FILES['fphoto']['tmp_name'];
    
            if (move_uploaded_file($file_tmp, $target_dir.$file_name)) {
                echo "<h1>File Upload Success</h1>";
                $sql="INSERT INTO `details`(`rec_id`, `face_photo`) VALUES ('899','$file_name')";
                if($con->query($sql)===TRUE){
                    echo("INSERTED to details");
                }else echo("Fail Again!");
            }
            else {
                echo "<h1>File Upload not successfull</h1>";
            }
        }else echo("Truely not recognised");
    }
    ?>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
    <div class="col-12">
        <label for="aadhar">Upload Aadhar Card:
            <input type="file" name="fphoto" id="myfile" required>
        </label>
        <input type="submit" value="submit">
    </div><br>
</form>
</body>
</html>