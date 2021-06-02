<?php
session_start();
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


//$list = ['index', 'login', 'registration', 'form', 'resume_data', 'logout'];
//$pages = (isset($_GET['tab'])) ? $_GET['tab']:'resume';
//
//if(in_array($pages, $list)) {
//    include "$pages.php";
//}
//
//if (array_key_exists('user', $_SESSION)) {
//    echo 'Hello,' . $_SESSION['user']['name'];
//}
$default_page = 'functionality/resume';
$process = $_GET['process'] ?? null;
if ($process) {
    include "$process.php";
    exit();
}
$page = $_GET['tab'] ?? $default_page;
if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
    $pages = [
        'functionality/login' => 'Login',
        'functionality/registration' => 'Registration',
        'functionality/form' => 'Form',
        'functionality/resume_data' => 'Change data',
        'functionality/logout' => 'Logout',
    ];
} else {
    $pages = [
        'functionality/login' => 'Login',
        'functionality/registration' => 'Registration',
    ];
}
$page = in_array($page, array_keys($pages)) ? $page : $default_page;
//print_r($page);
//var_dump($_SESSION['user']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/menu.css">

    <title><?php if(!empty($pages[$page])) {
            echo $pages[$page];
        }else { echo 'Resume';} ?>
    </title>
</head>
<body>
<?php
include 'functionality/menu.php';
include "$page.php";
?>
</body>
</html>

