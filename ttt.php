<!DOCTYPE html>
    <html>
    <head>
    <title>File Upload</title>
    </head>
    <body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="csv_file">
        <input type="file" name="csv_file1">
        <input type="file" name="csv_file2">
        <input type="submit" name="submit">
    </form>


    <?php
        if(isset($_POST['submit'])) {

            if (($_FILES['csv_file']['size'] > 0)&&($_FILES['csv_file1']['size'] > 0)&&($_FILES['csv_file2']['size'] > 0))
            {
                echo "<p>".$_FILES['csv_file']['name']." => file input successfull</p>";
                echo "<p>".$_FILES['csv_file1']['name']." => file input successfull</p>";
                echo "<p>".$_FILES['csv_file2']['name']." => file input successfull</p>";

                fileUpload();
            }
        }

    function fileUpload () {
        $target_dir = "userupolads/document/";
        $file_name = $_FILES['csv_file']['name'];

        $file_name2=$_FILES['csv_file1']['name'];
        $file_name3=$_FILES['csv_file2']['name'];
        $file_tmp = $_FILES['csv_file']['tmp_name'];
        $file_tmp1 = $_FILES['csv_file1']['tmp_name'];
        $file_tmp2 = $_FILES['csv_file2']['tmp_name'];

        if ((move_uploaded_file($file_tmp, $target_dir.$file_name))&&((move_uploaded_file($file_tmp1, $target_dir.$file_name2))&&(move_uploaded_file($file_tmp2, $target_dir.$file_name3)))) {
            echo "<h1>File Upload Success</h1>";
        }
        else {
            echo "<h1>File Upload not successfull</h1>";
        }
    }

    ?>
</body>