<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: rgb(27,29,35);
            color: white;
        }
        form{
            background-color:rgb(29,32,38);
            border:1px solid grey;
            border-radius:5px;
            width:20%;
            padding:1rem;
            margin-left:auto;
            margin-right:auto;
            margin-top:15rem;
        }
        #selecting{
            text-align: center;
            color:rgb(98,236,223);
            font-weight:700;
            font-size:2rem;
        }
        input{
            margin:0.1rem;
            border-radius:5px;
        }
        #submit{
            background-color:rgb(29,32,38);
            width: 50%;
            height:5vh;
            margin-left:4.5rem;
            
        }
        #submit:hover{
            box-shadow:2px 2px 5px 5px rgb(98,236,223);
        }
        #display{
            width: 77%;
            margin-left:1.7rem;
        }
        .chooseFile{
            background-color:rgb(40,44,54);
            border:1px solid grey;
            border-radius:7px;
            width:80%;
            padding-left:1%;
            padding-top:2%;
            padding-bottom: 2%;
            margin-bottom:10%;
            margin-left:10%;
        }
        #message{
            padding-left:2rem;
        }
        input,textarea,button{
            font-family:inherit;
            font-size:inherit;
            color:inherit;
        }
        input[type="file"]::file-selector-button {
            background-color:rgb(29,32,38) ;
            color: white;
            border:1px solid grey;
            border-radius:5px;
            padding: 5px 10px;
            cursor: pointer;
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
            $message = "<p style='color:rgb(98,236,223);padding-left:2rem'>✅File has been successfully uploaded.</p>";
        }else{
            $message= "Failed to upload";
        }
    }
    ?>
     <form method="post" enctype="multipart/form-data">
        <p id="selecting">Upload File</p>
        <div class="chooseFile">
            <input type="file" name="myfile" id="inputSpace" style="background-color:transparent"><br>
        </div>
        <input type="submit" value="Upload File" id="submit" name="submit"><br>
        <p id="message"><?php echo $message ?></p>
    </form>

</body>
</html>