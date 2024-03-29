<?php

require '../classes/Pdo_methods.php';

function formatName($name) {
    $splitName = explode(' ', $name);
    $lastName = $splitName[1];
    $firstName = $splitName[0];
    $formattedName = $lastName.', '.$firstName;
    return $formattedName;
}

$data = json_decode($_POST["data"]);
// echo $data->name;
// echo formatName($data->name);
$formattedName = formatName($data->name);
// echo $formattedName;

$pdo = new PdoMethods();
$sql = "INSERT INTO names (name) VALUES (:name)";

$bindings = [
    [':name', $formattedName, 'str']
];

$result = $pdo->otherBinded($sql, $bindings);

if ($result === 'error') {
    $response = (object) [
        'masterstatus'=>'error',
        'msg'=>"There was an error adding the name."
    ];
} else {
    $response = (object) [
        'masterstatus'=>'success',
        'msg'=>"Name has been added."
    ];
}

echo json_encode($response);




// $response = (object)[
// 	'masterstatus'=>'success',
// 	'msg'=>"Name has been added."
// ];

// echo json_encode($response);
    

?>