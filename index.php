<?php
session_start();
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$default_page = 'pages/resume';
$process = $_GET['functionality'] ?? null;
if ($process) {
    include "$process.php";
    exit();
}
$page = $_GET['tab'] ?? $default_page;
if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
    $pages = [
        'pages/login' => 'Login',
        'pages/registration' => 'Registration',
        'pages/form' => 'Form',
        'pages/resume_data' => 'Change data',
        'pages/logout' => 'Logout',
    ];
} else {
    $pages = [
        'pages/login' => 'Login',
        'pages/registration' => 'Registration',
    ];
}
$page = in_array($page, array_keys($pages)) ? $page : $default_page;

?>

<head>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/menu.css">

    <title><?php if(!empty($pages[$page])) {
            echo $pages[$page];
        }else { echo 'Resume';} ?>
    </title>
</head>
<body>
<?php
include 'pages/menu.php';
include "$page.php";
?>
</body>


