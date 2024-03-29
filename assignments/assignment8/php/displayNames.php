<?php

// SELECT QUERY TO GATHER NAMES IN ALPHABETICAL ORDER ??? GET REQUEST ???
// NEED TO ADD <p> PARAGRAPH ELEMENT AROUND EACH NAME TO DISPLAY
// FOR EACH LOOP TO PARSE THROUGH NAMES??
// PUT NAMES INTO ONE STRING FOR OUTPUT?? IF SO, ADD <br> TAG FOR NEW LINE

require_once "../classes/Pdo_methods.php";

$pdo = new PdoMethods();
$sql = "SELECT name FROM names ORDER BY name;";
$result = $pdo->selectNotBinded($sql);

$output = "";

if ($result === 'error') {
    $response = (object) [
        'masterstatus'=>'error',
        'msg'=>"There was an error displaying the names."
    ];
} else {
    foreach($result as $name) {
        $output .= "<p>".implode($name)."</p>";
    }
    $response = (object) [
        'masterstatus'=>'success',
        'names'=>$output
    ];
}

echo json_encode($response);

?>