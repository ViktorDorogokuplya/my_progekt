<?php
require_once 'connectionDB.php';

$firstName = filter_var(trim($_POST['first-name']), FILTER_SANITIZE_STRING);
$lastName = filter_var(trim($_POST['last-name']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
$confirmPassword = filter_var(trim($_POST['confirm-password']), FILTER_SANITIZE_STRING);
$checkbox = isset($_POST['confirm']);

if(mb_strlen($firstName) < 4 || mb_strlen($firstName) > 60) {
    $_SESSION['massage'] = "Send correct Firstname!";
} elseif
    (mb_strlen($lastName) < 5 || mb_strlen($lastName) > 60) {
    $_SESSION['massage'] = "Send correct Lastname!";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['massage'] = "Send correct Email!";
} elseif (mb_strlen($password) < 5 || mb_strlen($password) > 60) {
    $_SESSION['massage'] = "Send correct password!";
} elseif (mb_strlen($password) < 5 || mb_strlen($password) > 60) {
    $_SESSION['massage'] = "Send correct Confirm!";
} elseif ($password != $confirmPassword) {
    $_SESSION['massage'] = "Send correct Password and Confirm password!";
} elseif ($checkbox != 'yes') {
    $_SESSION['massage'] = "Please confirm that you accept the terms of use and privacy policy.!";
}
if (isset($_SESSION['massage'])) {
    header('Location: ../index.php?tab=pages/registration');
    exit();
}
$password = md5($password);

$connect = mysqli_connect('localhost', 'admin', 'password', 'my_db');
if ($connect == false) {
    print("Error: Unable to connect to MySQL." . mysqli_connect_error());
} else {
    print("Connection established successfully!");
    header('Location: ../index.php?tab=pages/register');
}

mysqli_query($connect,"INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES (NULL, '$firstName', '    $email', '$password')");

?>