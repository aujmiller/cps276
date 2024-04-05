<?php

$output = "";
require_once "date_Time.php";
$test = new Date_time();
$output = $test->init();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">

    <title>Add Note</title>
</head>
<body> 
    
    <div class="container">
        <form method="post" action="#" class="row g-3">
        <h1>Add Note</h1>

        <a href='displayNotes.php' target='_blank'>Display Notes</a> 
        <p><?php echo $output ?></p>

        <input type="datetime-local" class="form-control" id="dateTime" name="dateTime">

        <div class="mb-3">
            <label for="note" class="form-label">Note</label>
            <textarea style="height: 300px;" class="form-control" id="note" name="note"></textarea>
        </div>

        <div class="form-group">
      		<input type="submit" class="btn btn-primary" name="addNote" id="addNote" value="Add Note" />
      	</div>

        </form>
    </div>

</body>

</html>