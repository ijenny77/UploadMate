<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $file1 = "notes.txt";
    $file2 = "data.csv";
    $file3 = "document.doc";
    // $file4 = "fpdf.php";

    $open1 = fopen($file1,"w");
    fwrite($open1,"This is a sample text file.\nHello World!");
    fclose($open1);
    echo "Text file created successfully!";
    echo "<br>";

    $open2 = fopen($file2,"w");
    fputcsv($open2,["Name", "Age", "City"]);

    fputcsv($open2, ["Alice", 25, "London"]);
    fputcsv($open2, ["Bob", 30, "Paris"]);
    fclose($open2);
    echo "CSV file created successfully!";
    echo "<br>";

    $open3 = fopen($file3,"w");
    fwrite($open3,"This is a Word document.\nHello World!");
    fclose($open3);
    ?>
</body>
</html>