<?php

    if(count($_POST) > 0){
        require_once 'addNames.php';
        $addName = new AddNames();
        $addName->formControl();
        $output = $addName->displayNames();
       }

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">

    <title>Add Names</title>
</head>
<body> 
    
    <div class="container">
        <form method="post" action="#" class="row g-3">
        <h1>Add Names</h1>

        <div class="form-group">
      		<input type="submit" class="btn btn-primary" name="addName" value="Add Name" />
            <input type="submit" class="btn btn-primary" name="clearNames" value="Clear Names" />
      	</div>
        <div class="mb-3">
            <label for="inputNames" class="form-label">Enter Names</label>
            <input type="text" class="form-control" id="inputNames" name="inputNames">
        </div>
        <div class="mb-3">
            <label for="nameList" class="form-label">List of Names</label>
            <textarea style="height: 500px;" class="form-control" id="nameList" name="nameList"><?php echo $output ?></textarea>
        </div>
          </form>
    </div>

</body>

</html>

