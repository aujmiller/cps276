<?php

require_once "../classes/Pdo_methods.php";

$pdo = new PdoMethods();

$sql = "TRUNCATE TABLE names;";

$result = $pdo->otherNotBinded($sql);

if ($result === 'error') {
    $response = (object) [
        'masterstatus'=>'error',
        'msg'=>"There was an error deleting the names."
    ];
} else {
    $response = (object) [
        'masterstatus'=>'success',
        'msg'=>"Name has been deleted."
    ];
}

echo json_encode($response);

?>