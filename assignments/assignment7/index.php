<?php

$output = "";

if(count($_POST) > 0){
    require_once 'fileUploadProc.php';
    $file= new FileUpload();
    $output = $file->fileUpload();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">

    <title>PDO - Assignment 7</title>
</head>
<body> 
    
    <div class="container">
        <h1>File Upload</h1>
        <a href='listFilesForm.php' target='_blank'>Show File List</a> 
        <p><?php echo $output ?> </p>
        <form method="post" action="#" class="row g-3" enctype="multipart/form-data">
        <div class="form-group">
            <label for="fileName" class="form-label">File Name</label>
            <input type="text" class="form-control" id="fileName" name="fileName">
        </div>
        <div class="form-group">
            <input type="file" class="form-control" id="file" name="file">
        </div>
        <div class="form-group">
      		<input type="submit" class="btn btn-primary" name="uploadFile" id="uploadFile" value="Upload File"/>
      	</div>
          </form>
    </div>

</body>

</html>

