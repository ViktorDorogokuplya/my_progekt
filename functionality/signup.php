<?php
require_once 'connectionDB.php';

$output = ['success' => false];
$data = json_decode(file_get_contents('php://input'), true);

//$firstName = filter_var(trim($_POST['first_name']), FILTER_SANITIZE_STRING);
//$lastName = filter_var(trim($_POST['last_name']), FILTER_SANITIZE_STRING);
//$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
//$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
//$confirmPassword = filter_var(trim($_POST['confirm_password']), FILTER_SANITIZE_STRING);
//$checkbox = isset($_POST['accept']);
//
//if(mb_strlen($firstName) < 4 || mb_strlen($firstName) > 60) {
//    $_SESSION['massage'] = "Send correct Firstname!";
//} elseif
//(mb_strlen($lastName) < 5 || mb_strlen($lastName) > 60) {
//    $_SESSION['massage'] = "Send correct Lastname!";
//} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//    $_SESSION['massage'] = "Send correct Email!";
//} elseif (mb_strlen($password) < 5 || mb_strlen($password) > 60) {
//    $_SESSION['massage'] = "Send correct password!";
//} elseif (mb_strlen($password) < 5 || mb_strlen($password) > 60) {
//    $_SESSION['massage'] = "Send correct Confirm!";
//} elseif ($password != $confirmPassword) {
//    $_SESSION['massage'] = "Send correct Password and Confirm password!";
//} elseif ($checkbox != 'yes') {
//    $_SESSION['massage'] = "Please confirm that you accept the terms of use and privacy policy.!";
//}
$connect = mysqli_connect('localhost', 'admin', 'password', 'my_db');

if (!$connect) {
    $output['message'] = "Error: Unable to connect to MySQL." . mysqli_connect_error();
    goto output;
}

$email = mysqli_real_escape_string($connect, $data['email']);
$password = $data['password'];
$fullName = mysqli_real_escape_string($connect, "{$data['first_name']} {$data['last_name']}");
$password = md5($password);

$connect = mysqli_connect('localhost', 'admin', 'password', 'my_db');

$result = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '{$email}'");

if (mysqli_num_rows($result)) {
    $output['message'] = "This email is already taken. Please choose a different one.";
    goto output;
}

mysqli_query($connect, "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$fullName', '$email', '$password')");

$result = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = " . mysqli_insert_id($connect));

if (mysqli_num_rows($result)) {

    $user = mysqli_fetch_assoc($result);

    $_SESSION['user'] = $user;
    unset($user['id'], $user['password']);
//    var_dump($result);
    $output = [
        'success' => true,
        'user' => $user
    ];
} else {
    $output['message'] = "Cannot create a user.";
}

output:
header('Content-Type: application/json');
echo json_encode($output);