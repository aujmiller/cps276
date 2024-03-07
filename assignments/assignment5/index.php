<?php

$output = "";
$test = "";

if(count($_POST) > 0){
    require_once 'directories.php';
    $directories = new Directories();
    $test = $directories->createDir();
   
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

    <title>File and Directory - Assignment 5</title>
</head>
<body> 
    
    <div class="container">
        <h1>File and Directory Assignment</h1>
        <p>Enter a folder name and the contents of a file. Folder names should contain alpha numeric characters only.</p>
        <p><?php echo $output ?></p>
        <p><?php echo $test ?></p>
        <form method="post" action="#" class="row g-3">
        
        <div class="mb-3">
            <label for="folderName" class="form-label">Folder Name</label>
            <input type="text" class="form-control" id="folderName" name="folderName">
        </div>
        <div class="mb-3">
            <label for="fileContent" class="form-label">File Content</label>
            <textarea style="height: 200px;" class="form-control" id="fileContent" name="fileContent"></textarea>
        </div>
        <div class="form-group">
      		<input type="submit" class="btn btn-primary" name="submit" id="submit" value="Submit"/>
      	</div>
          </form>
    </div>

</body>

</html>

