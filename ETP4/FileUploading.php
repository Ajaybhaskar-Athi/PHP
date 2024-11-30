

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Uploadig</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name='myfile'>
        <input type="submit" name='upload' >
    </form>
</body>
</html>


<?php

if (isset($_FILES['myfile'])) {
    // Check for file upload errors
    $error = $_FILES['myfile']['error'];

    if ($error === UPLOAD_ERR_OK) {
        $filename = $_FILES['myfile']['name'];
        $tempname = $_FILES['myfile']['tmp_name'];
        $destination = 'D:/LPU/VScode/PHP/htdocs/uploads/' . $filename;


        // Check if the file was successfully moved
        if (move_uploaded_file($tempname, $destination)) {
            echo "File uploaded successfully.";
        } else {
            echo "Failed to move file to destination.";
        }
    } else {
        // Handle different upload errors
        echo "Error uploading file. Error code: $error";
    }
}

?>
