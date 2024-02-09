<?php

$rows = 15;
$cells = 5;

$table = '<table border="1">';

for ($row = 1; $row <= $rows; $row++) {
    $table .= "<tr>";
        for ($cell = 1; $cell <= $cells; $cell++) { 
            $table .= "<td>Row $row Cell $cell </td>";
        }
    $table .= "</tr>";
    } 
$table .="</table>";

?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercise 3</title>

  </head>
  <body>
    
     <?php echo $table; ?>   

  </body>
</html>