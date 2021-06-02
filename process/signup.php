<?php
session_start();
require_once 'connectionDB.php';

$userName = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

$password = md5($password);

$connect = mysqli_connect('localhost', 'admin', 'password', 'my_db');
if ($connect == false) {
    print("Error: Unable to connect to MySQL." . mysqli_connect_error());
}
//else {
//    print("Connection established successfully!");
//}

$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `name` = '$userName' AND `password` = '$password'");

if (mysqli_num_rows($check_user) > 0) {

    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user'] = [
      "id" => $user['id'],
      "name" => $user['name'],
      "email" => $user['email']
    ];
    header('Location: ../index.php');
//    print_r($check_user);
} else {
    $_SESSION['massage'] = "Wrong username and password! Please register!";
    header('Location: ../index.php?tab=functionality/login');
}

//echo mysqli_num_rows($check_user);