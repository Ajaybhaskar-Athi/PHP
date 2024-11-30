<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi Files Uploading</title>
</head>
<body>
    
<form method='POST' enctype="multipart/form-data">
    <label for="files">Select Files to Upload: </label>
<input type="file" name='files[]' multiple >
<input type="submit" name="submit" value="Upload Files">
</form>

</body>
</html>


<?php

if(isset($_FILES['files'])){
    
    foreach($_FILES['files']['name'] as $key => $file_name){ //key=index
        $tmp_name=$_FILES['files']['tmp_name'][$key];
        $destination="D:/LPU/VScode/PHP/htdocs/uploads/".$file_name;
        if(move_uploaded_file($tmp_name,$destination)){
            echo "File $file_name uploaded successfully! <br>";
        }else{
            echo "Error uploading file: $file_name <br>";
        }
      
    }
}

?>