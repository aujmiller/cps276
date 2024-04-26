<?php

// DISPLAY NOTES FORM

$notes = "";
require_once 'date_Time.php';
$dt = new Date_time();
$notes = $dt->init();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">

    <title>Display Notes</title>
</head>
<body> 
    
    <div class="container">
        <form method="post" action="#" class="row g-3">
        <h1>Display Notes</h1>

        <a href='addNote.php' target='_blank'>Add Note</a> 

        <div class="mb-3">
            <label for="begDate" class="form-label">Beginning Date</label>
            <input type="date" class="form-control" id="begDate" name="begDate">
        </div>

        <div class="mb-3">
            <label for="endDate" class="form-label">Ending Date</label>
            <input type="date" class="form-control" id="endDate" name="endDate">
        </div>

        <div class="form-group">
      		<input type="submit" class="btn btn-primary" name="getNotes" id="getNotes" value="Get Notes" />
      	</div>

          <p><?php echo $notes ?></p>

        </form>
    </div>

    

</body>

</html>