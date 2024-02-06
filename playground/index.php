<!-- most of your php goes above your html. Scalable and separation of concerns. Some php will be in the html -->
<?php 

$val = "this is a string (php)";
// echo $val;

$i = 0;
$list = "<ul>";         // unordered list
    while($i <10) {
        $list .= "<li>$i</li>"; // .= is concatenation, li is list
        $i++;

    }
$list .= "</ul>";

$x = "7";
$y = 5;
echo ($x + $y);

// heredoc, multi-line string
$string = <<<STR
<a href="google">Google</a>    
This is a heredoc multi-line string with "quotes", the double quotes render because we
are using the heredoc, where both 'single' and "double quotes" render
$list
STR;

/* SHOWS HTML SYNTAX
$string = <<<HTML
<a href="google">Google</a>    
This is a heredoc multi-line string with "quotes", the double quotes render because we
are using the heredoc, where both 'single' and "double quotes" render
$list
HTML;
*/

echo $string;

// nested loop (assignment2, exercise 1)
for ($i = 1; $i < 5; $i++){
    echo $i . "<br>";
    for ($j = 1; $j < 4; $j++){
    echo "&nbsp;&nbsp;&nbsp;&nbsp;".$j."<br>";
    }
}

/* Nice way to output an array, good diagnostic tool
echo "<pre>";
print_r($arr);
echo "</pre>";
*/

?>

<!-- html can be thought of as your view, or your main for the page. -->
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Playground</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  </head>
  <body>

    <p> This is a test. (html)</p>
    <p><?php echo $val; ?> </p>

    <?php echo $list; ?>

  </body>
</html>