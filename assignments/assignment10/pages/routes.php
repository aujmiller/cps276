<?php

$path = "index.php?page=welcome"; // SHOULD IT BE LOGIN???
$nav = "";
$adminNav = <<<HTML
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="navbar-nav">
            <a class="nav-link active" href="index.php?page=addContact">Add Contact</a>
            <a class="nav-link active" href="index.php?page=deleteContacts">Delete Contact(s)</a>
            <a class="nav-link active" href="index.php?page=addAdmin">Add Admin</a>
            <a class="nav-link active" href="index.php?page=deleteAdmins">Delete Admin(s)</a>
            <a class="nav-link active" href="index.php?page=logout">Logout</a>
        </div>       
    </nav>
HTML;

$staffNav = <<<HTML
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="navbar-nav"> 
            <a class="nav-link active" href="index.php?page=addContact">Add Contact</a>
            <a class="nav-link active" href="index.php?page=deleteContacts">Delete Contact(s)</a>
            <a class="nav-link active" href="index.php?page=logout">Logout</a>
        </div>
    </nav>
HTML;

function security(){
    global $nav, $staffNav, $adminNav;
    session_start();
    // print_r($_SESSION);
    if($_SESSION['access'] != 'accessGranted'){
        header('location: logout.php');
        exit;
    }
    
    else if($_SESSION['status'] == 'Staff'){
        $nav = $staffNav;
    }
    else if($_SESSION['status'] == 'Admin'){
        $nav = $adminNav;
    }
}

function admin(){
    if($_SESSION['status'] != 'Admin'){
        header('location: logout.php');
        exit;
    }
}

// else if($_GET['page'] === "addAdmin"){
//     security();
//     admin();
//     require_once('pages/addAdmin.php');

// are both of these working?
// echo "outside access".$_SESSION;
// if (isset($_SESSION['access']) && $_SESSION['access'] == "accessGranted") {
//     if (isset($_SESSION['access']) ) {
//         print_r($_SESSION."inside access");
//         if ($_SESSION['access'] == "accessGranted") {
//             print_r("inside access granted");
//     if ($_SESSION['status'] == "admin") {
//         $nav=<<<HTML
//             <nav class="navbar navbar-expand-lg bg-body-tertiary">
//                 <div class="container-fluid">>
//                     <div class="navbar-nav">
//                         <a class="nav-link active" href="index.php?page=logout">Logout</a>
//                         <a class="nav-link active" href="index.php?page=addAdmin">Add Admin Information</a>
//                         <a class="nav-link active" href="index.php?page=deleteAdmins">Delete Admins</a>
//                         <a class="nav-link active" href="index.php?page=addContact">Add Contact</a>
//                         <a class="nav-link active" href="index.php?page=deleteContacts">Delete Contacts</a>
//                     </div>
//                 </div>
//             </nav>
//         HTML;
//     }

//     else {
//         $nav=<<<HTML
//             <nav class="navbar navbar-expand-lg bg-body-tertiary">
//                 <div class="container-fluid">>
//                     <div class="navbar-nav">
//                         <a class="nav-link active" href="index.php?page=addContact">Add Contact</a>
//                         <a class="nav-link active" href="index.php?page=deleteContacts">Delete Contacts</a>
//                         <a class="nav-link active" href="index.php?page=logout">Logout</a>
//                     </div>
//                 </div>
//             </nav>
//         HTML;
//     }
// }
// }

// print_r($_GET);

if(isset($_GET)){
    if($_GET['page'] === "addAdmin"){
        security();
        admin();
        require_once('pages/addAdmin.php');
        $result = init();
    }
    
    else if($_GET['page'] === "deleteAdmins"){
        security();
        admin();
        require_once('pages/deleteAdmins.php');
        $result = init();
    }

    else if($_GET['page'] === "addContact"){
        security();
        require_once('pages/addContact.php');
        $result = init();
    }

    else if($_GET['page'] === "deleteContacts"){
        security();
        require_once('pages/deleteContacts.php');
        $result = init();
    }

    else if($_GET['page'] === "welcome"){
        security();
        require_once('pages/welcome.php');
        $result = init();
        // print_r($_POST);
    }

    else if($_GET['page'] === "login"){
       
        require_once('pages/login.php');
        $result = init();
        
        // echo 'here';
    }

    
    else if($_GET['page'] === "logout"){
        security();
        require_once('logout.php');
        $result = init();

    }

    else {
        header('location: '.$path);
    }
}

else {
    header('location: '.$path);
}

?>