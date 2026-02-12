<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            border:1px solid black;
            border-radius:5px;
            width:20%;
            padding:1rem;
            margin-left:auto;
            margin-right:auto;
            font-size:2rem;
            margin-top:15rem;
        }
        input{
            margin:0.1rem;
            border-radius:5px;
        }
        #submit{
            width: 50%;
            margin-left:4.5rem;
        }
        #display{
            width: 15rem;
            margin-left:1.7rem;
        }
    </style>
</head>
<body>
    <?php

    $message = "";
    if(isset($_FILES["myfile"])){
        $fileName = $_FILES["myfile"]["name"];
        $file_tmp = $_FILES["myfile"]["tmp_name"];
        $uploadDir = "uploads/";

        if(!is_dir($uploadDir)){
            mkdir($uploadDir,0777,true);
        }

        $destination = $uploadDir . $fileName;

        if(move_uploaded_file($file_tmp,$destination)){
            $message = "File has been successfully uploaded.";
        }else{
            $message= "Failed to upload";
        }
    }
    ?>
     <form method="post" enctype="multipart/form-data">
        Select file to upload:<br>
        <input type="file" name="myfile"><br>
        <input type="submit" value="Upload File" id="submit" name="submit"><br>
        <input type="text" id="display" value="<?php echo $message ?>" readonly>
    </form>

</body>
</html>