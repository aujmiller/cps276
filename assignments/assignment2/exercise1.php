<?php

$list = "<ul>";
for ($i = 1; $i < 5; $i++){
    $list .= "<li>$i</li>";
    $list .= "<ul>";
    for ($j = 1; $j < 6; $j++){
      $list .= "<li>$j</li>";
    }
  $list .= "</ul>";
}
$list .= "</ul>";

?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercise 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  </head>
  <body>
    <?php echo $list ?>
  </body>
</html>