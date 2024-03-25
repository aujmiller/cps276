<?php

require_once "listFilesProc.php";
$listFilesProc = new ListFilesProc();
$output = $listFilesProc->listFiles();

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Uploaded Files - Assignment 7</title>
        <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    </head>
    <body>
    <div class="container m-3 mx-auto">
        <div>
            <h1>List Files</h1>
        </div>
        <div class="mb-3">
            <a href="index.php">Add File</a>
        </div>
        <div>
            <?php echo $output; ?>
        </div>
    </div>
    </body>
</html>