<?php

function init(){
    // session_start();

    if ($_SESSION['access'] !== "accessGranted") {
        header('Location: index.php?page=login');
    }

    $user = $_SESSION['name'];

    return ["<h1>Welcome</h1>","<p>Welcome $user, click one of the links above to get started.</p>"];
}

?>